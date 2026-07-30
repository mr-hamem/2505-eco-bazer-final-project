<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    function showCategories(Request $request){
        $query = Category::query();
        if($request->search){
            $query->whereLike('title', "%$request->search%");
        }

        if ($request->filled('status')) {
            $query->where('status',$request->status);
        }

        if ($request->boolean('empty_category')) {
            $query->doesntHave('products');
        }

        $categories = $query->withCount('products')->get();
        return view('backend.category.index', compact('categories'));
    }

    function create(){
        return view('backend.category.create');
    }

    function store(Request $request){
        $data = $this->validatedData($request);
        Category::create($data);
    
        return redirect()->route('admin.category.index')->with('success', 'Category created successfully!');
    }

    public function edit($id)
    {
        return view('backend.category.edit', ['category' => Category::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($this->validatedData($request, $category));

        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully!');
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

    private function validatedData(Request $request, ?Category $category = null): array
    {
        $request->validate([
            'title' => ['required', 'string', 'min:2', 'max:255'],
            'slug' => ['required', 'string', Rule::unique('categories', 'slug')->ignore($category?->id)],
            'img' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'details' => ['nullable', 'string', 'max:150'],
            'featured' => ['nullable', 'boolean'],
            'status' => ['nullable', 'boolean'],
        ]);

        $data = [
            'title' => $request->title,
            'slug' => str()->slug($request->slug),
            'details' => $request->details,
            'featured' => $request->boolean('featured'),
            'status' => $request->boolean('status'),
        ];

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('categories', 'public');
        }

        return $data;
    }
}
