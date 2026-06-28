<?php

function getProfileImg(){
    return auth()->user()->profile_img ? asset('storage/' . auth()->user()->profile_img) : env('PROFILE_API') . auth()->user()->name;
}