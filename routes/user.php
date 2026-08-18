<?php

use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\CustomerDashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/sign-in', [CustomerAuthController::class, 'showLoginForm'])->name('customer.signin');
Route::post('/sign-in', [CustomerAuthController::class, 'login'])->name('customer.signin.complete');
Route::get('/sign-up', [CustomerAuthController::class, 'showRegisterForm'])->name('customer.signup');
Route::post('/sign-up', [CustomerAuthController::class, 'register'])->name('customer.signup.complete');

Route::get('/google/login', [CustomerAuthController::class, 'googleLogin'])->name('customer.google');
Route::get('/google/redirect', [CustomerAuthController::class, 'googleRedirect'])->name('customer.google.redirect');

Route::get('/github/login', [CustomerAuthController::class, 'githubLogin'])->name('customer.github');
Route::get('/github/redirect', [CustomerAuthController::class, 'githubRedirect'])->name('customer.github.redirect');
// Customer Dashboard Routes
Route::middleware('cus')->prefix('customer')->name('customer.')->group(function () {
    Route::get('/dashboard', [CustomerDashboardController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [CustomerAuthController::class, 'logout'])->name('logout');

    Route::get('/profile', [CustomerDashboardController::class, 'profile'])->name('profile');
    Route::get('/settings', [CustomerDashboardController::class, 'settings'])->name('settings');
    Route::get('/orders', [CustomerDashboardController::class, 'orders'])->name('orders');
    Route::get('/wishlist', [CustomerDashboardController::class, 'wishlist'])->name('wishlist');
    Route::get('/addresses', [CustomerDashboardController::class, 'addresses'])->name('addresses');
});
