<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::resource('/customers', CustomerController::class);
});



Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
