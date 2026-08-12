<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomepageController::class, 'home'])->name('frontend.index');
Route::get('/shop', [ShopController::class, 'shop'])->name('frontend.shop');  
Route::get('/live-search', [ShopController::class, 'liveSearch'])->name('frontend.search');  


Route::get('/contact', [contactController::class, 'contact'])->name('frontend.contact');
Route::get('/about', [aboutController::class, 'about'])->name('frontend.about');
Route::get('/blog', [BlogController::class, 'blog'])->name('frontend.blog');
Route::get('/pages', [PagesController::class, 'error'])->name('frontend.error-page');


Route::get('/product/{id}', [HomepageController::class, 'productDetails'])
    ->name('frontend.product.details');
  

// Admin Login Routes
Auth::routes();


// Admin Routes
require __DIR__ . '/admin.php';



