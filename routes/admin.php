<?php

use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Admin Profile

Route::prefix('/my-profile')->controller(AdminProfileController::class)->name('profile.')->group(function(){
    Route::get('/', 'viewProfile')->name('show');
    Route::patch('/update', 'updateProfile')->name('update');
});