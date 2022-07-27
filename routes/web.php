<?php

use App\Events\Comments;
use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserClientController;
use Illuminate\Support\Facades\Route;

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
Route::get('test-multiselect', [TestController::class, 'test_multi_select'])->name('test.multi_select');
Route::get('drag', [TestController::class, 'drag'])->name('test.drag');

Route::post('test-multiselect-store', [TestController::class, 'test_multi_select_store'])->name('test.multi_select_store');


Route::get('/test/login', function(){
    return auth()->user();
});

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

Route::middleware(['tenant', 'auth'])->group(function(){
    // Route::get('/',[AuthenticateController::class, 'login'])->middleware('guest')->name('login');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/jobboard', [JobboardController::class, 'index'])->name('jobboard');
    Route::get('/detail-match-talent/{id}', [JobboardController::class, 'detail_match_talent'])->name('jobboard.detail_match_talent');
    Route::get('/overview/{id_unique}', [JobboardController::class, 'overview'])->name('jobboard.overview');
    Route::post('/status',[JobboardController::class, 'status'])->name('jobboard.status');
    Route::post('/add-task',[JobboardController::class, 'add_task'])->name('jobboard.add_task');
    Route::post('/job-store', [JobboardController::class,'jobs_store'])->name('jobboard.jobs_store');
    Route::post('/send-email-talent', [JobboardController::class,'send_email'])->name('jobboard.send_email');
    Route::post('upload-file', [JobboardController::class, 'upload_file'])->name('jobboard.upload_file');
    Route::get('download-file/{file}', [JobboardController::class, 'download_file'])->name('jobboard.download_file');
    Route::post('comment', [JobboardController::class, 'comment'])->name('jobboard.comment');
    Route::post('reply', [JobboardController::class, 'reply'])->name('jobboard.reply');

    Route::get('/user/client', [UserClientController::class, 'client'])->name('user_client.client');
    Route::get('/user/talent', [UserClientController::class, 'talent'])->name('user_talent.talent');
    Route::post('/user-client-store', [UserClientController::class, 'client_store'])->name('user_client.store');
    // Route::post('/user-client-attached-file', [UserClientController::class, 'attached_file'])->name('user_client. attached_file');
    Route::post('/user-talent-store', [UserClientController::class, 'telent_store'])->name('user_talent.store');
    
   
    Route::get('/setting', [SettingController::class, 'setting'])->name('setting.setting');
    Route::post('setting-store', [SettingController::class, 'setting_store'])->name('setting.store');
    Route::post('upload-avatar', [SettingController::class, 'upload_avatar'])->name('setting.upload.avatar');
    Route::get('/send', [JobboardController::class, 'send'])->name('jobboard.send');
    Route::get('/apply', [JobboardController::class, 'apply'])->name('jobboard.apply');
});


