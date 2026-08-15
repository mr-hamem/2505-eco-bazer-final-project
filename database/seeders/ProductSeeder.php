<?php
<<<<<<< HEAD
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'title' => 'First Sample Title',
                'slug' => Str::slug('First Sample Title'),
                'image' => null,
                'category_id' => 1,
                'description' => 'lorem50',
                'featured' => true,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Sample Title',
                'category_id' => 1,
                'slug' => Str::slug('Second Sample Title'),
                'image' => null,
                'description' => 'lorem50',
                'featured' => false,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
=======

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryIds = Category::whereIn('title', ['Meat & Fish', 'Vegetable', 'Fruits', 'Flavourings'])
            ->pluck('id', 'title');

        $products = [
            [
                'title' => 'Potato', 'category_id' => $categoryIds['Vegetable'],
                'image' => 'products/RMDwKwwyFjnwg5JdILynXOShBG3hQOboDG7ayIyX.png', 'gall_images' => '[]',
                'stock' => 100, 'price' => 30, 'selling_price' => 24.98,
                'short_description' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla varius magna a consequat pulvinar.',
                'description' => null, 'origin' => 'Bangladesh', 'sku' => '9879897', 'expiry_date' => '2026-08-05',
                'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Beef', 'category_id' => $categoryIds['Meat & Fish'],
                'image' => 'products/ePX1RPYJZZxQvmkiJvGfrWS64rY55mIv9M09RY7f.png', 'gall_images' => '[]',
                'stock' => 499, 'price' => 1000, 'selling_price' => 800,
                'short_description' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla varius magna a consequat pulvinar.',
                'description' => null, 'origin' => 'Bangladesh', 'sku' => '67567948', 'expiry_date' => '2026-08-05',
                'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Green Apple', 'category_id' => $categoryIds['Fruits'],
                'image' => 'products/vshI9JO12YzLQzbZm1Y80LVmL0MfyGhEvm3mO1R0.png', 'gall_images' => '[]',
                'stock' => 100, 'price' => 220, 'selling_price' => 180,
                'short_description' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla varius magna a consequat pulvinar.',
                'description' => null, 'origin' => 'India', 'sku' => null, 'expiry_date' => '2026-08-31',
                'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Chicken Tanduri Masala', 'category_id' => $categoryIds['Flavourings'],
                'image' => 'products/7EFV1KH7fRh5yCVz7L4r586N9mfbfYWHzeFjZSwR.jpg', 'gall_images' => '[]',
                'stock' => 200, 'price' => 60, 'selling_price' => 55,
                'short_description' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla varius magna a consequat pulvinar.',
                'description' => null, 'origin' => 'Radhuni', 'sku' => '232524542', 'expiry_date' => '2026-12-03',
                'units' => 'PEICE', 'featured' => true, 'status' => true,
            ],
            [
                'title' => 'Cabbage', 'category_id' => $categoryIds['Vegetable'],
                'image' => 'products/68przgtuOEbnmuQ5D5rvGKng3MVHIAqbDtTURW2g.png', 'gall_images' => '[]',
                'stock' => 67, 'price' => 65, 'selling_price' => 55,
                'short_description' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla varius magna a consequat pulvinar.',
                'description' => null, 'origin' => 'Bangladesh', 'sku' => '65768776', 'expiry_date' => '2026-08-08',
                'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Malta', 'category_id' => $categoryIds['Fruits'],
                'image' => 'products/xft5J7gFAJ6v68ewvISh4rLVtqRV22KO2EvkvT1M.png', 'gall_images' => '[]',
                'stock' => 50, 'price' => 340, 'selling_price' => 300,
                'short_description' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla varius magna a consequat pulvinar.',
                'description' => null, 'origin' => 'India', 'sku' => '76875784', 'expiry_date' => '2026-08-26',
                'units' => 'KG', 'featured' => false, 'status' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(['title' => $product['title']], $product);
        }
    }
}
>>>>>>> 6d258fbfbb161f15e0e82e639949ed6995aa8310
