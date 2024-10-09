<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/customers', function () {
    return view('customer');
});

Route::get('/customers_create', function () {
    return view('customer_create');
});
