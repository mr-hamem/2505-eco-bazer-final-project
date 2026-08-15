<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Constant;
use App\Http\Requests\ProductStoreReq;
use App\Models\Category;
use App\Models\Product;
use App\Traits\MediaUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    use MediaUploader;


    function index(Request $request)
    {
        $products = Product::with('category:id,title')
            ->when($request->filled('search'), fn ($query) => $query->where('title', 'like', '%' . $request->search . '%'))
            ->when($request->filled('status'), fn ($query) => $query->where('status', $request->status))
            ->when($request->filled('stock'), function ($query) use ($request) {
                $request->stock === '1' ? $query->where('stock', '>', 0) : $query->where('stock', '<=', 0);
            })
            ->select('id', 'title', 'category_id', 'image', 'units', 'featured', 'status', 'stock', 'price', 'selling_price')
            ->get();

        return view('backend.product.index', compact('products'));
    }

    function editOrCreate($id = null)
    {
        $categories = Category::where('status', true)->select('id', 'title')->get();
        if ($id) {
            $product = Product::findOrFail($id);
            $units = Constant::UNIT_TYPE;

            return view('backend.product.edit', compact('categories','product', 'units'));
        } else {
            return view('backend.product.create', compact('categories'));
        }
    }


    function store(ProductStoreReq $request)
    {
        $featured_img = $this->uploadImg($request->featured_img, 'products');
        $galleryImages = $this->uploadImg($request->gall_image, 'products') ?? [];

        try {
            $product = $this->storeProduct($request, $featured_img, $galleryImages);
            return to_route('admin.product.index');
        } catch (\Throwable $e) {
            Log::error('Product store issue', ['exception' => $e]);

            return back()->withInput()->with('error', 'Unable to save the product.');
        }
    }

    function update(ProductStoreReq $request, $id)
    {
        $product = Product::findOrFail($id);

        $featuredImage = $request->hasFile('featured_img')
            ? $this->uploadImg($request->file('featured_img'), 'products')
            : $product->image;

        $galleryImages = $this->galleryImages($product);
        if ($request->hasFile('gall_image')) {
            $galleryImages = array_merge(
                $galleryImages,
                $this->uploadImg($request->file('gall_image'), 'products')
            );
        }

        $product->update($this->productData($request, $featuredImage, $galleryImages));

        return to_route('admin.product.index')->with('success', 'Product updated successfully.');
    }


    function destroy($id)
    {

        Product::findOrFail($id)->delete();
        return back()->with('success', 'Product deleted successfully.');
    }

    function removeImage(Request $request, $id)
    {
        $request->validate(['image' => ['required', 'string']]);

        $product = Product::findOrFail($id);
        $image = $request->input('image');

        if ($request->input('type') === 'featured' && $image === $product->image) {
            $product->update(['image' => null]);
        } else {
            $galleryImages = $this->galleryImages($product);

            if (! in_array($image, $galleryImages, true)) {
                abort(404);
            }

            $product->update([
                'gall_images' => json_encode(array_values(array_filter(
                    $galleryImages,
                    fn ($galleryImage) => $galleryImage !== $image
                ))),
            ]);
        }

        Storage::disk('public')->delete($image);

        return back()->with('success', 'Image removed successfully.');
    }


    private function storeProduct($request, $featured_img, $galleryImages)
    {
        return Product::create($this->productData($request, $featured_img, $galleryImages));
    }

    private function productData(Request $request, $featuredImage, array $galleryImages): array
    {
        return [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'image' => $featuredImage,
            'gall_images' => json_encode($galleryImages),
            'stock' => $request->stock,
            'price' => $request->price,
            'selling_price' => $request->selling_price ?? 0,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'origin' => $request->origin,
            'sku' => $request->sku,
            'expiry_date' => $request->expiry_date,
            'units' => $request->unit_type ?? 'GRAM',
            'featured' => $request->boolean('featured'),
            'status' => $request->boolean('status'),
        ];
    }

    private function galleryImages(Product $product): array
    {
        $galleryImages = $product->gall_images;

        if (is_string($galleryImages)) {
            $galleryImages = json_decode($galleryImages, true);
        }

        return is_array($galleryImages) ? $galleryImages : [];
    }
}
