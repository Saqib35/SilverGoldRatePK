<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use DB;
use App\Models\HomePage;
use App\Models\GoldRateByMonth;
use App\Models\GoldRateByWeek;
use App\Models\GoldRateByDay;
use App\Models\WebStory;
use App\Models\HomePageGoldRate;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

   

     public function contact()
     {
         
         return view('contact-us');
         
 
     }

     public function privacyPolicy()
     {
         
        return view('privacy-policy');

     }

     public function termCondition()
     {
        return view('terms-and-conditions');
     }

     public function ShowAuthor()
     {
           
          
          $posts =GoldRateByDay::orderBy('created_at', 'desc')->get();
         
          return view('all-posts' ,['posts'=>$posts]);
 
 
     }


    public function index(REQUEST $request)
    {
        if($request->s)
        {
            $posts =GoldRateByDay::where('title', 'LIKE', "%$request->s%")->orderBy('created_at', 'desc')->get();
            return view('search-page' ,['posts'=>$posts]);
        }

        $home_content=HomePage::first();
        return view('index',['home_content' => $home_content]);
        
       
    }

    public function ShowFeed()
    {
          
         
         $posts =GoldRateByDay::orderBy('created_at', 'desc')->get();
        
         return response()->view('rss', [
             'posts' => $posts
         ])->header('Content-Type', 'text/xml');


    }

    public function WebStories(REQUEST $request)
    {
        if(!empty($request->slug))
        {
            $webStory=WebStory::where('slug', $request->slug)->first();
            return view('web-stories-details',['webStory'=>$webStory]);
        }

        $webStory=WebStory::orderBy('created_at', 'desc')->get();
        return view('web-stories',['webStory'=>$webStory]);
    }

    public function GoldPriceByMonth()
    {
        $GoldRateByMonth=GoldRateByMonth::get();
        return view('gold-price-by-month' ,['GoldRateByMonth'=>$GoldRateByMonth]);
    }

    public function GoldPriceByMonthDetail(REQUEST $request)
     {
        
        $GoldRateByMonth=GoldRateByMonth::where('slug',$request->slug)->first();
        if($GoldRateByMonth)
        {
           $goldPriceHistoryString = $GoldRateByMonth->slug;
           // Split the string by "-"
           $priceSegments = explode('-', $goldPriceHistoryString);
           // Get the second-to-last value
           $secondToLastValue = isset($priceSegments[count($priceSegments) - 2]) ? $priceSegments[count($priceSegments) - 2] : null;
        
           $year = end($priceSegments);
           // Create Carbon instances for the start and end of the month
           $startDate = Carbon::createFromDate($year, Carbon::parse($secondToLastValue)->month, 1)->startOfMonth();
           $endDate = Carbon::createFromDate($year, Carbon::parse($secondToLastValue)->month, 1)->endOfMonth();
          $GoldRateByDay=GoldRateByDay::whereBetween('created_at', [$startDate, $endDate])->get();

          return view('gold-price-by-month-single-detail' ,['GoldRateByMonth'=>$GoldRateByMonth,'GoldRateByDay'=>$GoldRateByDay,'secondToLastValue'=>$secondToLastValue]);

        }

        $GoldRateByWeek=GoldRateByWeek::where('slug',$request->slug)->first();
        if($GoldRateByWeek)
        {
          $goldPriceHistoryString = $GoldRateByWeek->slug;
          preg_match('/(\d+)-to-(\d+)-([a-zA-Z]+)-(\d+)/', $goldPriceHistoryString, $matches);
          list(, $startDay, $endDay, $month, $year) = $matches;
          // Create Carbon instances for the start and end dates
          $startDate = Carbon::createFromDate($year, Carbon::parse($month)->month, $startDay)->startOfDay();
          $endDate = Carbon::createFromDate($year, Carbon::parse($month)->month, $endDay)->endOfDay();
          $GoldRateByDay=GoldRateByDay::whereBetween('created_at', [$startDate, $endDate])->get();

          return view('gold-price-by-week-single-detail' ,['GoldRateByWeek'=>$GoldRateByWeek,'GoldRateByDay'=>$GoldRateByDay]);

        }
      
        $GoldRateByDay=GoldRateByDay::where('slug',$request->slug)->first();
        if($GoldRateByDay)
        {
          return view('gold-price-by-day-single-detail' ,['GoldRateByDay'=>$GoldRateByDay]);

        }
      

        return abort(404);

     }


     public function GoldPriceByWeek()
     {
         $GoldRateByWeek=GoldRateByWeek::get();
         return view('gold-price-by-week' ,['GoldRateByWeek'=>$GoldRateByWeek]);
     }
    
     public function GoldPrice()
     {
        $HomePageGoldRate=HomePageGoldRate::first();
        $GoldRateByDay=GoldRateByDay::get();
        return view('today-gold-price',['HomePageGoldRate'=>$HomePageGoldRate,'GoldRateByDay'=>$GoldRateByDay]);
     }
     
        
    //    contact us controller
    
  

}
