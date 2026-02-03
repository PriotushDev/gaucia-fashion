<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'index'])->name('website.home');
Route::get('/all-products', [WebsiteController::class, 'all_products'])->name('website.category.all.products');
Route::get('/new-arrivals', [WebsiteController::class, 'new_arrivals'])->name('website.category.new.arrivals');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    // admin panel route
});
