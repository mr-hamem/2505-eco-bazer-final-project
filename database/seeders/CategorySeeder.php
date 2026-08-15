<?php
<<<<<<< HEAD
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;
=======

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
>>>>>>> 6d258fbfbb161f15e0e82e639949ed6995aa8310

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
<<<<<<< HEAD
            [
                'title' => 'Technology',
                'slug' => '',
                'img' => null,
                'details' => 'Latest technology news, gadgets, and reviews.',
                'featured' => true,
                'status' => true,
            ],
            [
                'title' => 'Lorem',
                'slug' => '',
                'img' => null,
                'details' => 'Latest technology news, gadgets, and reviews.',
                'featured' => false,
                'status' => true,
            ],
            
        ];

        foreach ($categories as $category) {
            Category::create([
                'title' => $category['title'],
                'slug' => Str::slug($category['title']),
                'img' => $category['img'],
                'details' => $category['details'],
                'featured' => $category['featured'],
                'status' => $category['status'],
            ]);
        }
    }
}
=======
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
>>>>>>> 6d258fbfbb161f15e0e82e639949ed6995aa8310
