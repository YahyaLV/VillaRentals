<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VillaTypeController;
use App\Http\Controllers\LocataireController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\VillaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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



// Admin login
Route::get('admin/login', [AdminController::class, 'login']);
Route::post('admin/login',[AdminController::class,'check_login']);
Route::get('admin/logout', [AdminController::class, 'logout']);



//homepage
Route::get('/', function () {
    return view('homepage');
});
Route::get('/user', function () {
    return view('homepage2');
});




//admindashboard
Route::get('/admin', function () {
    return view('admindashboard');
});


//VillaType
Route::resource('admin/villatype', VillaTypeController::class);
Route::get('admin/villatype/{id}/delete', [VillaTypeController::class, 'destroy']);


//villa
Route::resource('admin/villa', VillaController::class);
Route::get('admin/villa/{id}/delete', [VillaController::class, 'destroy']);



//locataire
Route::resource('admin/locataire',LocataireController::class);
Route::get('admin/locataire/{id}/delete', [LocataireController::class, 'destroy']);
Route::get('login', [LocataireController::class, 'login']);
Route::post('locataire/login', [LocataireController::class, 'locataire_login']);
Route::get('registrer', [LocataireController::class, 'registrer']);
Route::get('logout', [LocataireController::class, 'logout']);





//booking
Route::resource('admin/booking', BookingController::class);
Route::get('admin/booking/dispo_in/{checkin_date}', [BookingController::class,'dispo_in']);
Route::get('admin/booking/dispo_out/{checkout_date}', [BookingController::class,'dispo_out']);
Route::get('admin/booking/{id}/delete', [BookingController::class, 'destroy']);
Route::get('booking', [BookingController::class,'front_booking']);






