<?php

use App\Http\Controllers\Auth\CustomerAuthController;
use Illuminate\Support\Facades\Route;


Route::get('/sign-in',[CustomerAuthController::class, 'showLoginForm'])->name('customer.signin');
Route::post('/sign-in',[CustomerAuthController::class, 'login'])->name('customer.signin.complete');
Route::get('/sign-up',[CustomerAuthController::class, 'showRegisterForm'])->name('customer.signup');
Route::post('/sign-up',[CustomerAuthController::class, 'register'])->name('customer.signup.complete');

Route::get('/google/login',[CustomerAuthController::class, 'googleLogin'])->name('customer.google');
Route::get('/google/redirect',[CustomerAuthController::class, 'googleRedirect'])->name('customer.google.redirect');

Route::get('/github/login',[CustomerAuthController::class, 'githubLogin'])->name('customer.github');
Route::get(' ',[CustomerAuthController::class, 'githubRedirect'])->name('customer.github.redirect');

// User Dashboard
Route::get('/customer/dashboard',  function(){
    echo "Welcome to our dashboard " . auth('customer')->user()->name;
});