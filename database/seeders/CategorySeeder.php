<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'title' => 'Fresh Vegetables',
                'slug' => 'fresh-vegetables',
                'img' => 'seederUps/veg.png',
                'details' => 'Fresh vegetables delivered daily from farm to home',
            [
                'title' => 'Technology',
                'slug' => '',
                'img' => null,
                'details' => 'Latest technology news, gadgets, and reviews.',
                'featured' => true,
                'status' => true,
            ],
            [
                'title' => 'Fresh Fruits',
                'slug' => 'fresh-fruits',
                'img' => 'seederUps/fruit.png',
                'details' => 'Premium quality seasonal fresh fruits',
                'featured' => true,
                'status' => true,
            ],
            [
                'title' => 'Meat & Fish',
                'slug' => 'meat-and-fish',
                'img' => 'seederUps/meat.png',
                'details' => 'Fresh meat, chicken, and organic fish',
                'featured' => true,
                'status' => true,
            ],
            [
                'title' => 'Dairy & Eggs',
                'slug' => 'dairy-and-eggs',
                'img' => 'seederUps/apple.png',
                'details' => 'Fresh milk, farm eggs, butter, and cheese',
                'featured' => true,
                'status' => true,
            ],
            [
                'title' => 'Bakery & Snacks',
                'slug' => 'bakery-and-snacks',
                'img' => 'seederUps/big-potato.png',
                'details' => 'Freshly baked bread, biscuits, and crispy snacks',
                'featured' => false,
                'status' => true,
            ],
            [
                'title' => 'Beverages',
                'slug' => 'beverages',
                'img' => 'seederUps/malta.png',
                'details' => 'Refreshing juices, tea, coffee, and soft drinks',
                'featured' => false,
                'status' => true,
            ],
            [
                'title' => 'Organic Products',
                'slug' => 'organic-products',
                'img' => 'seederUps/lettuce.png',
                'details' => '100% certified natural and organic items',
                'featured' => true,
                'status' => true,
            ],
            [
                'title' => 'Spices & Seasonings',
                'slug' => 'spices-and-seasonings',
                'img' => 'seederUps/green-chili.png',
                'details' => 'Authentic spices, powders, and pure seasonings',
                'featured' => false,
                'status' => true,
            ],
            [
                'title' => 'Cooking Oil & Ghee',
                'slug' => 'cooking-oil-and-ghee',
                'img' => 'seederUps/tomato.png',
                'details' => 'Pure mustard oil, soyabean oil, and cow ghee',
                'featured' => true,
                'status' => true,
            ],
            [
                'title' => 'Grains & Rice',
                'slug' => 'grains-and-rice',
                'img' => 'seederUps/cabbage.png',
                'details' => 'Premium quality rice, wheat flour, and grains',
                'featured' => false,
                'status' => true,
            ],
            [
                'title' => 'Pulses & Beans',
                'slug' => 'pulses-and-beans',
                'img' => 'seederUps/eggplant.png',
                'details' => 'High quality lentils, pulses, and healthy beans',
                'featured' => false,
                'status' => true,
            ],
            [
                'title' => 'Nuts & Dry Fruits',
                'slug' => 'nuts-and-dry-fruits',
                'img' => 'seederUps/plant.png',
                'details' => 'Nutritious almonds, cashews, dates, and dry fruits',
                'featured' => true,
                'status' => true,
            ],
            [
                'title' => 'Frozen Foods',
                'slug' => 'frozen-foods',
                'img' => 'seederUps/cauliflower.png',
                'details' => 'Frozen snacks, parathas, and ready meals',
                'featured' => false,
                'status' => true,
            ],
            [
                'title' => 'Instant & Ready Food',
                'slug' => 'instant-and-ready-food',
                'img' => 'seederUps/product-1.png',
                'details' => 'Quick noodles, instant soup, and ready to eat meals',
                'featured' => false,
                'status' => true,
            ],
            [
                'title' => 'Personal Care',
                'slug' => 'personal-care',
                'img' => 'seederUps/product-1.png',
                'details' => 'Soaps, shampoos, oral care, and skin essentials',
                'featured' => false,
                'status' => true,
            ],
            [
                'title' => 'Home & Cleaning',
                'slug' => 'home-and-cleaning',
                'img' => 'seederUps/product-1.png',
                'details' => 'Detergents, surface cleaners, and kitchen supplies',
                'featured' => false,
                'status' => true,
            ],
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
            ['title' => 'Meat & Fish', 'slug' => 'protein', 'img' => null, 'details' => null, 'featured' => true, 'status' => true],
            ['title' => 'Vegetable', 'slug' => 'veg', 'img' => null, 'details' => null, 'featured' => true, 'status' => true],
            ['title' => 'Fruits', 'slug' => 'vitamin', 'img' => null, 'details' => null, 'featured' => false, 'status' => true],
            ['title' => 'Flavourings', 'slug' => 'taste', 'img' => null, 'details' => null, 'featured' => false, 'status' => true],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
