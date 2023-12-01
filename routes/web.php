<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChasierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\MidController;
use Illuminate\Support\Facades\Route;

Route::get('/category', [CategoryController::class, 'tampil'])->name('category-index');
Route::get('/category/create', [CategoryController::class, 'tambah'])->name('category-create');
Route::post('/category/store', [CategoryController::class, 'simpan'])->name('category-store');
Route::delete('/category/{id}/delete', [CategoryController::class, 'delete'])->name('category-delete');
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category-edit');
Route::patch('/category/{id}/update', [CategoryController::class, 'update'])->name('category-update');


Route::get('/chasier', [ChasierController::class, 'tampil'])->name('chasier-index');
Route::get('/chasier/create', [ChasierController::class, 'tambah'])->name('chasier-create');
Route::post('/chasier/store', [ChasierController::class, 'simpan'])->name('chasier-store');

Route::get('/supplier', [SupplierController::class, 'tampil'])->name('supplier-index');
Route::get('/supplier/create', [SupplierController::class, 'tambah'])->name('supplier-create');
Route::post('/supplier/store', [SupplierController::class, 'simpan'])->name('supplier-store');
Route::delete('/supplier/{id}/delete', [SupplierController::class, 'delete'])->name('supplier-delete');
Route::get('/supplier/{id}/edit', [SupplierController::class, 'edit'])->name('supplier-edit');
Route::patch('/supplier/{id}/update', [SupplierController::class, 'update'])->name('supplier-update');

Route::get('/mid', [MidController::class, 'tampil'])->name('ujianuts-index');
Route::get('/mid/create', [MidController::class, 'tambah'])->name('ujianuts-create');
Route::post('/mid/store', [MidController::class, 'simpan'])->name('ujianuts-store');
Route::delete('/mid/{id}/delete', [MidController::class, 'delete'])->name('ujianuts-delete');
Route::get('/mid/{id}/edit', [MidController::class, 'edit'])->name('ujianuts-edit');
Route::patch('/mid/{id}/update', [MidController::class, 'update'])->name('ujianuts-update');

Route::resource('/products', ProductController::class);

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
