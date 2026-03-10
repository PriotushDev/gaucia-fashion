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
Route::get('/products/detail', [WebsiteController::class, 'product_detail'])->name('website.products.detail');

// Cart info
Route::get('/cart', [CartController::class, 'index'])->name('website.cart.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    // Admin Panel Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Brand Route

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('brands', BrandController::class);
        Route::post('brands/{brand}/toggle-status',
            [BrandController::class, 'toggleStatus'])
            ->name('brands.toggle-status');
    });




    // Category Route

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('categories', CategoryController::class);
        Route::post('categories/{category}/toggle-status', [CategoryController::class, 'toggleStatus'])
            ->name('categories.toggle-status');
    });


    // Sub-Category Route
    Route::prefix('admin')
        ->name('admin.')
        ->group(function () {

            Route::resource('subcategories', SubCategoryController::class);

            Route::post(
                'subcategories/{subCategory}/toggle-status',
                [SubCategoryController::class,'toggleStatus']
            )->name('subcategories.toggle-status');

        });


    // Unit Route
    Route::prefix('admin')->name('admin.')->group(function () {

        Route::resource('units', UnitController::class);

        Route::post('units/{unit}/toggle-status',
            [UnitController::class,'toggleStatus'])
            ->name('units.toggle-status');

    });



    // Product Route
//    Route::prefix('admin')->name('admin.')->group(function () {
//
//        Route::resource('products', ProductController::class);
//
//        Route::post('products/{products}/toggle-status',
//            [ProductController::class,'toggleStatus'])
//            ->name('products.toggle-status');
//
//    });
    Route::prefix('admin')->name('admin.')->group(function () {

        Route::resource('products', ProductController::class);

        Route::post(
            'products/{product}/toggle-status',
            [ProductController::class, 'toggleStatus']
        )->name('products.toggle-status');

    });


});
