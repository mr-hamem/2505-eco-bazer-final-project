<?php

use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SingleProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



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
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

// Admin Product 
Route::prefix('/product')->name('product.')->controller(ProductController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'editOrCreate')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'editOrCreate')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    Route::delete('/remove-image/{id}', 'removeImage')->name('remove-image'); // নতুন
});



Route::get('/customers', [CustomerController::class, 'show'])->name('customers.show');

//Password Update
Route::patch('/change-password', [AdminProfileController::class, 'changePassword'])->name('change.password');
Route::patch('/update-password', [AdminProfileController::class, 'updatePassword'])->name('update.password');

