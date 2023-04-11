<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryFileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('galleries', [CategoryFileController::class, 'index'])->name('galleries.index');
Route::get('galleries/create', [CategoryFileController::class, 'create'])->name('galleries.create');
Route::post('galleries', [CategoryFileController::class, 'store'])->name('galleries.store');
Route::get('galleries/show', [CategoryFileController::class, 'show'])->name('galleries.show');
Route::delete('galleries/destroy/{id}', [CategoryFileController::class, 'destroy'])->name('galleries.destroy');
Route::get('galleries/{id}/edit', [CategoryFileController::class, 'edit'])->name('galleries.edit');
Route::patch('galleries/{id}', [CategoryFileController::class, 'update'])->name('galleries.update');

    

Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
