<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\HomePage;
use App\Models\HomePageGoldRate;
use App\Models\GoldRateByMonth;
use App\Models\GoldRateByWeek;
use App\Models\GoldRateByDay;
use App\Models\Blogs;
use App\Models\WebStory;
use Yajra\DataTables\DataTables;
use App\Models\UpdatedPrice;
use DB;
require base_path('app/Http/index-api/vendors/autoload.php');
use Google;
use Google_Service_Indexing;
use Google_Service_Indexing_UrlNotification;
use File;

class AdminController extends Controller
{
   


    public function indexAdmin()
    {
        $updatedPrice=UpdatedPrice::first();
        return view('admin.index',['updatedPrice'=>$updatedPrice]);
    }


    public function GoldRateUpdate(REQUEST $request)
    {
       
        
        $updatedPrice = UpdatedPrice::first();

        if ($updatedPrice) {
          
            $updatedPrice->kerat24k =  $request->kerat24k;
            $updatedPrice->kerat22k =  $request->kerat22k;
            $updatedPrice->kerat21k =  $request->kerat21k;
            $updatedPrice->kerat20k =  $request->kerat20k;
            $updatedPrice->kerat18k =  $request->kerat18k;
            $updatedPrice->gold_per_ounce_dollar =  $request->gold_per_ounce_dollar;
            $updatedPrice->save();
            
            return redirect()->back()->with('success', 'Gold Rate Updated successfully.');
        }
        
      
    }
    // start home page content update
    
    public function HomeUpdate()
    {

        $home_content=HomePage::first();
        return view('admin.show-home-content',['home_content' => $home_content]);

    }

    public function UpdateHomePageContent(REQUEST $request)
    {
        $homeContent = HomePage::first();

        if ($request->hasFile('Img')) {
            $dir = public_path('images/');
            $dir1 = 'images/';

            // Get the full path to the public directory
            $publicPath = public_path('/');

            // Construct the full path to the image using the 'img' attribute
            $imagePath = $publicPath . $homeContent->img;

            // Delete the image
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $extension = strtolower($request->file('Img')->getClientOriginalExtension());
            $fileName = $request->slug.'.'. $extension; // rename image
            
            $request->file('Img')->move($dir, $fileName);
            $logos1 = "{$dir1}{$fileName}";
        
            $homeContent->img = $logos1;
            
        }
        
        $homeContent->update([
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'home_schema' => $request->schema,
        ]);
        
        return redirect()->back()->with('success', 'Successfully Updated');
        
    }


    // end home page content update

    // today gold price start

    public function HomeUpdateGoldRate()
    {

        $HomePageGoldRate=HomePageGoldRate::first();
        return view('admin.show-home-content-gold-rate',['HomePageGoldRate' => $HomePageGoldRate]);

    }

    public function UpdateHomePageContentGoldRate(REQUEST $request)
    {
        $HomePageGoldRate = HomePageGoldRate::first();


        if ($request->hasFile('Img')) {
            $dir = public_path('images/');
            $dir1 = 'images/';

            // Get the full path to the public directory
            $publicPath = public_path('/');

            // Construct the full path to the image using the 'img' attribute
            $imagePath = $publicPath . $HomePageGoldRate->img;

            // Delete the image
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $extension = strtolower($request->file('Img')->getClientOriginalExtension());
            $fileName = $request->slug.'.'. $extension; // rename image
            
            $request->file('Img')->move($dir, $fileName);
            $logos1 = "{$dir1}{$fileName}";
        
            $HomePageGoldRate->img = $logos1;
            
        }
        



        if ($HomePageGoldRate) {
            $HomePageGoldRate->update([
                'content' => $request->content,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'schmea_today' => $request->schmea_today,
            ]);
        
            return redirect()->back()->with('success', 'Successfully Updated');

        }
    }

    // today gold price end

    //  start rate by month
    public function addRateByMonth()
    {
        
        return view('admin.add-repost-by-month');
    }


    public function AddRateByMonthInsert(REQUEST $request)
    {

    

        $goldRateByMonth = new GoldRateByMonth();
        $goldRateByMonth->meta_title = $request->meta_title;
        $goldRateByMonth->meta_description =  $request->meta_description;
        $goldRateByMonth->meta_keyword =  $request->meta_keyword;
        $goldRateByMonth->title =  $request->title;
        $goldRateByMonth->slug =  $request->slug;
        $goldRateByMonth->description_short =  $request->description_short;
        $goldRateByMonth->alt_tag =  $request->alt_tag;
        $goldRateByMonth->details =  $request->content;
        // $goldRateByMonth->schemaa_month =  $request->schemaa_month;
    

        

        if($request->hasFile('Img'))
        {
              $dir =  public_path('images/');
              $dir1 = 'images/';            
              $extension = strtolower($request['Img']->getClientOriginalExtension()); // get image extension
              $fileName = $request->slug.'.'. $extension; // rename image
              $request['Img']->move($dir, $fileName);
              $logos1 ="{$dir1}{$fileName}";
              $goldRateByMonth->img = $logos1;
                
        }
    
          $goldRateByMonth->save();
    
            
          $apiKey = 'MTZjOGNjYWMtZmU1ZC00ZWQ2LThlNDMtZjMyMzMyNjMzMTVk';
          $appId = '9d827635-a865-4c6f-8e68-1fdd56cbada6';
          $apiEndpoint = 'https://onesignal.com/api/v1/notifications';
          $data = [
              'app_id' => $appId,
              'contents' => [
                  'en' => $request->title
              ],
              'included_segments' => ['All'] , // Send to all subscribed users 
              // 'icon' => '', // Image URL
              'chrome_web_image' => asset('images/today-gold-rate-in-pakistan.webp'),
              'url' =>url($request->slug), // URL link
  
          ];
          $payload = json_encode($data);
          $ch = curl_init($apiEndpoint);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_HEADER, false);
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
          curl_setopt($ch, CURLOPT_HTTPHEADER, [
              'Content-Type: application/json',
              'Authorization: Basic ' . $apiKey
          ]);
          $response = curl_exec($ch);
          echo $response;
          curl_close($ch);
  
    
    
        return redirect()->back()->with('success', 'Rate Added successfully.');
    
    
    
    
    }


    public function ShowReportByMonth(REQUEST $request)
    {
 
        if (request()->ajax()) {
            
            
            $GoldRateByMonth = GoldRateByMonth::select('*');
    
            return DataTables::of($GoldRateByMonth)
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-danger" id="delscholarship' . $row->id . '" onclick="delscholarship(' . $row->id . ')"><i class="fa fa-trash"></i></button>
                    <a href="'.url("panel/admin/edit/".$row->id).'" class="btn btn-primary"><i class="fa fa-edit"></i></a>';
                })
                ->editColumn('img', function ($row) {
                    $logoUrl = asset($row->img);
                    return '<img src="' . $logoUrl . '" alt="University Logo" width="100px" height="100px">';
                })
                ->rawColumns(['img','action'])
                ->make(true);
            
        }
    
 
      return view('admin.show-report-by-month');
 
    }



    
    public function delReportByMonth(REQUEST $request)
    {

        $GoldRateByMonth = GoldRateByMonth::find($request->id);

        if ($GoldRateByMonth) {
           
            // Get the full path to the public directory
            $publicPath = public_path('/');
            

            // Construct the full path to the image using the 'img' attribute
            $imagePath = $publicPath . $GoldRateByMonth->img;

            // Delete the image
            // if (File::exists($imagePath)) {
            //     File::delete($imagePath);
            // }
            $GoldRateByMonth->delete();
            // Check if the model instance no longer exists in the database after deletion
            if (!$GoldRateByMonth->exists) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        } else {
            return response()->json(['success' => false]);
        }


    }

    public function EditMonlthyReport(REQUEST $request)
    {


        $id = $request->input('id'); 
        $goldRateByMonth = GoldRateByMonth::findOrFail($id);;
        $goldRateByMonth->meta_title = $request->meta_title;
        $goldRateByMonth->meta_description =  $request->meta_description;
        $goldRateByMonth->meta_keyword =  $request->meta_keyword;
        $goldRateByMonth->title =  $request->title;
        $goldRateByMonth->slug =  $request->slug;
        $goldRateByMonth->description_short =  $request->description_short;
        $goldRateByMonth->alt_tag =  $request->alt_tag;
        $goldRateByMonth->details =  $request->content;
        // $goldRateByMonth->schemaa_month =  $request->schemaa_month;
    
        if($request->hasFile('Img'))
        {
            $dir =  public_path('images/');
            $dir1 = 'images/';            
            $extension = strtolower($request['Img']->getClientOriginalExtension()); // get image extension
            $fileName = $request->slug.'.'. $extension; // rename image
            $request['Img']->move($dir, $fileName);
            $logos1 ="{$dir1}{$fileName}";
            $goldRateByMonth->img = $logos1;
                
        }
    
        $goldRateByMonth->save();
    
        return redirect()->back()->with('success', 'Report Updated successfully.');



    }




   public function EditRportMonlthy(REQUEST $request)
   {
     
    $GoldRateByMonth = GoldRateByMonth::where('id',$request->id)->first();
    return view('admin.edit-report-monlthy',['GoldRateByMonth'=>$GoldRateByMonth]);
   
   }

   
  

    // end rate by month report




    // start rate by weekly

    public function addRateByWeek()
    {
        
        return view('admin.add-repost-by-week');
    }


    public function AddRateByWeekInsert(REQUEST $request)
    {

    

        $GoldRateByWeek = new GoldRateByWeek();
        $GoldRateByWeek->meta_title = $request->meta_title;
        $GoldRateByWeek->meta_description =  $request->meta_description;
        $GoldRateByWeek->meta_keyword =  $request->meta_keyword;
        $GoldRateByWeek->title =  $request->title;
        $GoldRateByWeek->slug =  $request->slug;
        $GoldRateByWeek->description_short =  $request->description_short;
        $GoldRateByWeek->alt_tag =  $request->alt_tag;
        $GoldRateByWeek->details =  $request->content;
        // $GoldRateByWeek->schema_week =  $request->schema_week;

        if($request->hasFile('Img'))
        {
              $dir =  public_path('images/');
              $dir1 = 'images/';            
              $extension = strtolower($request['Img']->getClientOriginalExtension()); // get image extension
              $fileName = $request->slug.'.'. $extension; // rename image
              $request['Img']->move($dir, $fileName);
              $logos1 ="{$dir1}{$fileName}";
              $GoldRateByWeek->img = $logos1;
                
        }
    
          $GoldRateByWeek->save();
    
          $apiKey = 'MTZjOGNjYWMtZmU1ZC00ZWQ2LThlNDMtZjMyMzMyNjMzMTVk';
          $appId = '9d827635-a865-4c6f-8e68-1fdd56cbada6';
          $apiEndpoint = 'https://onesignal.com/api/v1/notifications';
          $data = [
              'app_id' => $appId,
              'contents' => [
                  'en' => $request->title
              ],
              'included_segments' => ['All'] , // Send to all subscribed users 
              // 'icon' => '', // Image URL
              'chrome_web_image' => asset('images/today-gold-rate-in-pakistan.webp'),
              'url' =>url($request->slug), // URL link
  
          ];
          $payload = json_encode($data);
          $ch = curl_init($apiEndpoint);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_HEADER, false);
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
          curl_setopt($ch, CURLOPT_HTTPHEADER, [
              'Content-Type: application/json',
              'Authorization: Basic ' . $apiKey
          ]);
          $response = curl_exec($ch);
          echo $response;
          curl_close($ch);
  
    
    
        return redirect()->back()->with('success', 'Rate Added successfully.');
    
    
    
    
    }


    
    public function ShowReportByWeek(REQUEST $request)
    {
 
        if (request()->ajax()) {
            
            
            $GoldRateByWeek = GoldRateByWeek::select('*');
    
            return DataTables::of($GoldRateByWeek)
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-danger" id="delscholarship' . $row->id . '" onclick="delscholarship(' . $row->id . ')"><i class="fa fa-trash"></i></button>
                    <a href="'.url("panel/admin/edit-week/".$row->id).'" class="btn btn-primary"><i class="fa fa-edit"></i></a>';
                })
                ->editColumn('img', function ($row) {
                    $logoUrl = asset($row->img);
                    return '<img src="' . $logoUrl . '" alt="University Logo" width="100px" height="100px">';
                })
                ->rawColumns(['img','action'])
                ->make(true);
            
        }
    
 
      return view('admin.show-report-by-week');
 
    }


    public function delReportByWeek(REQUEST $request)
    {

        $GoldRateByWeek = GoldRateByWeek::find($request->id);

        if ($GoldRateByWeek) {
           
            // Get the full path to the public directory
            $publicPath = public_path('/');
            

            // Construct the full path to the image using the 'img' attribute
            $imagePath = $publicPath . $GoldRateByWeek->img;

            // Delete the image
            // if (File::exists($imagePath)) {
            //     File::delete($imagePath);
            // }
            $GoldRateByWeek->delete();
            // Check if the model instance no longer exists in the database after deletion
            if (!$GoldRateByWeek->exists) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        } else {
            return response()->json(['success' => false]);
        }


    }


    
   public function EditRportWeekly(REQUEST $request)
   {
     
    $GoldRateByWeek = GoldRateByWeek::where('id',$request->id)->first();
    return view('admin.edit-report-weekly',['GoldRateByWeek'=>$GoldRateByWeek]);
   
   }



   
   public function EditWeekReport(REQUEST $request)
    {


        $id = $request->input('id'); 
        $GoldRateByWeek = GoldRateByWeek::findOrFail($id);;
        $GoldRateByWeek->meta_title = $request->meta_title;
        $GoldRateByWeek->meta_description =  $request->meta_description;
        $GoldRateByWeek->meta_keyword =  $request->meta_keyword;
        $GoldRateByWeek->title =  $request->title;
        $GoldRateByWeek->slug =  $request->slug;
        $GoldRateByWeek->description_short =  $request->description_short;
        $GoldRateByWeek->alt_tag =  $request->alt_tag;
        $GoldRateByWeek->details =  $request->content;
        // $GoldRateByWeek->schema_week =  $request->schema_week;
        if($request->hasFile('Img'))
        {
            $dir =  public_path('images/');
            $dir1 = 'images/';            
            $extension = strtolower($request['Img']->getClientOriginalExtension()); // get image extension
            $fileName = $request->slug.'.'. $extension; // rename image
            $request['Img']->move($dir, $fileName);
            $logos1 ="{$dir1}{$fileName}";
            $GoldRateByWeek->img = $logos1;
                
        }
    
        $GoldRateByWeek->save();
    
        return redirect()->back()->with('success', 'Report Updated successfully.');



    }




    // end rate by weekly

   //  rate start by day


   public function addRateByDay()
   {
       
       return view('admin.add-repost-by-day');
   }


   public function addRateByBlog()
   {
       
       return view('admin.add-blogs');
   }





   
   public function AddRateByDayInsert(REQUEST $request)
   {

   

       $GoldRateByDay = new GoldRateByDay();
       $GoldRateByDay->meta_title = $request->meta_title;
       $GoldRateByDay->meta_description =  $request->meta_description;
       $GoldRateByDay->meta_keyword =  $request->meta_keyword;
       $GoldRateByDay->title =  $request->title;
       $GoldRateByDay->slug =  $request->slug;
       $GoldRateByDay->description_short =  $request->description_short;
       $GoldRateByDay->alt_tag =  $request->alt_tag;
       $GoldRateByDay->details =  $request->content;
       $GoldRateByDay->First_rate =  $request->First_rate;
       $GoldRateByDay->Second_rate =  $request->Second_rate;
    //    $GoldRateByDay->schema_day =  $request->schema;
       
       
       if($request->hasFile('Img'))
       {
             $dir =  public_path('images/');
             $dir1 = 'images/';            
             $extension = strtolower($request['Img']->getClientOriginalExtension()); // get image extension
             $fileName = $request->slug.'.'. $extension; // rename image
             $request['Img']->move($dir, $fileName);
             $logos1 ="{$dir1}{$fileName}";
             $GoldRateByDay->img = $logos1;
               
       }
   
         $GoldRateByDay->save();
   
           
           
          $apiKey = 'MTZjOGNjYWMtZmU1ZC00ZWQ2LThlNDMtZjMyMzMyNjMzMTVk';
          $appId = '9d827635-a865-4c6f-8e68-1fdd56cbada6';
           $apiEndpoint = 'https://onesignal.com/api/v1/notifications';
           $data = [
               'app_id' => $appId,
               'contents' => [
                   'en' => $request->title
               ],
               'included_segments' => ['All'] , // Send to all subscribed users 
               // 'icon' => '', // Image URL
               'chrome_web_image' => asset('images/today-gold-rate-in-pakistan.webp'),
               'url' =>url($request->slug), // URL link
   
           ];
           $payload = json_encode($data);
           $ch = curl_init($apiEndpoint);
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($ch, CURLOPT_HEADER, false);
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
           curl_setopt($ch, CURLOPT_HTTPHEADER, [
               'Content-Type: application/json',
               'Authorization: Basic ' . $apiKey
           ]);
           $response = curl_exec($ch);
           echo $response;
           curl_close($ch);
   
   
       return redirect()->back()->with('success', 'Rate Added successfully.');
   
   
   
   
   }



   public function AddBlogs(REQUEST $request)
   {

   

       $Blogs = new Blogs();
       $Blogs->meta_title = $request->meta_title;
       $Blogs->meta_description =  $request->meta_description;
       $Blogs->meta_keyword =  $request->meta_keyword;
       $Blogs->title =  $request->title;
       $Blogs->slug =  $request->slug;
       $Blogs->description_short =  $request->description_short;
       $Blogs->alt_tag =  $request->alt_tag;
       $Blogs->details =  $request->content;
       
       
       if($request->hasFile('Img'))
       {
             $dir =  public_path('blogs/');
             $dir1 = 'blogs/';            
             $extension = strtolower($request['Img']->getClientOriginalExtension()); // get image extension
             $fileName = $request->slug.'.'. $extension; // rename image
             $request['Img']->move($dir, $fileName);
             $logos1 ="{$dir1}{$fileName}";
             $Blogs->img = $logos1;
               
        }
   
         $Blogs->save();
   
           
           
          $apiKey = 'MTZjOGNjYWMtZmU1ZC00ZWQ2LThlNDMtZjMyMzMyNjMzMTVk';
          $appId = '9d827635-a865-4c6f-8e68-1fdd56cbada6';
           $apiEndpoint = 'https://onesignal.com/api/v1/notifications';
           $data = [
               'app_id' => $appId,
               'contents' => [
                   'en' => $request->title
               ],
               'included_segments' => ['All'] , // Send to all subscribed users 
               // 'icon' => '', // Image URL
               'chrome_web_image' => asset('images/today-gold-rate-in-pakistan.webp'),
               'url' =>url($request->slug), // URL link
   
           ];
           $payload = json_encode($data);
           $ch = curl_init($apiEndpoint);
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($ch, CURLOPT_HEADER, false);
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
           curl_setopt($ch, CURLOPT_HTTPHEADER, [
               'Content-Type: application/json',
               'Authorization: Basic ' . $apiKey
           ]);
           $response = curl_exec($ch);
           echo $response;
           curl_close($ch);
   
   
       return redirect()->back()->with('success', 'Blog Added successfully.');
   
   
   
   
   }



   
   public function ShowReportByDay(REQUEST $request)
   {

       if (request()->ajax()) {
           
           
           $GoldRateByDay = GoldRateByDay::select('*');
   
           return DataTables::of($GoldRateByDay)
               ->addColumn('action', function ($row) {
                   return '<button class="btn btn-danger" id="delscholarship' . $row->id . '" onclick="delscholarship(' . $row->id . ')"><i class="fa fa-trash"></i></button>
                   <a href="'.url("panel/admin/edit-day/".$row->id).'" class="btn btn-primary"><i class="fa fa-edit"></i></a>';
               })
               ->editColumn('img', function ($row) {
                   $logoUrl = asset($row->img);
                   return '<img src="' . $logoUrl . '" alt="University Logo" width="100px" height="100px">';
               })
               ->rawColumns(['img','action'])
               ->make(true);
           
       }
   

     return view('admin.show-report-by-day');

   }

   public function ShowBlogs (REQUEST $request)
   {

       if (request()->ajax()) {
           
           
           $Blogs = Blogs::select('*');
   
           return DataTables::of($Blogs)
               ->addColumn('action', function ($row) {
                   return '<button class="btn btn-danger" id="delscholarship' . $row->id . '" onclick="delscholarship(' . $row->id . ')"><i class="fa fa-trash"></i></button>
                   <a href="'.url("panel/admin/edit-blog/".$row->id).'" class="btn btn-primary"><i class="fa fa-edit"></i></a>';
               })
               ->editColumn('img', function ($row) {
                   $logoUrl = asset($row->img);
                   return '<img src="' . $logoUrl . '" alt="University Logo" width="100px" height="100px">';
               })
               ->rawColumns(['img','action'])
               ->make(true);
           
       }
   

     return view('admin.show-blogs');

   }



   public function delReportByDay(REQUEST $request)
   {

       $GoldRateByDay = GoldRateByDay::find($request->id);

       if ($GoldRateByDay) {
          
           // Get the full path to the public directory
           $publicPath = public_path('/');
           

           // Construct the full path to the image using the 'img' attribute
           $imagePath = $publicPath . $GoldRateByDay->img;

           // Delete the image
        //    if (File::exists($imagePath)) {
        //        File::delete($imagePath);
        //    }
           $GoldRateByDay->delete();
           // Check if the model instance no longer exists in the database after deletion
           if (!$GoldRateByDay->exists) {
               return response()->json(['success' => true]);
           } else {
               return response()->json(['success' => false]);
           }
       } else {
           return response()->json(['success' => false]);
       }


   }


   
   
   public function delBlogs(REQUEST $request)
   {

       $Blogs = Blogs::find($request->id);

       if ($Blogs) {
          
           // Get the full path to the public directory
           $publicPath = public_path('/');
           

           // Construct the full path to the image using the 'img' attribute
           $imagePath = $publicPath . $Blogs->img;

           // Delete the image
        //    if (File::exists($imagePath)) {
        //        File::delete($imagePath);
        //    }
           $Blogs->delete();
           // Check if the model instance no longer exists in the database after deletion
           if (!$Blogs->exists) {
               return response()->json(['success' => true]);
           } else {
               return response()->json(['success' => false]);
           }
       } else {
           return response()->json(['success' => false]);
       }


   }

    
   public function EditRportDay(REQUEST $request)
   {
     
    $GoldRateByDay = GoldRateByDay::where('id',$request->id)->first();
    return view('admin.edit-report-day',['GoldRateByDay'=>$GoldRateByDay]);
   
   }

 
   public function EditBlogs(REQUEST $request)
   {
     
    $Blogs = Blogs::where('id',$request->id)->first();
    return view('admin.edit-blogs',['Blogs'=>$Blogs]);
   
   }

   

   
      public function EditDayReports(REQUEST $request)
    {


        $id = $request->input('id'); 
        $GoldRateByDay = GoldRateByDay::findOrFail($id);;
        $GoldRateByDay->meta_title = $request->meta_title;
        $GoldRateByDay->meta_description =  $request->meta_description;
        $GoldRateByDay->meta_keyword =  $request->meta_keyword;
        $GoldRateByDay->title =  $request->title;
        $GoldRateByDay->slug =  $request->slug;
        $GoldRateByDay->description_short =  $request->description_short;
        $GoldRateByDay->alt_tag =  $request->alt_tag;
        $GoldRateByDay->details =  $request->content;
        // $GoldRateByDay->schema_day =  $request->schema;
        
        if($request->hasFile('Img'))
        {
            $dir =  public_path('images/');
            $dir1 = 'images/';            
            $extension = strtolower($request['Img']->getClientOriginalExtension()); // get image extension
            $fileName = $request->slug.'.'. $extension; // rename image
            $request['Img']->move($dir, $fileName);
            $logos1 ="{$dir1}{$fileName}";
            $GoldRateByDay->img = $logos1;
                
        }
    
        $GoldRateByDay->save();
    
        return redirect()->back()->with('success', 'Report Updated successfully.');



    }


    
    public function EditDayBlogs(REQUEST $request)
    {


        $id = $request->input('id'); 
        $Blogs = Blogs::findOrFail($id);;
        $Blogs->meta_title = $request->meta_title;
        $Blogs->meta_description =  $request->meta_description;
        $Blogs->meta_keyword =  $request->meta_keyword;
        $Blogs->title =  $request->title;
        $Blogs->slug =  $request->slug;
        $Blogs->description_short =  $request->description_short;
        $Blogs->alt_tag =  $request->alt_tag;
        $Blogs->details =  $request->content;
        
        if($request->hasFile('Img'))
        {
            $dir =  public_path('images/');
            $dir1 = 'images/';            
            $extension = strtolower($request['Img']->getClientOriginalExtension()); // get image extension
            $fileName = $request->slug.'.'. $extension; // rename image
            $request['Img']->move($dir, $fileName);
            $logos1 ="{$dir1}{$fileName}";
            $Blogs->img = $logos1;
                
        }
    
        $Blogs->save();
    
        return redirect()->back()->with('success', 'Blogs Updated successfully.');



    }


   // rate end by day



    
    // ck editir start
    public function upload(Request $request)
    {
    
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move(public_path('images'), $fileName);
    
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
                
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        
        }
    }
    // ck editro end 



    // indexing api start

    public function IndexingApi(REQUEST $request){

        return view('admin.indexing-api');
    }

    public function SubmitURL(REQUEST $request)
    {


      
        try {
            $googleClient = new Google\Client();

            $googleClient->setAuthConfig(base_path('app/Http/index-api/service_account_key.json'));
            $googleClient->setScopes(Google_Service_Indexing::INDEXING);
            $googleIndexingService = new Google_Service_Indexing($googleClient);

         
            $urlNotification = new Google_Service_Indexing_UrlNotification([
                'url' => $request->url,
                'type' => 'URL_UPDATED'
            ]);

            $result = $googleIndexingService->urlNotifications->publish($urlNotification);

            if (isset($result->urlNotificationMetadata->latestUpdate["notifyTime"])) {
                 return redirect()->back()->with('success', 'URL submitted successfully.');
            
            } else {
                 return redirect()->back()->with('error', 'URL not  submitted successfully.');
            }

        } catch (\Exception $e) {
                return redirect()->back()->with('error', 'URL not  submitted successfully.');
        }



    }

   // indexing api end 
    

    //    web storiess
    public function addWebStories()
    {
        return view('admin.add-web-stories');
    }
    
    public function AddWebStoriesInsert(REQUEST $request)
    {
        
        $WebStory = new WebStory();
        $WebStory->title =  $request->title;
        $WebStory->slug =  $request->slug;
        $WebStory->description =  $request->Description;
        

        if($request->hasFile('Img1'))
        {
              $dir =  public_path('web-stories/');
              $dir1 = 'web-stories/';            
              $extension = strtolower($request['Img1']->getClientOriginalExtension()); // get image extension
              $fileName = $request->slug.'3.'. $extension; // rename image
              $request['Img1']->move($dir, $fileName);
              $logos1 ="{$dir1}{$fileName}";
              $WebStory->image_path_one = $logos1;
                
        }

        if($request->hasFile('Img2'))
        {
              $dir =  public_path('web-stories/');
              $dir1 = 'web-stories/';            
              $extension = strtolower($request['Img2']->getClientOriginalExtension()); // get image extension
              $fileName = $request->slug.'2.'. $extension; // rename image
              $request['Img2']->move($dir, $fileName);
              $logos1 ="{$dir1}{$fileName}";
              $WebStory->image_path_two = $logos1;
                
        }
    
        if($request->hasFile('Img3'))
        {
              $dir =  public_path('web-stories/');
              $dir1 = 'web-stories/';            
              $extension = strtolower($request['Img3']->getClientOriginalExtension()); // get image extension
              $fileName = $request->slug.'1.'. $extension; // rename image
              $request['Img3']->move($dir, $fileName);
              $logos1 ="{$dir1}{$fileName}";
              $WebStory->image_path_three = $logos1;
                
        }
    
          $WebStory->save();
    
         
    
    
        return redirect()->back()->with('success', 'Web Stories Added successfully.');
    }

   
    public function ShowWebStories(REQUEST $request)
    {
      
        if (request()->ajax()) {
            
            
            $WebStory = WebStory::select('*');
    
            return DataTables::of($WebStory)
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-danger" id="delscholarship' . $row->id . '" onclick="delscholarship(' . $row->id . ')"><i class="fa fa-trash"></i></button>';
                })
                ->editColumn('image_path_one', function ($row) {
                    $logoUrl = asset($row->image_path_one);
                    return '<img src="' . $logoUrl . '" alt="gold rate Pakistan" width="100px" height="100px">';
                })
                ->editColumn('image_path_two', function ($row) {
                    $logoUrl = asset($row->image_path_two);
                    return '<img src="' . $logoUrl . '" alt="gold rate Pakistan" width="100px" height="100px">';
                })
                ->editColumn('image_path_three', function ($row) {
                    $logoUrl = asset($row->image_path_three);
                    return '<img src="' . $logoUrl . '" alt="gold rate Pakistan" width="100px" height="100px">';
                })
                ->rawColumns(['image_path_one','image_path_two','image_path_three','action'])
                ->make(true);
            
        }
    
 
      return view('admin.show-web-stories');





    }


    
    public function delWebStory(REQUEST $request)
    {

        $WebStory = WebStory::find($request->id);

        if ($WebStory) {
           
            // Get the full path to the public directory
            $publicPath = public_path('/');
            

            // Construct the full path to the image using the 'img' attribute
            $imagePath1 = $publicPath . $WebStory->image_path_one;
            $imagePath2 = $publicPath . $WebStory->image_path_two;
            $imagePath3 = $publicPath . $WebStory->image_path_three;
            

            // Delete the image
            if (File::exists($imagePath1)) {
                File::delete($imagePath1);
            }
            if (File::exists($imagePath2)) {
                File::delete($imagePath2);
            }
            if (File::exists($imagePath3)) {
                File::delete($imagePath3);
            }
            

            $WebStory->delete();
            // Check if the model instance no longer exists in the database after deletion
            if (!$WebStory->exists) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        } else {
            return response()->json(['success' => false]);
        }


    }



}
