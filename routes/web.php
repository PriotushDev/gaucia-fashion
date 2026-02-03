<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WebsiteController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CartController;

Route::get('/', [WebsiteController::class, 'index'])->name('website.home');

// Product category
Route::get('/all-products', [CategoryController::class, 'all_products'])->name('website.category.all.products');
Route::get('/new-arrivals', [CategoryController::class, 'new_arrivals'])->name('website.category.new.arrivals');

// Product information
Route::get('/product/detail', [ProductController::class, 'index'])->name('website.product.index');

// Cart info
Route::get('/cart', [CartController::class, 'index'])->name('website.cart.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    // admin panel route
});
