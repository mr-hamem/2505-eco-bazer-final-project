<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
     public function shop() {
    return view('frontend.shop'); // This tells Laravel to look in resources/views/frontend/shop.blade.php
    
     }
}
