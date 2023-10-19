<?php

use App\Http\Controllers\ChasierController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/category', [CategoryController::class, 'index'])->name('category-index');

Route::get('/category/create', [CategoryController::class, 'Tambah'])->name('category-create');

Route::post('/category/store', [CategoryController::class, 'Simpan'])->name('category-store');

Route::get('/chasier', [ChasierController::class, 'index'])->name('chasier-index');

Route::get('/chasier/create', [ChasierController::class, 'Tambah'])->name('chasier-create');

Route::post('/chasier/store', [ChasierController::class, 'Simpan'])->name('chasier-store');

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return ('hello world');
});

Route::get('/dashboard', function() {
    return view('dasboard');
});
