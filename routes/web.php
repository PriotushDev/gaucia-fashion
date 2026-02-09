<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WebsiteController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\CartController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\BrandController;
use \App\Http\Controllers\SubCategoryController;
use \App\Http\Controllers\UnitController;
use \App\Http\Controllers\ProductController;

Route::get('/', [WebsiteController::class, 'index'])->name('website.home');
Route::get('/all-products', [WebsiteController::class, 'all_products'])->name('website.categories.all.products');
Route::get('/new-arrivals', [WebsiteController::class, 'new_arrivals'])->name('website.categories.new.arrivals');

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
    Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');



    // Category Route
//    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
//    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('categories', CategoryController::class);
        Route::post('categories/{category}/toggle-status', [CategoryController::class, 'toggleStatus'])
            ->name('categories.toggle-status');
    });


    // Sub-Category Route
    Route::get('/sub-categories', [SubCategoryController::class, 'index'])->name('admin.sub_category.index');
    Route::get('/sub-categories/create', [SubCategoryController::class, 'create'])->name('admin.sub_category.create');


    // Unit Route
    Route::get('/unit', [UnitController::class, 'index'])->name('admin.unit.index');
    Route::get('/unit/create', [UnitController::class, 'create'])->name('admin.unit.create');


    // Product Route
    Route::get('/product', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('admin.product.create');



});
