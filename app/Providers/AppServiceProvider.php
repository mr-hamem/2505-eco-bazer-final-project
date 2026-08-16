<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {



        view()->composer('layouts.frontendLayout', function ($view) {
            $cartQty = Cart::where('customer_id', auth('customer')->id())->sum('qty');
            $cartPrice = Cart::with('product')->where('customer_id', auth('customer')->id())->get();
            
       
            return $view->with([
                'cartQty' => $cartQty,
            ]);
        });
    }
}
