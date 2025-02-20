<?php

use App\Http\Controllers\FasilitasHotelController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [PagesController::class, 'index']);
Route::get('/kamars', [PagesController::class, 'kamar']);
Route::get('/fasilitas', [PagesController::class, 'fasilitas']);
Route::get('/tentang', [PagesController::class, 'tentang']);
Route::get('/pemesanan', [PemesananController::class, 'index'])->middleware('user');
Route::get('/histori-pemesanan', [HomeController::class, 'histori'])->middleware('user');
Route::get('/invoice/{id}', [HomeController::class, 'invoice'])->middleware('user');
Route::get('/invoice/{id}/print', [HomeController::class, 'print'])->middleware('user');
Route::get('/dashboard-resepsionis', [HomeController::class, 'resepsionisHome'])->name('resepsionis')->middleware('resepsionis');
Route::get('/resepsionis', [PemesananController::class, 'resepsionis'])->middleware('resepsionis');
Route::post('/pemesanan', [PemesananController::class, 'store'])->middleware('user');
Route::post('/status/{id}', [PemesananController::class, 'status']);
Route::resource('/kamar', KamarController::class)->middleware('admin');
Route::resource('/fasilitas-kamar', FasilitasKamarController::class)->middleware('admin');
Route::resource('/fasilitas-hotel', FasilitasHotelController::class)->middleware('admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user');

Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashadmin')->middleware('admin');