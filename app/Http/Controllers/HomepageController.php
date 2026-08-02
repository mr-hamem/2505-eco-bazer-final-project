<?php

namespace App\Http\Controllers;

use App\Models\Category; // Category মডেল যুক্ত করা হলো
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function home() {
        // ডাটাবেজ থেকে ক্যাটাগরিগুলো আনুন
        $categories = Category::where('status', 1) 
                              ->withCount('products') 
                              ->latest()
                              ->get();

        // frontend.home ভিউতে $categories ডাটা পাঠানো হচ্ছে
        return view('frontend.home', compact('categories'));
    }
}