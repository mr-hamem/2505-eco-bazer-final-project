<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['title' => 'Meat & Fish', 'slug' => 'protein', 'img' => null, 'details' => null, 'featured' => true, 'status' => true],
            ['title' => 'Vegetable', 'slug' => 'veg', 'img' => null, 'details' => null, 'featured' => true, 'status' => true],
            ['title' => 'Fruits', 'slug' => 'vitamin', 'img' => null, 'details' => null, 'featured' => false, 'status' => true],
            ['title' => 'Flavourings', 'slug' => 'taste', 'img' => null, 'details' => null, 'featured' => false, 'status' => true],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(['title' => $category['title']], $category);
        }
    }
}
