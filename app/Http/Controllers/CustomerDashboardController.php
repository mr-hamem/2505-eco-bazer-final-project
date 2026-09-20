<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerDashboardController extends Controller
{
    function dashboard() {
        $customer = auth('customer')->user();
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

    function updateProfile(Request $request) {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . auth('customer')->id(),
            'phone' => 'nullable|string|max:20',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5048',
        ]);

        $customer = Customer::findOrFail(auth('customer')->id());

        $customer->name = $request->first_name . ' ' . $request->last_name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;

        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('profile', 'public');
            $customer->profile_img = $fileName;
        }

        $customer->save();

        return back()->with('success', 'Profile updated successfully.');
    }
}
