<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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
Route::middleware('auth')->group(function(){
    Route::get('/admin', function () {
        return view('admin');
    });
});


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




