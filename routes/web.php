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
    Route::prefix('/kategori')->group(function () {
        Route::get('/', function () {
            return view('katalog.kategori.kategori', [
                'menu' => 'Katalog',
                'title' => 'Kategori',
                ]);
        })->name('katalog.kategori'); 
        Route::get('/add', function () {
            return view('katalog.kategori.add-kategori', [
                'menu' => 'Katalog',
                'title' => 'Tambah Kategori',
                ]);
        })->name('katalog.kategori.add'); 
    
    });

    Route::prefix('/produk')->group(function () {
        Route::get('/', function () {
            return view('katalog.produk.produk', [
                'menu' => 'Katalog',
                'title' => 'Produk',
                ]);
        })->name('katalog.produk');   
        Route::get('/add', function () {
            return view('katalog.produk.add-produk', [
                'menu' => 'Katalog',
                'title' => 'Tambah Produk',
                ]);
        })->name('katalog.produk.add'); 
    });
});

Route::prefix('/akuntansi')->group(function () {
    Route::prefix('/rekening')->group(function () {
        Route::get('/', function () {
            return view('akuntansi.rekening.rekening', [
                'menu' => 'Akuntansi',
                'title' => 'Rekening',
                ]);
        })->name('akuntansi.rekening'); 
    
        Route::get('/add', function () {
            return view('akuntansi.rekening.add-rekening', [
                'menu' => 'Akuntansi',
                'title' => 'Tambah Rekening',
                ]);
        })->name('akuntansi.rekening.add'); 
    });
    Route::prefix('/uang-masuk')->group(function () {
        Route::get('/', function () {
            return view('akuntansi.uang_masuk.uang_masuk', [
                'menu' => 'Akuntansi',
                'title' => 'Uang Masuk',
                ]);
        })->name('akuntansi.uang_masuk'); 
    
        Route::get('/add', function () {
            return view('akuntansi.uang_masuk.add-uang_masuk', [
                'menu' => 'Akuntansi',
                'title' => 'Tambah Uang Masuk',
                ]);
        })->name('akuntansi.uang_masuk.add'); 
    });
});


