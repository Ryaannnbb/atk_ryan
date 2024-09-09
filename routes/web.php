<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;

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
    return view('beranda');
});

//Route Dashboard
Route::controller(DashboardController::class)->prefix('beranda')->group(function () {
    Route::get('','index')->name('beranda');
});

// Route Barang
Route::controller(BarangController::class)->prefix('barang')->group(function () {
    Route::get('','index')->name('barang');
    Route::post('store','store')->name('barang.store');
    Route::put('update{id}','update')->name('barang.update');
    Route::delete('destroy{id}','destroy')->name('barang.destroy');
});

// Route Kategori
Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
    Route::get('', 'index')->name('kategori');
    Route::post('store', 'store')->name('kategori.store');
    Route::put('update/{id}', 'update')->name('kategori.update');
    Route::delete('destroy/{id}', 'destroy')->name('kategori.destroy');
});
