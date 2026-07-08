<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    protected function show()
    {
        return view('backend.singleproduct');
    }
}