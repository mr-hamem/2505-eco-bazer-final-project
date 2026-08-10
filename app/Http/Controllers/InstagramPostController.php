<?php

namespace App\Http\Controllers;

use App\Models\InstagramPost;
use Illuminate\Http\Request;

class InstagramPostController extends Controller
{
    public function index()
    {
        $posts = InstagramPost::orderBy('sort_order')->get();

        return view('backend.instagram.index', compact('posts'));
    }

    public function create()
    {
        return view('backend.instagram.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'instagram_url' => [
                'required',
                'url',
                'regex:/^https?:\/\/(www\.)?instagram\.com\/(p|reel)\/.+/i',
            ],
        ]);

        InstagramPost::create([
            'instagram_url' => $request->instagram_url,
            'image_url' => $request->image_url,
            'sort_order' => $request->sort_order ?? (InstagramPost::max('sort_order') + 1),
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()
            ->route('admin.instagram.home')
            ->with('success', 'Instagram post added successfully.');
    }

    public function destroy(InstagramPost $instagramPost)
    {
        $instagramPost->delete();

        return redirect()
            ->route('admin.instagram.home')
            ->with('success', 'Instagram post deleted successfully.');
    }
}