<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreReq;
use App\Models\Category;
use App\Models\Product;
use App\Traits\MediaUploader;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    use MediaUploader, SoftDeletes;


    function index()
    {
        $products  = Product::select('id', 'title', 'category_id', 'image','units', 'featured', 'stock','price','selling_price')->get();
        // dd($products);
        return view('backend.product.index', compact('products'));
    }


    function create()
    {
        $categories = Category::where('status', true)->select('id', 'title')->get();

        return view('backend.product.create', compact('categories'));
    }



    function store(ProductStoreReq $request)
    {
        // Image upload
        $featured_img = $this->uploadImg($request->featured_img, 'products');

        // Multiple Images
        $galleryImages = $this->uploadImg($request->gall_image, 'products');

        try {
            $product = $this->storeProduct($request, $featured_img, $galleryImages);
            return to_route('admin.product.index');
        } catch (\Exception $e) {
            Log::error("Product Store Issue", $e->getMessage());
            return to_route('admin.product.index');
        }

        
    }


    function destroy($id){
        dd($id);
    }


    private function storeProduct($request, $featured_img, $galleryImages)
    {
        $product =  Product::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'image' => $featured_img,
            'gall_images' => json_encode($galleryImages),
            'stock' => $request->stock,
            'price' => $request->price,
            'selling_price' => $request->selling_price ?? 0,
            'short_description' => $request->short_description,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'origin' => $request->origin,
            'sku' => $request->sku,
            'expiry_date' => $request->expiry_date,
            'units' => $request->unit_type ?? 'GRAM',
        ]);

        return $product;
    }
}
