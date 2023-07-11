<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// frontend routes
Route::as('front.')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('home');
    Route::get('shop', [PageController::class, 'shop'])->name('shop');
    Route::get('product/{slug}', [PageController::class, 'singleProduct'])->name('shop.single');

    // Add To Cart
    Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::get('load-cookie-data', [CartController::class, 'loadCookieData'])->name('cart.load');
    // Cart Page
    Route::get( 'cart', [CartController::class, 'index'] )->name( 'cart.index' );
    // Remove Cart
    route::delete('remove-from-cart', [CartController::class, 'removeCartItem'])->name('cart.remove');
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

    // News
    Route::get( 'news', [NewsController::class, 'index'] )->name( 'news.index' );
    Route::match(['get', 'post'], 'news/create', [NewsController::class, 'create'] )->name( 'news.create' );
    Route::match ( ['get', 'put'], 'news/edit/{news}', [NewsController::class, 'edit'] )->name( 'news.edit' );
    Route::delete('news/delete/{news}', [NewsController::class, 'delete'])->name('news.delete');


});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
