<?php

function getProfileImg()
{
    return auth()->user()->profile_img ? asset('storage/' . auth()->user()->profile_img) : env('PROFILE_API') . auth()->user()->name;
}


function activeLink($route, $activeClass = 'active')
{
    return request()->routeIs($route) ? $activeClass : '';
}


function getImage($image = null){
    if ($image) {
        if (str_starts_with($image, 'uploads/')) {
            if (\Illuminate\Support\Facades\File::exists(public_path($image))) {
                return asset($image);
            }
        } elseif (\Illuminate\Support\Facades\Storage::disk('public')->exists($image)) {
            return asset('storage/' . $image);
        }
    }

    return asset('placeholder.png');
}
