<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "title",
        "category_id",
        "image",
        "gall_images",
        "stock",
        "price",
        "selling_price",
        "short_description",
        "description",
        "origin",
        "sku",
        "expiry_date",
        "units",
        "featured",
        "status",
    ];


    function category() {
        return $this->belongsTo(Category::class);
    }


    function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
