<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::resource('products', ProductController::class);

Route::middleware('guest')->group(function () {
  Route::get('/login', [UserController::class, 'login'])->name('login');
  Route::post('/login', [UserController::class, 'authenticate'])->name('authenticateUser');

  Route::get('/register', [UserController::class, 'register'])->name('register');
  Route::post('/register', [UserController::class, 'create'])->name('createUser');
});

Route::middleware('auth')->group(function () {
  Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
