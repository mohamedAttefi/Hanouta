<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('login');
});
Route::get('/Register', function () {
    return view('register');
})->name('show.register');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/auth/google', [GoogleController::class, 'redirect']);
Route::get('/auth/google/callback', [GoogleController::class, 'callback']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/sales', [SaleController::class, 'index']);
