<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dataharian', function () {
    return view('dataharian');
});

Route::get('/inputdata', function () {
    return view('inputdata');
});

Route::get('/laporan', function () {
    return view('laporan');
});
