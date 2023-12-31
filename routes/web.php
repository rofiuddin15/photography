<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeDepanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes (semua daftar link ada disini)
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeDepanController::class, 'index'])->name('home.index');
Route::get('/detil/{id}', [HomeDepanController::class, 'show'])->name('home.detil');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::resource('produk', ProdukController::class);
    Route::resource('kategori', KategoriController::class);
});

require __DIR__.'/auth.php';
