<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
     public function shop(Request $request)
     {
          $categories = Category::where('status', 1)->select('id', 'title', 'slug')
               ->latest()
               ->get();


          $query = Product::query();
          // category
          if ($request->category) {
               // $query->where('category_id', $request->category);
               $query->whereHas('category', function ($q) use ($request) {
                    return $q->where('slug', $request->category);
               });
          }
          // search query
          if ($request->search) {
               $query->whereLike('title', "%$request->search%");
          }


          $products  = $query->select('id', 'title', 'price', 'selling_price', 'image', 'featured', 'status')->latest()->paginate(16);
          return view('frontend.shop', compact('products', 'categories'));
     }


     function liveSearch(Request $request)
     {
          try {
               $products =  Product::whereLike('title', "%$request->search%")->latest()->take(5)->select('id', 'title', 'slug')->get();
               return response()->json([
                    'status' => true,
                    'data' => $products,
                    'msg' => 'Product filtered successfully'
               ]);
          } catch (\Throwable $th) {
               return response()->json([
                    'status' => true,
                    'data' => [],
                    'msg' => 'Something went wrong',
                    'error' => $th->getMessage()
               ]);
          }
     }


     function addToCart($id)
     {
          $customerId = auth('customer')->id();
          if (Cart::where('customer_id', $customerId)->where('product_id', $id)->exists()) {
               // qty  += 1
              $cart = Cart::where('customer_id', $customerId)->where('product_id', $id)->increment('qty', 1);
          } else {
               $cart = Cart::create(
                    [
                         'customer_id' => auth('customer')->id(),
                         'product_id' => $id,
                         'qty' => 1,
                    ]
               );
          }
          return back();
     }
}
