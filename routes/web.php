<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WilayahController;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::resource('/customers', CustomerController::class);

    // wilayah indonesia
    Route::get('/provinsi', [WilayahController::class, 'getProvinsi']);
    Route::get('/kota/{provinsi_id}', [WilayahController::class, 'getKota']);
    Route::get('/kecamatan/{kota_id}', [WilayahController::class, 'getKecamatan']);
    Route::get('/kelurahan/{kecamatan_id}', [WilayahController::class, 'getKelurahan']);
});



Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
