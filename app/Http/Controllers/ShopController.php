<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
     public function shop(Request $request)
     {
          $categories = Category::where('status', 1)->select('id', 'title','slug')
               ->latest()
               ->get();

          
          $query = Product::query();
          // category
          if($request->category){
               // $query->where('category_id', $request->category);
               $query->whereHas('category', function($q) use ($request){
                    return $q->where('slug', $request->category);
               });
          }


          $products  = $query->select('id', 'title', 'price', 'selling_price', 'image', 'featured', 'status')->latest()->paginate(16);
          return view('frontend.shop', compact('products', 'categories')); 

     }
}
