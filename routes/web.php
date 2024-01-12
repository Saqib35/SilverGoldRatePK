<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



Route::get('/clear', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    return "Successfully Cleared";
  });
  

Route::get('index.php', function () {
    return redirect('/', 301);
});
Route::get('gold-calcultor', function () {
    return redirect('/gold-calculator', 301);
});

Route::get('contact-us/', function () {
    return redirect('/contact-us', 301);
});

Route::get('privacy-policy-for-silver-rate-in-pakistan/', function () {
    return redirect('/privacy-policy-for-silver-rate-in-pakistan', 301);
});




Route::get('/', [HomeController::class, 'index']);
Route::get('gold-rate-in-pakistan', [HomeController::class, 'GoldPrice']);
Route::get('gold-rate-in-lahore', [HomeController::class, 'GoldPricelahore']);
Route::get('gold-rate-in-multan', [HomeController::class, 'GoldPriceMultan']);
Route::get('gold-rate-in-islamabad', [HomeController::class, 'GoldPriceIslamabad']);
Route::get('gold-rate-in-karachi', [HomeController::class, 'GoldPriceKarachi']);
Route::get('gold-rate-in-faisalabad', [HomeController::class, 'GoldPriceFaisalabad']);



Route::get('category/gold-price-history-by-month', [HomeController::class, 'GoldPriceByMonth']);
Route::get('category/gold-price-history-by-week', [HomeController::class, 'GoldPriceByWeek']);
Route::get('author/staff', [HomeController::class, 'ShowAuthor']);





Route::get('contact-us', [HomeController::class, 'contact']);
Route::get('privacy-policy-for-silver-rate-in-pakistan', [HomeController::class, 'privacyPolicy']);

// Route::get('terms-and-conditions', [HomeController::class, 'termCondition']);
Route::get('feed', [HomeController::class, 'ShowFeed']);
Route::get('web-storie/{slug?}', [HomeController::class, 'WebStories']);
Route::get('gold-calculator', [HomeController::class, 'GoldCalculator']);
Route::get('historial-gold-rate', [HomeController::class, 'HistorialGoldRate']);



Route::get('{slug}', [HomeController::class, 'GoldPriceByMonthDetail']);
Route::fallback(function () { return view('errors.404');});




// admin route
Route::group(['middleware'=>['IsLogin']],function () {




Route::get('panel/admin/login', function () {return view('admin.login');})->name('panel.admin.login');
Route::get('panel/admin/home', [AdminController::class, 'indexAdmin'])->name('panel.admin.home');
Route::post('panel/admin/edit/home', [AdminController::class, 'GoldRateUpdate']);




// home page content update 
Route::get('panel/admin/home-content-update', [AdminController::class, 'HomeUpdate']);
Route::post('update-home-page-content', [AdminController::class, 'UpdateHomePageContent']);

// home page content today gold price update 
Route::get('panel/admin/home-content-update-gold', [AdminController::class, 'HomeUpdateGoldRate']);
Route::post('update-home-page-content-gold-rate', [AdminController::class, 'UpdateHomePageContentGoldRate']);

// rate by monlthy
Route::get('panel/admin/add-rate-by-month', [AdminController::class, 'addRateByMonth']);
Route::post('add-rate-report-by-month', [AdminController::class, 'AddRateByMonthInsert']);
Route::get('panel/admin/show-rate-by-month', [AdminController::class, 'ShowReportByMonth'])->name('show-report-by-month');
Route::get('panel/admin/del-report-by-month', [AdminController::class, 'delReportByMonth'])->name('del-report-by-month');
Route::get('panel/admin/edit/{id}', [AdminController::class, 'EditRportMonlthy']);
Route::post('add-rate-report-by-month-update', [AdminController::class, 'EditMonlthyReport']);
// rate by monlthy
Route::get('panel/admin/add-rate-by-week', [AdminController::class, 'addRateByWeek']);
Route::post('add-rate-report-by-week', [AdminController::class, 'AddRateByWeekInsert']);
Route::get('panel/admin/show-rate-by-week', [AdminController::class, 'ShowReportByWeek'])->name('show-report-by-week');
Route::get('panel/admin/del-report-by-week', [AdminController::class, 'delReportByWeek'])->name('del-report-by-week');
Route::get('panel/admin/edit-week/{id}', [AdminController::class, 'EditRportWeekly']);
Route::post('add-rate-report-by-week-update', [AdminController::class, 'EditWeekReport']);
// rate by Day
Route::get('panel/admin/add-rate-by-day', [AdminController::class, 'addRateByDay']);
Route::post('add-rate-report-by-day', [AdminController::class, 'AddRateByDayInsert']);
Route::get('panel/admin/show-rate-by-day', [AdminController::class, 'ShowReportByDay'])->name('show-report-by-day');
Route::get('panel/admin/del-report-by-day', [AdminController::class, 'delReportByDay'])->name('del-report-by-day');
Route::get('panel/admin/edit-day/{id}', [AdminController::class, 'EditRportDay']);
Route::post('add-rate-report-by-day-update', [AdminController::class, 'EditDayReports']);


// rate by monlthy
Route::get('panel/admin/add-blogs', [AdminController::class, 'addRateByBlog']);
Route::post('add-blogs', [AdminController::class, 'AddBlogs']);
Route::get('panel/admin/show-blogs', [AdminController::class, 'ShowBlogs'])->name('show-blogs');
Route::get('panel/admin/del-report-by-blog', [AdminController::class, 'delBlogs'])->name('del-blogs');
Route::get('panel/admin/edit-blog/{id}', [AdminController::class, 'EditBlogs']);
Route::post('add-rate-report-by-blogs-update', [AdminController::class, 'EditDayBlogs']);


Route::get('panel/admin/add-web-stories', [AdminController::class, 'addWebStories']);
Route::post('add-web-stories', [AdminController::class, 'AddWebStoriesInsert']);
Route::get('panel/admin/show-web-stories', [AdminController::class, 'ShowWebStories'])->name('show-web-stories');
Route::get('panel/admin/del-web-stories', [AdminController::class, 'delWebStory'])->name('del-web-stories');

              


// ck editor 
Route::post('upload', [AdminController::class, 'upload'])->name('upload');
// indexing api
Route::get('panel/admin/indexing-api-google', [AdminController::class, 'IndexingApi']);
Route::post('panel-admin-submit-api-indexing-google', [AdminController::class, 'SubmitURL']);


});


Auth::routes();
