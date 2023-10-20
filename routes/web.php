<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChasierController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/category', [CategoryController::class, 'tampil'])->name('category-index');
Route::get('/category/create', [CategoryController::class, 'tambah'])->name('category-create');
Route::post('/category/store', [CategoryController::class, 'simpan'])->name('category-store');


Route::get('/chasier', [ChasierController::class, 'tampil'])->name('chasier-index');
Route::get('/chasier/create', [ChasierController::class, 'tambah'])->name('chasier-create');
Route::post('/chasier/store', [ChasierController::class, 'simpan'])->name('chasier-store');

Route::get('/supplier', [SupplierController::class, 'tampil'])->name('supplier-index');
Route::get('/supplier/create', [SupplierController::class, 'tambah'])->name('supplier-create');
Route::post('/supplier/store', [SupplierController::class, 'simpan'])->name('supplier-store');

Route::get('/dashboard', function () {
    return view('dashboard');
});

// route utama
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
