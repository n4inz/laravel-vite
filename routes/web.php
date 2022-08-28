<?php

use App\Events\Comments;
use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobboardController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserClientController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Multitenancy\Models\Tenant;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Testing
Route::get('test', [TestController::class, 'welcome']);
Route::get('test/image-viewer', [TestController::class, 'image_viewer']);

Route::get('test-multiselect', [TestController::class, 'test_multi_select'])->name('test.multi_select');
Route::get('drag', [TestController::class, 'drag'])->name('test.drag');
Route::post('test-multiselect-store', [TestController::class, 'test_multi_select_store'])->name('test.multi_select_store');


Route::get('/test/login', function(){
    
    return auth()->guard('staf')->user();
    return view('welcome');
});


// Login Agnecy
Route::get('/tenancy', function(){
    return view('tenancy.index');
})->name('tenancy');
Route::post('/login-tenancy', [AuthenticateController::class , 'tenancy'])->name('login.tenancy');
Route::get('/register', [AuthenticateController::class , 'register'])->name('register');
Route::post('/register-store', [AuthenticateController::class, 'register_store'])->name('register.store');
Route::get('/',[AuthenticateController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login-store', [AuthenticateController::class, 'login_store'])->name('login.store');
Route::post('/logout', [AuthenticateController::class, 'logout'])->name('logout');
Route::get('/fail', [AuthenticateController::class, 'fail'])->name('fail');


Route::group(['middleware' => 'auth'],function(){
    // Navbar
    Route::post('/comment-notify' ,[NavbarController::class, 'comment_notify'])->name('navbar.comment_notify');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/calendly' , [DashboardController::class,'calendlyApi'])->name('dashboard.calendly');
    Route::post('/detail-calendly' , [DashboardController::class,'detailCalendlyApi'])->name('dashboard.detailCalendlyApi');
    
    // Jobboard
    Route::get('/jobboard', [JobboardController::class, 'index'])->name('jobboard');
    Route::post('/get-subcategory', [JobboardController::class, 'get_subcategory_ajax'])->name('jobboard.get_subcategory_ajax');
    Route::get('/detail-match-talent/{id}', [JobboardController::class, 'detail_match_talent'])->name('jobboard.detail_match_talent');
    Route::get('/overview/{uid}', [JobboardController::class, 'overview'])->name('jobboard.overview');
    Route::post('/talent-status', [JobboardController::class , 'talent_status'])->name('jobboard.talent_status');
    Route::post('/status',[JobboardController::class, 'status'])->name('jobboard.status');
    Route::post('/search-job',[JobboardController::class, 'search_job'])->name('jobboard.search_job');
    Route::post('/add-task',[JobboardController::class, 'add_task'])->name('jobboard.add_task');
    Route::post('/search-task',[JobboardController::class, 'search_task'])->name('jobboard.search_task');
    Route::post('/job-store', [JobboardController::class,'jobs_store'])->name('jobboard.jobs_store');
    Route::post('/send-email-talent', [JobboardController::class,'send_email'])->name('jobboard.send_email');
    Route::post('upload-file', [JobboardController::class, 'upload_file'])->name('jobboard.upload_file');
    Route::get('download-file/{file}', [JobboardController::class, 'download_file'])->name('jobboard.download_file');
    Route::post('comment', [JobboardController::class, 'comment'])->name('jobboard.comment');
    Route::post('reply', [JobboardController::class, 'reply'])->name('jobboard.reply');
    Route::post('edit-description', [JobboardController::class, 'edit_description'])->name('jobboard.edit_description');
    Route::post('load-template-email-talent' , [JobboardController::class, 'load_template_email_talent'])->name('jobboard.load_template_email_talent');
    Route::post('edit-template-email' , [JobboardController::class , 'edit_template_email'])->name('jobboard.edit_template_email');
    Route::post('edit-pay-info' , [JobboardController::class , 'edit_pay_info'])->name('jobboard.edit_pay_info');
    Route::post('sync-calendly' , [JobboardController::class , 'sync_calendly'])->name('jobboard.sync_calendly');
    Route::post('send-email-to-talent' , [JobboardController::class , 'send_email_to_talent'])->name('jobboard.send_email_to_talent');

    // AJAX JOBBOARD
    Route::post('edit-responsibility',[JobboardController::class, 'edit_responsibility'])->name('jobboard.edit_responsibility');
    Route::post('edit-client-detail',[JobboardController::class, 'edit_client_detail'])->name('jobboard.edit_client_detail');
    Route::post('edit-subcategory',[JobboardController::class, 'edit_subcategorys'])->name('jobboard.edit_subcategory');
    Route::post('edit-talents-ayi',[JobboardController::class, 'edit_talents_ayi'])->name('jobboard.edit_talents_ayi');

    Route::post('modal-add-match-talent', [JobboardController::class, 'modal_add_match_talent'])->name('jobboard.modal_add_match_talent');
    Route::post('change-status-all-match-talent', [JobboardController::class, 'change_status_all_match_talent'])->name('jobboard.change_status_all_match_talent');

    Route::post('add-new-aplicants', [JobboardController::class , 'new_aplicant_store'])->name('jobboard.new_aplicants');
    Route::post('add-new-aplicants-to-match-talent', [JobboardController::class , 'add_new_aplicants_to_match_talent'])->name('jobboard.add_new_aplicants_to_match_talent');

    // User
    Route::get('/user/client', [UserClientController::class, 'client'])->name('user_client.client');
    Route::get('/user/client/created', [UserClientController::class, 'client_created'])->name('user_client.client_created');
    Route::post('/user-client-store', [UserClientController::class, 'client_store'])->name('user_client.store');

    Route::get('/user/staf', [UserClientController::class, 'staf'])->name('user_staf.staf');
    Route::post('/user-staf-store', [UserClientController::class, 'staf_store'])->name('user_staf.staf_store');

    Route::get('/user/talent', [UserClientController::class, 'talent'])->name('user_talent.talent');
    // Route::post('/user-client-attached-file', [UserClientController::class, 'attached_file'])->name('user_client. attached_file');
    Route::post('/user-talent-store', [UserClientController::class, 'telent_store'])->name('user_talent.store');
    
    // Talent
    Route::get('/setting', [SettingController::class, 'setting'])->name('setting.setting');
    Route::post('setting-store', [SettingController::class, 'setting_store'])->name('setting.store');
    Route::post('upload-avatar', [SettingController::class, 'upload_avatar'])->name('setting.upload.avatar');
    
    // Upload FIle
    Route::post('/upload',[UploadController::class , 'upload'])->name('upload');
    Route::post('/upload-with-db',[UploadController::class , 'uploadWithDb'])->name('uploadWithDb');

    //Search
    Route::post('/search', SearchController::class)->name('search');
});

// Home
Route::get('/send/{uid}', [HomeController::class, 'send'])->name('home.send');
Route::get('/apply/{uid}', [HomeController::class, 'apply'])->name('home.apply');
Route::post('/home-new-aplicants', [HomeController::class , 'new_aplicant_store'])->name('home.new_aplicants');
Route::post('/home-upload', [HomeController::class , 'upload'])->name('home.upload');

// -- STAF --

// Login Staf
Route::get('/staf' , [AuthenticateController::class ,'staf'])->middleware('tenant')->name('login.staf');
Route::post('/login-staf' , [AuthenticateController::class ,'login_staf'])->name('login.staf_login');

