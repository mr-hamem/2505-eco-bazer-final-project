<?php

namespace App\Http\Controllers;

use App\Models\Category; // Category মডেল যুক্ত করা হলো
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function home()
    {

        $categories = Category::where('status', 1)
            ->withCount('products')
            ->latest()
            ->get();

        $products = Product::select('id','title', 'price', 'selling_price', 'image', 'featured', 'status')->latest()->take(30)->get();
        return view('frontend.home', compact('categories', 'products'));
    }
}
