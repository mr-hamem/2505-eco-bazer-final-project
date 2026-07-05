<?php

use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SingleProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/product', [SingleProductController::class, 'show'])->name('product.show');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Admin Profile
Route::prefix('/my-profile')->controller(AdminProfileController::class)->name('profile.')->group(function(){
    Route::get('/', 'viewProfile')->name('show');
    Route::patch('/update', 'updateProfile')->name('update');
});


// Admin Category
Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function(){
    Route::get('/', 'showCategories')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
});

