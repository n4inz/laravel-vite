<?php

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
Route::post('test-multiselect-store', [TestController::class, 'test_multi_select_store'])->name('test.multi_select_store');


Route::get('test/multi-select', function(){
    return view('testing.multi-select');
});

Route::get('/login-tenancy', [AuthenticateController::class , 'login_tenancy']);


Route::get('/register', [AuthenticateController::class , 'register'])->name('register');
Route::post('/register-store', [AuthenticateController::class, 'register_store'])->name('register.store');
Route::get('/',[AuthenticateController::class, 'login'])->name('login');
Route::post('/login-store', [AuthenticateController::class, 'login_store'])->name('login.store');
Route::post('/logout', [AuthenticateController::class, 'logout'])->name('logout');


// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/jobboard', [JobboardController::class, 'index'])->name('jobboard');
// Route::get('/overview/{id_unique}', [JobboardController::class, 'overview'])->name('jobboard.overview');
// Route::post('/job-store', [JobboardController::class,'jobs_store'])->name('jobboard.jobs_store');

// Route::get('/user/client', [UserClientController::class, 'client'])->name('user_client.client');
// Route::get('/user/talent', [UserClientController::class, 'talent'])->name('user_client.talent');

// Route::get('/setting', [SettingController::class, 'setting'])->name('setting.setting');
// Route::post('setting-store', [SettingController::class, 'setting_store'])->name('setting.store');
// Route::get('/send', [JobboardController::class, 'send'])->name('jobboard.send');
// Route::get('/apply', [JobboardController::class, 'apply'])->name('jobboard.apply');

Route::middleware('tenant')->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
    Route::get('/jobboard', [JobboardController::class, 'index'])->name('jobboard');
    Route::get('/overview/{id_unique}', [JobboardController::class, 'overview'])->name('jobboard.overview');
    Route::post('/job-store', [JobboardController::class,'jobs_store'])->name('jobboard.jobs_store');
    
    Route::get('/user/client', [UserClientController::class, 'client'])->name('user_client.client');
    Route::get('/user/talent', [UserClientController::class, 'talent'])->name('user_client.talent');
    
    Route::get('/setting', [SettingController::class, 'setting'])->name('setting.setting');
    Route::post('setting-store', [SettingController::class, 'setting_store'])->name('setting.store');
    Route::get('/send', [JobboardController::class, 'send'])->name('jobboard.send');
    Route::get('/apply', [JobboardController::class, 'apply'])->name('jobboard.apply');
});


