<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ProfileController;
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
    return view('homepage.index');
});


//Beranda
Route::get('homepage', HomepageController::class. '@index')->name('homepage.index');

//Panel
Route::get('panel', PanelController::class. '@index')->name('panel.index');

//Profile
Route::get('profile', ProfileController::class. '@index')->name('profile.index');


// Route::get('login', Logincontroller::class .'@index')->name('login');
