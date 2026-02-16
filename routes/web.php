<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::resource('products', ProductController::class);
Route::get('/category/{category}', [ProductController::class, 'byCategory'])->name('products.byCategory');
Route::post('/products/{product}/sale', [ProductController::class, 'recordSale'])->name('products.recordSale');

Route::prefix('seller')->name('seller.')->group(function () {
    Route::get('/login', [SellerController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [SellerController::class, 'login']);
    Route::get('/register', [SellerController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [SellerController::class, 'register']);
    Route::post('/logout', [SellerController::class, 'logout'])->name('logout');
    
    Route::middleware('auth:seller')->group(function () {
        Route::get('/dashboard', [SellerController::class, 'dashboard'])->name('dashboard');
    });
});
