<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\SingleProductController;

Route::get('/product/{id}', [SingleProductController::class, 'show'])->name('product.show');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Admin Profile
Route::prefix('/my-profile')->controller(AdminProfileController::class)->name('profile.')->group(function(){
    Route::get('/', 'viewProfile')->name('show');
    Route::patch('/update', 'updateProfile')->name('update');
});

