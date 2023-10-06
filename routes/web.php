<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/mahasiswa', function () {

    $array_nama = ["Ghozi", "Anna", "Wawi"];

    return view('universitas.mahasiswa')->with('mahasiswa', $array_nama);
});

//routes template admin
Route::get('/admin', function () {
    return view('dashboard');
});
