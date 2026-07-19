<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreReq;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view('backend.product.index');
    }


    function create(){
        $categories = Category::where('status', true)->select('id','title')->get();
        
        return view('backend.product.create', compact('categories'));
    }



    function store(ProductStoreReq $request){

        // Image upload
        if($request->hasFile('featured_img')){
            // *Server save
            $request->featured_img->store('products' , 'public');
        }


        // Multiple Images
        $gallImageUrl = [];
        if(count($request->gall_image) > 0){
            foreach($request->gall_image as $gallImg){
                $gallImageUrl[] =  $gallImg->store('products', 'public');
            }
        }
        dd($gallImageUrl);



      dd($request->all());
    }
}
