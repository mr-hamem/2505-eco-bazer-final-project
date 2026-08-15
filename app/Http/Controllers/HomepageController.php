<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\InstagramPost;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    // Homepage
    public function home()
    {
        $categories = Category::where('status', 1)
            ->withCount('products')
            ->latest()
            ->get();

        $products = Product::where('status', 1)
            ->latest()
            ->take(30)
            ->get();

        $instagramPosts = InstagramPost::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('frontend.home', compact('categories', 'products', 'instagramPosts'));
    }

    // Product Details
    public function productDetails($id)
    {
        $product = Product::with('category')
            ->where('status', 1)
            ->findOrFail($id);

        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('status', 1)
            ->latest()
            ->take(8)
            ->get();

        return view('frontend.product-details', compact('product', 'relatedProducts'));
    }
}