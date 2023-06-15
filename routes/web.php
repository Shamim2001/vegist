<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// frontend routes
Route::as('front.')->group(function () {
    Route::get('/', [HomepageController::class, 'index'])->name('home');
});


// backend routes
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    // Slider
    Route::get('slider', [SliderController::class, 'index'])->name('slider.index');
    Route::match(['get', 'post'], 'slider/create', [SliderController::class, 'create'])->name('slider.create');
    Route::match(['get', 'put', 'delete'], 'sliver/edit/{slider}', [SliderController::class, 'edit'])->name('slider.edit');

    // Category
    Route::get( 'category', [CategoryController::class, 'index'] )->name( 'category.index' );
    Route::match(['get', 'post'], 'category/create', [CategoryController::class, 'create'] )->name( 'category.create' );
    Route::match ( ['get', 'put'], 'category/edit/{category}', [CategoryController::class, 'edit'] )->name( 'category.edit' );
    Route::delete('category/delete/{category}', [CategoryController::class, 'delete'])->name('category.delete');

    // Product
    Route::get( 'product', [ProductController::class, 'index'] )->name( 'product.index' );
    Route::match(['get', 'post'], 'product/create', [ProductController::class, 'create'] )->name( 'product.create' );
    Route::match ( ['get', 'put'], 'product/edit/{product}', [ProductController::class, 'edit'] )->name( 'product.edit' );
    Route::delete('product/delete/{product}', [ProductController::class, 'delete'])->name('product.delete');


});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
