<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// TAMBAHKAN KODE INI DI BAWAHNYA:
Route::get('/dashboard', function () {
    return view('dashboard');
});
