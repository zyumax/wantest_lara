<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('create', [ProductController::class, 'create'])->name('product.create');
Route::post('post', [ProductController::class, 'store'])->name('product.store');
Route::post('post/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('show', [ProductController::class, 'show'])->name('product.show');
Route::get('post/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('product/{product}', [ProductController::class, 'update'])->name('product.update');