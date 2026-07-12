<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view('backend.product.index');
    }


    function create(){
        return view('backend.product.create');
    }
}
