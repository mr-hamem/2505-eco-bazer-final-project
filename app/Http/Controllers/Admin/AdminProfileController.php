<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProfileController extends Controller
{
    //
}

 function updateProfile(Request $request)
{
    $request->validate([
        'profile_img' => 'nullable|mimes:jpg,jpeg,png,webp|max:5048',
        'name' => 'required|min:2',
    ]);

    $fileName = auth()->user()->profile_img;

    if ($request->hasFile('profile_img')) {

        if (
            auth()->user()->profile_img &&
            Storage::disk('public')->exists(auth()->user()->profile_img)
        ) {
            Storage::disk('public')->delete(auth()->user()->profile_img);
        }

        $fileName = $request->file('profile_img')->store('profile', 'public');
    }

    User::find(auth()->id())->update([
        'name' => $request->name,
        'profile_img' => $fileName,
    ]);

    return back()->with('success', 'Profile updated successfully.');
}