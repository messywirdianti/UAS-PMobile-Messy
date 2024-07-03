<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\PoliKlinikController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RekapMedisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ApotekerController;

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
    return view('layouts.main');
});

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');

Route::get('/register', [LoginController::class, 'register'])->name('register')->middleware('guest');

Route::post('/register', [LoginController::class, 'registerAcc'])->name('registerAcc')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:dokter'], 'as' => 'admin.'], function (){
    Route::get('/home', [HomeController::class, 'dashboard'])->name('home');
});

Route::get('/', function () {
    return view ('layouts.main');
})->name('backend')->middleware('auth');


Route::resource('/pasien', PasienController::class);
Route::resource('/diagnosa', DiagnosaController::class);
Route::resource('/dokter', DokterController::class);
Route::resource('/poliKlinik', PoliKlinikController::class);
Route::resource('/jadwal', JadwalController::class);
Route::resource('/pendaftaran', PendaftaranController::class);
Route::resource('/obat', ObatController::class);
Route::resource('/resep', ResepController::class);
Route::resource('/pembayaran', PembayaranController::class);
Route::resource('/rekapMedis', RekapMedisController::class);
Route::resource('/apoteker', ApotekerController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
