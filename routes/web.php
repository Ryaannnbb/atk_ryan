<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

Route::controller(BarangController::class)->prefix('barang')->group(function () {
    Route::get('','index')->name('barang');
    Route::post('store','store')->name('barang.store');
    Route::delete('destroy{id}','destroy')->name('barang.destroy');
});
