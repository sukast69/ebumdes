<?php

use App\Http\Controllers\PemakaianAirController;
// use App\Http\Controllers\Pengguna2Controller;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TarifAirController;
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
//     return view('home');
// });

Route::get('/', function () {
    return view('home');
});
// Route::get('/pengguna_air', function () {
//     return view('admin.pengguna_air.v_pengguna_air');
// });

// Route::get('/', [PenggunaController::class, 'index']);

Route::get('/pengguna_air', [PenggunaController::class, 'index']);

Route::get('/pengguna_air', [PenggunaController::class, 'index'])->name('pengguna');

Route::get('/tarif_air', [TarifAirController::class, 'index']);

Route::post('/add_pengguna', [PenggunaController::class, 'addDataPengguna']);
Route::get('/pemakaian_air', [PemakaianAirController::class, 'addDataPemakaianAir']);

// Route::post('/updateDataPengguna/{id_pengguna}', [PenggunaController::class, 'addDataPemakaianAir']);

// Route::get('update', 'App\Http\Controllers\PenggunaController@editDataPengguna')->name('edit');

// Route::match(['get', 'post'], '/edit{id_pengguna}', 'PenggunaController@edit');

// Route::patch('pengguna_air/update', [PenggunaController::class, 'update'])->name('pengguna_air.update');

// Route::prefix('update')->group(function () {
//     Route::post('/pengguna_air', [PenggunaController::class, 'update']);
//     Route::resource('pengguna_air', PenggunaControler::class);
// });

// Route::resource('/pengguna_air', 'PenggunaController');

// Route::match(['get', 'post'])

// Route::match(['get', 'post'], '/pengguna_air/{id_pengguna}', 'App\Http\Controllers\PenggunaController@update');

// Route::match(['get', 'post'], '/pengguna_air/{id_pengguna}', 'App\Http\Controllers\PenggunaController@update');

Route::post('/pengguna_air/{id_pengguna}', [PenggunaController::class, 'update'])->name('update');
Route::get('pengguna/delete/{id_pengguna}', [PenggunaController::class, 'delete']);

Route::get('tarif_air/{id_tarif}', [TarifAirController::class, 'update']);