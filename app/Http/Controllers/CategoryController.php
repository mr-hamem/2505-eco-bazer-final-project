<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function showCategories(Request $request){
        $query = Category::query();
        if($request->search){
            $query->whereLike('title', "%$request->search%");
        }

        if($request->status){
            $query->where('status',$request->status);
        }

        $categories = $query->get();
        // dd($request->all());
        return view('backend.category.index', compact('categories'));
    }

    function create(){
        return view('backend.category.create');
    }

    function store(Request $request){
        // Categories Validation
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
    
        return redirect()->route('admin.category.index');
    }

    /**
     * Category Soft Delete Method
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete(); // Soft delete করবে (Model-এ SoftDeletes trait ব্যবহার করা থাকলে)

        return redirect()->back()->with('success', 'Category deleted successfully!');
    }
}