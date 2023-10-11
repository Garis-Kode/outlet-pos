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

Route::get('dashboard', function () {
    return view('dashboard', [
        'menu' => null,
        'title' => 'Dashboard',
        ]);
})->name('dashboard'); 

Route::prefix('/katalog')->group(function () {
    Route::get('/kategori', function () {
        return view('katalog.kategori', [
            'menu' => 'Katalog',
            'title' => 'Kategori',
            ]);
        })->name('katalog.kategori'); 
    
    Route::get('/kategori/tambah', function () {
        return view('katalog.tambah-kategori', [
            'menu' => 'Katalog',
            'title' => 'Tambah Kategori',
            ]);
        })->name('katalog.kategori.tambah'); 
    
    Route::get('/produk', function () {
        return view('katalog.produk', [
            'menu' => 'Katalog',
            'title' => 'Produk',
            ]);
        })->name('katalog.produk'); 
    
    Route::get('/produk/tambah', function () {
        return view('katalog.tambah-produk', [
            'menu' => 'Katalog',
            'title' => 'Tambah Produk',
            ]);
        })->name('katalog.produk.tambah'); 
});

Route::prefix('/akuntansi')->group(function () {
    Route::get('/rekening', function () {
        return view('akuntansi.rekening', [
            'menu' => 'Akuntansi',
            'title' => 'Rekening',
            ]);
        })->name('akuntansi.rekening'); 
});


