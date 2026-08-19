<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomepageController::class, 'home'])->name('frontend.index');
Route::get('/shop', [ShopController::class, 'shop'])->name('frontend.shop');
Route::get('/live-search', [ShopController::class, 'liveSearch'])->name('frontend.search');


Route::get('/contact', [contactController::class, 'contact'])->name('frontend.contact');
Route::get('/about', [aboutController::class, 'about'])->name('frontend.about');
Route::get('/blog', [BlogController::class, 'blog'])->name('frontend.blog');
Route::get('/pages', [PagesController::class, 'error'])->name('frontend.error-page');


// Add to Cart
Route::get('/cart/{id}', [ShopController::class, 'addToCart'])->name('product.cart')->middleware('cus');


Route::get('/product/{id}', [HomepageController::class, 'productDetails'])
    ->name('frontend.product.details');



// SSLCOMMERZ Start
Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

// Admin Login Routes
Auth::routes();





// Admin Routes
require __DIR__ . '/admin.php';
