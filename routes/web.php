<?php

use App\Http\Controllers\UtsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/rahasia', function (){
    return 'ini halaman rahasia';
})->middleware('auth', 'RoleCheck:admin');

//Route::get('/produk',[ProductController::class, 'index']);

Route::get('/route_count/{id}', [ProductController::class, 'show']);

// Route::middleware(['auth', 'role:admin,owner'])->group(function () {
//     Route::get('/produk/{angka}', [ProductController::class, 'index'])->name('product.index');
// });

Route::get('/utama', function () {
    return view('utama');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/produk/{id}', [ProductController::class, 'show']);

Route::get('/uts', [UtsController::class, 'index']);

Route::get('/uts/pemrograman-web', [UtsController::class, 'pemrogramanWeb']);
Route::get('/uts/database', [UtsController::class, 'database']);

Route::get('/produkk', [ProductController::class, 'index'])->name('product-index');

Route::get('product/create', [ProductController::class, 'create'])->name('product-create');
Route::post('product', [ProductController::class, 'store'])->name('product-store');

Route::get('produkk/{id}/edit', [ProductController::class, 'edit'])->name('product-edit');
Route::put('/product/{id}',[ProductController::class, 'update'])->name('product-update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product-destroy');

require __DIR__ .'/auth.php';