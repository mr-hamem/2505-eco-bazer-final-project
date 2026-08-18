<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerDashboardController extends Controller
{
    function dashboard() {
        $customer = auth('customer')->user();
        // dd(auth('customer')->user(), auth()->user());
        
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $featuredProducts = Product::where('featured', 1)->where('status', 1)->take(8)->get();
        $recentProducts = Product::where('status', 1)->latest()->take(8)->get();

        return view('frontend.userDashboard', compact(
            'customer',
            'totalProducts',
            'totalCategories',
            'featuredProducts',
            'recentProducts'
        ));
    }

    function profile() {
        $customer = auth('customer')->user();
        return view('frontend.customer.profile', compact('customer'));
    }

    function settings() {
        $customer = auth('customer')->user();
        return view('frontend.customer.settings', compact('customer'));
    }

    function orders() {
        $customer = auth('customer')->user();
        return view('frontend.customer.orders', compact('customer'));
    }

    function wishlist() {
        $customer = auth('customer')->user();
        return view('frontend.customer.wishlist', compact('customer'));
    }

    function addresses() {
        $customer = auth('customer')->user();
        return view('frontend.customer.addresses', compact('customer'));
    }
}
