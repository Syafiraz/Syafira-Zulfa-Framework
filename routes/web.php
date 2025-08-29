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

route::get('/users/{id}', action: function(int $id): string {
    return "Ini halaman user dengan ID: $id";
});

route::get(uri: '/about', action: function(): string {
    return "Ini halaman about";
})->name(name: 'about');

route::get(uri: '/contact', action: function(): string {
    return "Ini halaman contact";
})->name(name: 'contact');

route::prefix('manage')->group(callback: function (): void {

    route::get(uri:'/edit', action: function(): string {
        return "Ini halaman manage/edit";
    });

    route::get(uri: '/barang', action: function(): string{
        return "ini halaman manage barang";
    });

});