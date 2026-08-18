<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['title' => 'Fresh Vegetables', 'img' => 'seederUps/veg.png', 'details' => 'Fresh vegetables delivered daily from farm to home', 'featured' => true, 'status' => true],
            ['title' => 'Fresh Fruits', 'img' => 'seederUps/fruit.png', 'details' => 'Premium quality seasonal fresh fruits', 'featured' => true, 'status' => true],
            ['title' => 'Meat & Fish', 'img' => 'seederUps/meat.png', 'details' => 'Fresh meat, chicken, and organic fish', 'featured' => true, 'status' => true],
            ['title' => 'Dairy & Eggs', 'img' => 'seederUps/apple.png', 'details' => 'Fresh milk, farm eggs, butter, and cheese', 'featured' => true, 'status' => true],
            ['title' => 'Bakery & Snacks', 'img' => 'seederUps/big-potato.png', 'details' => 'Freshly baked bread, biscuits, and crispy snacks', 'featured' => false, 'status' => true],
            ['title' => 'Beverages', 'img' => 'seederUps/malta.png', 'details' => 'Refreshing juices, tea, coffee, and soft drinks', 'featured' => false, 'status' => true],
            ['title' => 'Spices & Seasonings', 'img' => 'seederUps/green-chili.png', 'details' => 'Authentic spices, powders, and pure seasonings', 'featured' => false, 'status' => true],
            ['title' => 'Cooking Oil & Ghee', 'img' => 'seederUps/tomato.png', 'details' => 'Pure mustard oil, soyabean oil, and cow ghee', 'featured' => true, 'status' => true],
            ['title' => 'Grains & Rice', 'img' => 'seederUps/cabbage.png', 'details' => 'Premium quality rice, wheat flour, and grains', 'featured' => false, 'status' => true],
            ['title' => 'Pulses & Beans', 'img' => 'seederUps/eggplant.png', 'details' => 'High quality lentils, pulses, and healthy beans', 'featured' => false, 'status' => true],
            ['title' => 'Organic Products', 'img' => 'seederUps/lettuce.png', 'details' => '100% certified natural and organic items', 'featured' => true, 'status' => true],
            ['title' => 'Nuts & Dry Fruits', 'img' => 'seederUps/plant.png', 'details' => 'Nutritious almonds, cashews, dates, and dry fruits', 'featured' => true, 'status' => true],
            ['title' => 'Frozen Foods', 'img' => 'seederUps/cauliflower.png', 'details' => 'Frozen snacks, parathas, and ready meals', 'featured' => false, 'status' => true],
            ['title' => 'Instant & Ready Food', 'img' => 'seederUps/product-1.png', 'details' => 'Quick noodles, instant soup, and ready to eat meals', 'featured' => false, 'status' => true],
            ['title' => 'Personal Care', 'img' => 'seederUps/product-1.png', 'details' => 'Soaps, shampoos, oral care, and skin essentials', 'featured' => false, 'status' => true],
            ['title' => 'Home & Cleaning', 'img' => 'seederUps/product-1.png', 'details' => 'Detergents, surface cleaners, and kitchen supplies', 'featured' => false, 'status' => true],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['title' => $category['title']],
                [
                    'slug' => Str::slug($category['title']),
                    'img' => $category['img'],
                    'details' => $category['details'],
                    'featured' => $category['featured'],
                    'status' => $category['status'],
                ]
            );
        }
    }
}