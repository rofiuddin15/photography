<?php

use App\Http\Controllers\HomeDepanController;
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

Route::get('/', [HomeDepanController::class, 'index']);

Route::get('/detil-produk', function() {
    return view('depan.detil_produk');
});
