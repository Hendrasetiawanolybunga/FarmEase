<?php

use Illuminate\Support\Facades\Route;


// Route untuk Dashboard (Halaman Utama)
Route::get('/', function () {
    return view('dashboard');
});

// Route untuk Perencanaan Musim Tanam
Route::get('/perencanaan-tanam', function () {
    return view('perencanaan-tanam');
});

// Route untuk Pencatatan Input & Biaya
Route::get('/pencatatan-input', function () {
    return view('pencatatan-input');
});

// Route untuk Informasi Cuaca Lokal
Route::get('/cuaca-lokal', function () {
    return view('cuaca-lokal');
});

// Route untuk Akses Harga Pasar
Route::get('/harga-pasar', function () {
    return view('harga-pasar');
});