<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/add-karyawan', function () {
    return view('createKaryawan');
});

// Route::get('/add-karyawan', [KaryawanController::class, 'getCreatePage']);
Route::post('/add-karyawan-post', [KaryawanController::class, 'createKaryawan']);