<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function showCategories(){
        return view('backend.category.index');
    }

    function create(){
        return view('backend.category.create');
    }


    function store(Request $request){
        // Cateogrories Val
        $request->validate([
            'title' => 'required|min:2',
            'slug' => 'required|unique:categories,slug',
            'img' => 'nullable|mimes:jpg,png,webp',
            'details' => 'nullable|max:150'
        ]);

        Category::create([
            'title' => $request->title,
            'slug' => str()->slug($request->slug),
            'img' => $request->img,
            'details' => $request->details,
        ]);



    }
}
