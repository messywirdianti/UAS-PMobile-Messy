<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienControllerApi;
use App\Http\Controllers\DokterControllerApi;
use App\Http\Controllers\ObatControllerApi;
use App\Http\Controllers\PoliKlinikControllerApi;
use App\Http\Controllers\DiagnosaControllerApi;
use App\Http\Controllers\JadwalControllerApi;
use App\Http\Controllers\PendaftaranControllerApi;
use App\Http\Controllers\RekapMedisControllerApi;
use App\Http\Controllers\ResepControllerApi;
use App\Http\Controllers\ApotekerControllerApi;
use App\Http\Controllers\LoginControllerApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('/pasien', PasienControllerApi::class);
// Route::post('/pasien', [PasienControllerApi::class, 'store']);
// Route::put('/pasien/{id}', [PasienControllerApi::class, 'update']);
// Route::delete('/pasien/{id}', [PasienControllerApi::class, 'destroy']);
Route::resource('/dokter', DokterControllerApi::class);
Route::resource('/obat', ObatControllerApi::class);
Route::resource('/poliKlinik', PoliKlinikControllerApi::class);
Route::resource('/diagnosa', DiagnosaControllerApi::class);
Route::resource('/jadwal', JadwalControllerApi::class);
Route::resource('/pendaftaran', PendaftaranControllerApi::class);
Route::resource('/rekapMedis', RekapMedisControllerApi::class);
Route::resource('/resep', ResepControllerApi::class);
Route::resource('/apoteker', ApotekerControllerApi::class);
Route::post('/login', [LoginControllerApi::class, 'login']);
Route::post('register', [LoginControllerApi::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [LoginControllerApi::class, 'logout']);
    Route::get('user', [LoginControllerApi::class, 'user']);
});