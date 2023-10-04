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

Route::get('katalog/kategori', function () {
    return view('katalog.kategori', [
        'menu' => 'katalog',
        'title' => 'Kategori',
        ]);
    })->name('katalog.kategori'); 

Route::get('katalog/kategori/tambah', function () {
    return view('katalog.tambah-kategori', [
        'menu' => 'katalog',
        'title' => 'Tambah Kategori',
        ]);
    })->name('katalog.kategori.tambah'); 

Route::get('katalog/produk', function () {
    return view('katalog.produk', [
        'menu' => 'katalog',
        'title' => 'Produk',
        ]);
    })->name('katalog.produk'); 

Route::get('katalog/produk/tambah', function () {
    return view('katalog.tambah-produk', [
        'menu' => 'katalog',
        'title' => 'Tambah Produk',
        ]);
    })->name('katalog.produk.tambah'); 
