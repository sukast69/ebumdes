<?php

use App\Http\Controllers\PemakaianAirController;
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
Route::get('/pengguna_air', [PenggunaController::class, 'index'])->name('insert');

Route::get('/tarif_air', [TarifAirController::class, 'index']);

Route::post('/add_pengguna', [PenggunaController::class, 'addDataPengguna']);
Route::get('/pemakaian_air', [PemakaianAirController::class, 'addDataPemakaianAir']);

// Route::post('/updateDataPengguna/{id_pengguna}', [PenggunaController::class, 'addDataPemakaianAir']);

// Route::get('update', 'App\Http\Controllers\PenggunaController@editDataPengguna')->name('edit');

// Route::match(['get', 'post'], '/edit{id_pengguna}', 'PenggunaController@edit');

Route::post('update', 'use App\Http\Controllers\PenggunaController@update')->name('update');

// Route::match(['get', 'post'], '/editDataPengguna{id_pengguna}', 'App\Http\Controllers\PenggunaController@editDataPengguna');