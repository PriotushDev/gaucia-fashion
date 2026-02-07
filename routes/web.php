<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WebsiteController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CartController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\BrandController;
use \App\Http\Controllers\SubCategoryController;
use \App\Http\Controllers\UnitController;

Route::get('/', [WebsiteController::class, 'index'])->name('website.home');
Route::get('/all-products', [WebsiteController::class, 'all_products'])->name('website.category.all.products');
Route::get('/new-arrivals', [WebsiteController::class, 'new_arrivals'])->name('website.category.new.arrivals');

// Product information
Route::get('/product/detail', [WebsiteController::class, 'product_detail'])->name('website.product.detail');

// Cart info
Route::get('/cart', [CartController::class, 'index'])->name('website.cart.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    // Admin Panel Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Brand Route
    Route::get('/brand', [BrandController::class, 'index'])->name('admin.brand.index');
    Route::get('/brand/create', [BrandController::class, 'create'])->name('admin.brand.create');


    // Category Route
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');


    // Sub-Category Route
    Route::get('/sub-category', [SubCategoryController::class, 'index'])->name('admin.sub_category.index');
    Route::get('/sub-category/create', [SubCategoryController::class, 'create'])->name('admin.sub_category.create');

    // Unit Route
    Route::get('/unit', [UnitController::class, 'index'])->name('admin.unit.index');
    Route::get('/unit/create', [UnitController::class, 'create'])->name('admin.unit.create');



});
