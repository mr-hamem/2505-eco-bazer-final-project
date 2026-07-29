<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
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