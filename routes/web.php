<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\managementController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontEnd;
use App\Http\Controllers\ReservationController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});


Route::middleware(['admin.guest'])->group(function () {
Route::get('/admin/login', [AuthAdminController::class, 'showLoginForm'])->name('login.admin');
Route::post('/admin/login', [AuthAdminController::class, 'login'])->name('login.admin1');
});
Route::middleware(['admin.auth'])->group(function () {
Route::resource('/admin',AdminController::class);
Route::resource('/room',RoomController::class);
Route::resource('/history',ReservationController::class);
Route::resource('/management',managementController::class);
Route::get('/logout/admin', 'AuthAdminController@logout')->name('logout.admin');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();
Route::middleware(['guest'])->group(function () {
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.auth');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', 'AuthController@register');

});


Route::get('/dashboard', [frontEnd::class, 'index'])->name('index');

Route::middleware(['auth'])->group(function(){
Route::get('/dashboard/room/{id}', [frontEnd::class, 'detailRoom'])->name('detailRoom');
Route::get('/dashboard/booking/{id}', [frontEnd::class, 'booking'])->name('booking');
Route::get('/dashboard/history', [frontEnd::class, 'history'])->name('history');
Route::get('/dashboard/booking/history/payment/{id}', [frontEnd::class, 'payment','submitbooking'])->name('payment');
Route::post('/dashboard/booking', [frontEnd::class, 'submitbooking'])->name('submitbooking');
Route::post('/dashboard/history/{id}', [frontEnd::class, 'uploadpayment'])->name('uploadpayment');
Route::get('/dashboard/receipt/{id}', [frontEnd::class, 'receipt'])->name('receipt');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
