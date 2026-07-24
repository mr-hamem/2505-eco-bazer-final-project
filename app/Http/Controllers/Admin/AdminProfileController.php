<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    function viewProfile()
    {
        return view('backend.profile.index');
    }

    function updateProfile(Request $request)
    {
        // Validation
        $request->validate([
            'profile_img' => 'nullable|mimes:jpg,jpeg,png,webp|max:5048', // kb,
            'name' => 'required|min:2',
        ]);


        // User Update
        $fileName = null;
        if ($request->hasFile('profile_img')) {
            // Previous Image exists
            // If exists Prev Delete
            if(Storage::disk('public')->exists(auth()->user()->profile_img)){
                Storage::disk('public')->delete(auth()->user()->profile_img);
            }


            $fileName  = $request->profile_img->store('profile', 'public');
        }


        // User DB Update

        $authUser = User::find(auth()->user()->id)->update([
            'name' => $request->name,
            'profile_img' => $fileName,
        ]);
        return back();
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required|string|current_password',
            'password' => 'required|string|min:8|confirmed',
        ]);


        $user = auth()->user();

        $user->password = Hash::make($request->password);

        $user->save();
        notify()
        ->success()
        ->title('⚡️ Laravel Notify is awesome!')
        ->send();

        return back()->with('success', 'Password updated successfully.');
    }
}
