<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WebsiteController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CartController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\BrandController;

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

    // Admin Panel Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Brand Route
    Route::get('/brand', [BrandController::class, 'index'])->name('admin.brand.index');
    Route::get('/brand/create', [BrandController::class, 'create'])->name('admin.brand.create');
});
