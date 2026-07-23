<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SingleProductController extends Controller
{
    public function show()
    {
        return view('backend.singleproduct');
    }

    public function removeImage(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $imageToRemove = $request->image_path;

        // গ্যালারি ইমেজ প্রসেস করা (JSON or Array check)
        $galleryImages = is_string($product->gall_images) 
            ? json_decode($product->gall_images, true) 
            : $product->gall_images;

        if (is_array($galleryImages) && in_array($imageToRemove, $galleryImages)) {
            // ১. Storage ফোল্ডার থেকে ফাইলটি মুছে ফেলা
            if (Storage::disk('public')->exists($imageToRemove)) {
                Storage::disk('public')->delete($imageToRemove);
            }

            // ২. Array থেকে নির্দিষ্ট ইমেজের পাথটি বাদ দেওয়া
            $updatedImages = array_values(array_filter($galleryImages, function ($img) use ($imageToRemove) {
                return $img !== $imageToRemove;
            }));

            // ৩. ডাটাবেজে আপডেট সেভ করা (array কে আবার JSON এ কনভার্ট করে সেভ করা)
            $product->gall_images = json_encode($updatedImages);
            $product->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Image removed successfully!'
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Image not found in gallery!'
        ], 404);
    }
}