<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact() {
    return view('frontend.contact'); // This tells Laravel to look in resources/views/frontend/contact.blade.php
    
     }
}
