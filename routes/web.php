<?php

use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobboardController;
use App\Http\Controllers\SettingController;
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
Route::get('test', function(){
    return view('welcome');
});
Route::get('test/multi-select', function(){
    return view('testing.multi-select');
});


Route::get('/register', [AuthenticateController::class , 'register'])->name('register');
Route::post('/register-store', [AuthenticateController::class, 'register_store'])->name('register.store');
Route::post('/login-store', [AuthenticateController::class, 'login_store'])->name('login.store');
Route::get('/login', function(){
    return view('authenticate.login');
})->name('login');

// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/jobboard', [JobboardController::class, 'index'])->name('jobboard');
// Route::get('/overview', [JobboardController::class, 'overview'])->name('jobboard.overview');
// Route::get('/user/client', [UserClientController::class, 'client'])->name('user_client.client');
// Route::get('/user/talent', [UserClientController::class, 'talent'])->name('user_client.talent');
// Route::get('/setting', [SettingController::class, 'setting'])->name('setting.setting');

// Route::get('/send', [JobboardController::class, 'send'])->name('jobboard.send');
// Route::get('/apply', [JobboardController::class, 'apply'])->name('jobboard.apply');
Route::middleware('tenant')->group(function(){

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/jobboard', [JobboardController::class, 'index'])->name('jobboard');
    Route::get('/overview', [JobboardController::class, 'overview'])->name('jobboard.overview');
    Route::get('/user/client', [UserClientController::class, 'client'])->name('user_client.client');
    Route::get('/user/talent', [UserClientController::class, 'talent'])->name('user_client.talent');
    Route::get('/setting', [SettingController::class, 'setting'])->name('setting.setting');
    
    Route::get('/send', [JobboardController::class, 'send'])->name('jobboard.send');
    Route::get('/apply', [JobboardController::class, 'apply'])->name('jobboard.apply');
});



