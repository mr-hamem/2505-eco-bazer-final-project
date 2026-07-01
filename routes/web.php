<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'homepage'])->name('frontend.index');
Route::get('/home', [HomepageController::class, 'home'])->name('frontend.home');
//Route::view('/shop', 'frontend.shop')->name('shop');
Route::get('/shop', [ShopController::class, 'shop'])->name('frontend.shop');  

// Admin Login Routes
Auth::routes();



