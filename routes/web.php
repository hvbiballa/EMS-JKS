<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\CourseAppController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MApplicationController;
use App\Http\Controllers\MCardApplicationController;
use App\Http\Controllers\MRegistrationController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return redirect('/dashboard');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::get('/register.cont', [UserController::class, 'registerCont'])->middleware('auth')->name('register-cont');

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
//Route::get('/stafflogin', [LoginController::class, 'showstaff'])->middleware('guest')->name('login');
//Route::post('/stafflogin', [LoginController::class, 'stafflogin'])->middleware('guest')->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/staff/profile', [UserController::class, 'staffprofile'])->name('staff.profile');
    Route::post('/user/profile', [RegisterController::class, 'updateApplicantDetails'])->name('update.user');
    
    //Example
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('/manage', [PageController::class, 'manage'])->name('manage');
    Route::get('/create', [PageController::class, 'create'])->name('create');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::resources([
        'user' => UserController::class,
    ]);
});
