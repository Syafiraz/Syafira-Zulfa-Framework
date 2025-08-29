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

Route::get('/users/{id}', function(int $id): string {
    return "Ini halaman user dengan ID: $id";
})->where('id', '[0-9]+')->name('users');

Route::get('/about', function(): string {
    return "Ini halaman about";
})->name('about');

Route::get('/contact', function(): string {
    return "Ini halaman contact";
})->name('contact');

Route::prefix('manage')->name('manage.')->group(function () {

    Route::get('/edit', function(): string {
        return "Ini halaman manage/edit";
    })->name('edit');

    Route::get('/barang', function(): string {
        return "Ini halaman manage/barang";
    })->name('barang');

});