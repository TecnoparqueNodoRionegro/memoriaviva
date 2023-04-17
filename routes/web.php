<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CategoryFileAdminController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryFileController;
use App\Http\Controllers\ProductAdminController;
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

Route::get('admin/galleries', [CategoryFileAdminController::class, 'index'])->name('admin.galleries.index');
Route::get('admin/galleries/create', [CategoryFileAdminController::class, 'create'])->name('admin.galleries.create');
Route::post('admin/galleries', [CategoryFileAdminController::class, 'store'])->name('admin.galleries.store');
Route::get('admin/galleries/show', [CategoryFileAdminController::class, 'show'])->name('admin.galleries.show');
Route::delete('admin/galleries/destroy/{id}', [CategoryFileAdminController::class, 'destroy'])->name('admin.galleries.destroy');
Route::get('admin/galleries/{id}/edit', [CategoryFileAdminController::class, 'edit'])->name('admin.galleries.edit');
Route::patch('admin/galleries/{id}', [CategoryFileAdminController::class, 'update'])->name('admin.galleries.update');


// Productos desde la vista del administrador
Route::get('admin/products', [ProductAdminController::class, 'index'])->name('admin.products.index');
Route::get('admin/products/create', [ProductAdminController::class, 'create'])->name('admin.products.create');
Route::post('admin/products', [ProductAdminController::class, 'store'])->name('admin.products.store');
// Productos desde la vista de usuario
Route::get('products', [ProductController::class, 'index'])->name('products.index');


// Route::get('email', [ContactanosController::class, 'index'])->name('email.contactanos');
Route::post('/', [ContactanosController::class, 'store'])->name('contactanos.store');

Route::get('admin/files', [FileController::class, 'index'])->name('admin.files.index');
Route::get('admin/files/create', [FileController::class, 'create'])->name('admin.files.create');
Route::post('admin/files', [FileController::class, 'store'])->name('admin.files.store');
Route::get('admin/files/{file}/edit', [FileController::class, 'edit'])->name('admin.files.edit');
Route::put('admin/files/{file}', [FileController::class, 'update'])->name('admin.files.update');
Route::delete('admin/files/{file}', [FileController::class, 'destroy'])->name('admin.files.destroy');

Route::get('galleries', [CategoryFileController::class, 'index'])->name('galleries.index');
Route::get('galleries/{category}', [CategoryFileController::class, 'show'])->name('galleries.show');
