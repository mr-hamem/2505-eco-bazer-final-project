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
    if ($image && \Illuminate\Support\Facades\Storage::disk('public')->exists($image)) {
        return asset('storage/' . $image);
    }

    return asset('placeholder.png');
}
