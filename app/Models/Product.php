<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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
    ];
}
