<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CategoryFileAdminController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryFileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserTypesController;

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

Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');

// auth

Route::prefix('auth')->group(function(){
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('loginVerify', [AuthController::class, 'loginVerify'])->name('auth.loginVerify');
    Route::get('registro', [AuthController::class, 'register']);
    Route::post('registroVerify', [AuthController::class, 'registerVerify']);
    Route::get('continuarRegistro', [AuthController::class, 'continuarRegistro'])->name('continuarRegistro');
    Route::get('signOut', [AuthController::class, 'signOut'])->name('signOut');
});

// registrar tipo usuario
Route::prefix('users')->group(function(){
    Route::get('user_types', [UserTypesController::class, 'index'])->name('user_types');
    Route::post('user_types_register', [UserTypesController::class, 'store'])->name('user_types_register');
    Route::get('user_types_consult', [UserTypesController::class, 'consult'])->name('user_types_consult');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::middleware('auth')->group(function(){
    
});



// Route::get('email', [ContactanosController::class, 'index'])->name('email.contactanos');
Route::post('/', [ContactanosController::class, 'store'])->name('contactanos.store');

Route::get('files', [FileController::class, 'index'])->name('files.index');
Route::get('files/create', [FileController::class, 'create'])->name('files.create');
Route::post('files', [FileController::class, 'store'])->name('files.store');
Route::get('files/{file}/edit', [FileController::class, 'edit'])->name('files.edit');
Route::get('files/{id}', [FileController::class, 'show'])->name('files.show');
Route::get('files/{file}/edit', [FileController::class, 'edit'])->name('files.edit');

Route::get('galleries', [CategoryFileController::class, 'index'])->name('galleries.index');
Route::get('galleries/{category}', [CategoryFileController::class, 'show'])->name('galleries.show');
