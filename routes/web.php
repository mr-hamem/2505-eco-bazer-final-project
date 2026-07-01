<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'homepage'])->name('frontend.index');
Route::get('/home', [HomepageController::class, 'home'])->name('frontend.home');
//Route::view('/shop', 'frontend.shop')->name('shop');
Route::get('/shop', [ShopController::class, 'shop'])->name('frontend.shop');  
Route::get('/contact', [contactController::class, 'contact'])->name('frontend.contact');
Route::get('/about', [aboutController::class, 'about'])->name('frontend.about');
  

// Admin Login Routes
Auth::routes();



