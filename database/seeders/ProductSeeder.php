<?php

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
        $requiredCategories = [
            'Fresh Vegetables',
            'Fresh Fruits',
            'Meat & Fish',
            'Dairy & Eggs',
            'Bakery & Snacks',
            'Beverages',
            'Spices & Seasonings',
            'Cooking Oil & Ghee',
            'Grains & Rice',
            'Pulses & Beans',
        ];

        foreach ($requiredCategories as $title) {
            Category::updateOrCreate(
                ['title' => $title],
                ['slug' => str($title)->slug()->toString(), 'status' => true]
            );
        }

        $categoryIds = Category::pluck('id', 'title');

        $shortDesc = 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum.';

        $products = [
            // --- VEGETABLES ---
            [
                'title' => 'Potato', 'category_id' => $categoryIds['Fresh Vegetables'] ?? null,
                'image' => 'uploads/products/RMDwKwwyFjnwg5JdILynXOShBG3hQOboDG7ayIyX.png', 'gall_images' => '[]',
                'stock' => 100, 'price' => 30, 'selling_price' => 24.98,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '9879897', 'expiry_date' => '2026-08-05', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Cabbage', 'category_id' => $categoryIds['Fresh Vegetables'] ?? null,
                'image' => 'uploads/products/68przgtuOEbnmuQ5D5rvGKng3MVHIAqbDtTURW2g.png', 'gall_images' => '[]',
                'stock' => 67, 'price' => 65, 'selling_price' => 55,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '65768776', 'expiry_date' => '2026-08-08', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Red Tomato', 'category_id' => $categoryIds['Fresh Vegetables'] ?? null,
                'image' => 'uploads/products/tomato.png', 'gall_images' => '[]',
                'stock' => 120, 'price' => 80, 'selling_price' => 70,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '3216549', 'expiry_date' => '2026-08-15', 'units' => 'KG', 'featured' => true, 'status' => true,
            ],
            [
                'title' => 'Carrot', 'category_id' => $categoryIds['Fresh Vegetables'] ?? null,
                'image' => 'uploads/products/carrot.png', 'gall_images' => '[]',
                'stock' => 85, 'price' => 90, 'selling_price' => 80,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '4567891', 'expiry_date' => '2026-08-20', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Green Capsicum', 'category_id' => $categoryIds['Fresh Vegetables'] ?? null,
                'image' => 'uploads/products/capsicum.png', 'gall_images' => '[]',
                'stock' => 40, 'price' => 180, 'selling_price' => 160,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '7891234', 'expiry_date' => '2026-08-12', 'units' => 'KG', 'featured' => true, 'status' => true,
            ],
            [
                'title' => 'Onion Red', 'category_id' => $categoryIds['Fresh Vegetables'] ?? null,
                'image' => 'uploads/products/onion.png', 'gall_images' => '[]',
                'stock' => 300, 'price' => 110, 'selling_price' => 95,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'India',
                'sku' => '8529631', 'expiry_date' => '2026-09-30', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Fresh Cucumber', 'category_id' => $categoryIds['Fresh Vegetables'] ?? null,
                'image' => 'uploads/products/cucumber.png', 'gall_images' => '[]',
                'stock' => 95, 'price' => 50, 'selling_price' => 40,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '7418529', 'expiry_date' => '2026-08-10', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],

            // --- FRUITS ---
            [
                'title' => 'Green Apple', 'category_id' => $categoryIds['Fresh Fruits'] ?? null,
                'image' => 'uploads/products/vshI9JO12YzLQzbZm1Y80LVmL0MfyGhEvm3mO1R0.png', 'gall_images' => '[]',
                'stock' => 100, 'price' => 220, 'selling_price' => 180,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'India',
                'sku' => '1287634', 'expiry_date' => '2026-08-31', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Malta', 'category_id' => $categoryIds['Fresh Fruits'] ?? null,
                'image' => 'uploads/products/xft5J7gFAJ6v68ewvISh4rLVtqRV22KO2EvkvT1M.png', 'gall_images' => '[]',
                'stock' => 50, 'price' => 340, 'selling_price' => 300,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'India',
                'sku' => '76875784', 'expiry_date' => '2026-08-26', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Red Apple Fuji', 'category_id' => $categoryIds['Fresh Fruits'] ?? null,
                'image' => 'uploads/products/red_apple.png', 'gall_images' => '[]',
                'stock' => 150, 'price' => 280, 'selling_price' => 250,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'China',
                'sku' => '9632587', 'expiry_date' => '2026-09-10', 'units' => 'KG', 'featured' => true, 'status' => true,
            ],
            [
                'title' => 'Ripe Banana Sagor', 'category_id' => $categoryIds['Fresh Fruits'] ?? null,
                'image' => 'uploads/products/banana.png', 'gall_images' => '[]',
                'stock' => 200, 'price' => 100, 'selling_price' => 90,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '1472583', 'expiry_date' => '2026-08-09', 'units' => 'DOZEN', 'featured' => true, 'status' => true,
            ],
            [
                'title' => 'Fresh Pomegranate', 'category_id' => $categoryIds['Fresh Fruits'] ?? null,
                'image' => 'uploads/products/pomegranate.png', 'gall_images' => '[]',
                'stock' => 60, 'price' => 450, 'selling_price' => 400,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'India',
                'sku' => '3692581', 'expiry_date' => '2026-08-28', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Green Lemon', 'category_id' => $categoryIds['Fresh Fruits'] ?? null,
                'image' => 'uploads/products/lemon.png', 'gall_images' => '[]',
                'stock' => 300, 'price' => 40, 'selling_price' => 30,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '2581473', 'expiry_date' => '2026-08-18', 'units' => 'PEICE', 'featured' => false, 'status' => true,
            ],

            // --- MEAT & FISH ---
            [
                'title' => 'Beef Bone-in', 'category_id' => $categoryIds['Meat & Fish'] ?? null,
                'image' => 'uploads/products/ePX1RPYJZZxQvmkiJvGfrWS64rY55mIv9M09RY7f.png', 'gall_images' => '[]',
                'stock' => 499, 'price' => 1000, 'selling_price' => 800,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '67567948', 'expiry_date' => '2026-08-05', 'units' => 'KG', 'featured' => true, 'status' => true,
            ],
            [
                'title' => 'Broiler Chicken Skinless', 'category_id' => $categoryIds['Meat & Fish'] ?? null,
                'image' => 'uploads/products/chicken.png', 'gall_images' => '[]',
                'stock' => 180, 'price' => 220, 'selling_price' => 195,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '1593572', 'expiry_date' => '2026-08-06', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Fresh Hilsa Fish (800g+)', 'category_id' => $categoryIds['Meat & Fish'] ?? null,
                'image' => 'uploads/products/hilsa.png', 'gall_images' => '[]',
                'stock' => 35, 'price' => 1600, 'selling_price' => 1450,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '7539514', 'expiry_date' => '2026-08-07', 'units' => 'KG', 'featured' => true, 'status' => true,
            ],
            [
                'title' => 'Rui Fish Cleaned', 'category_id' => $categoryIds['Meat & Fish'] ?? null,
                'image' => 'uploads/products/rui.png', 'gall_images' => '[]',
                'stock' => 70, 'price' => 420, 'selling_price' => 380,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '9517536', 'expiry_date' => '2026-08-07', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Prawn Medium Size', 'category_id' => $categoryIds['Meat & Fish'] ?? null,
                'image' => 'uploads/products/prawn.png', 'gall_images' => '[]',
                'stock' => 50, 'price' => 850, 'selling_price' => 780,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '8521479', 'expiry_date' => '2026-08-06', 'units' => 'KG', 'featured' => true, 'status' => true,
            ],

            // --- SPICES & SEASONINGS ---
            [
                'title' => 'Chicken Tanduri Masala', 'category_id' => $categoryIds['Spices & Seasonings'] ?? null,
                'image' => 'uploads/products/7EFV1KH7fRh5yCVz7L4r586N9mfbfYWHzeFjZSwR.jpg', 'gall_images' => '[]',
                'stock' => 200, 'price' => 60, 'selling_price' => 55,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Radhuni',
                'sku' => '232524542', 'expiry_date' => '2026-12-03', 'units' => 'PEICE', 'featured' => true, 'status' => true,
            ],
            [
                'title' => 'Turmeric Powder 200g', 'category_id' => $categoryIds['Spices & Seasonings'] ?? null,
                'image' => 'uploads/products/turmeric.png', 'gall_images' => '[]',
                'stock' => 150, 'price' => 95, 'selling_price' => 88,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'BD Food',
                'sku' => '3571598', 'expiry_date' => '2027-01-15', 'units' => 'PEICE', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Red Chili Powder 200g', 'category_id' => $categoryIds['Spices & Seasonings'] ?? null,
                'image' => 'uploads/products/chili_powder.png', 'gall_images' => '[]',
                'stock' => 140, 'price' => 110, 'selling_price' => 100,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Radhuni',
                'sku' => '6543218', 'expiry_date' => '2027-02-10', 'units' => 'PEICE', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Cumin Powder (Jira) 100g', 'category_id' => $categoryIds['Spices & Seasonings'] ?? null,
                'image' => 'uploads/products/cumin.png', 'gall_images' => '[]',
                'stock' => 110, 'price' => 130, 'selling_price' => 120,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Pran',
                'sku' => '9871236', 'expiry_date' => '2027-03-20', 'units' => 'PEICE', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Mustard Oil 1 Liter', 'category_id' => $categoryIds['Cooking Oil & Ghee'] ?? null,
                'image' => 'uploads/products/mustard_oil.png', 'gall_images' => '[]',
                'stock' => 80, 'price' => 310, 'selling_price' => 290,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Rupchanda',
                'sku' => '4561238', 'expiry_date' => '2027-05-10', 'units' => 'LITER', 'featured' => true, 'status' => true,
            ],

            // --- DAIRY & EGGS ---
            [
                'title' => 'Farm Fresh Milk 1L', 'category_id' => $categoryIds['Dairy & Eggs'] ?? null,
                'image' => 'uploads/products/milk.png', 'gall_images' => '[]',
                'stock' => 100, 'price' => 90, 'selling_price' => 85,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Aarong Dairy',
                'sku' => '1239874', 'expiry_date' => '2026-08-10', 'units' => 'LITER', 'featured' => true, 'status' => true,
            ],
            [
                'title' => 'Brown Chicken Eggs', 'category_id' => $categoryIds['Dairy & Eggs'] ?? null,
                'image' => 'uploads/products/eggs.png', 'gall_images' => '[]',
                'stock' => 250, 'price' => 155, 'selling_price' => 145,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '7896541', 'expiry_date' => '2026-08-22', 'units' => 'DOZEN', 'featured' => true, 'status' => true,
            ],
            [
                'title' => 'Salted Butter 200g', 'category_id' => $categoryIds['Dairy & Eggs'] ?? null,
                'image' => 'uploads/products/butter.png', 'gall_images' => '[]',
                'stock' => 60, 'price' => 240, 'selling_price' => 220,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Amul',
                'sku' => '3219876', 'expiry_date' => '2026-11-15', 'units' => 'PEICE', 'featured' => false, 'status' => true,
            ],

            // --- BEVERAGES ---
            [
                'title' => 'Green Tea 50 Bags', 'category_id' => $categoryIds['Beverages'] ?? null,
                'image' => 'uploads/products/green_tea.png', 'gall_images' => '[]',
                'stock' => 90, 'price' => 210, 'selling_price' => 190,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Ispahani',
                'sku' => '1597532', 'expiry_date' => '2027-06-30', 'units' => 'PEICE', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Instant Coffee Jar 100g', 'category_id' => $categoryIds['Beverages'] ?? null,
                'image' => 'uploads/products/coffee.png', 'gall_images' => '[]',
                'stock' => 70, 'price' => 480, 'selling_price' => 440,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Nescafe',
                'sku' => '7531598', 'expiry_date' => '2027-08-15', 'units' => 'PEICE', 'featured' => true, 'status' => true,
            ],
            [
                'title' => 'Orange Juice 1L', 'category_id' => $categoryIds['Beverages'] ?? null,
                'image' => 'uploads/products/orange_juice.png', 'gall_images' => '[]',
                'stock' => 85, 'price' => 260, 'selling_price' => 235,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Pran Frooto',
                'sku' => '8523697', 'expiry_date' => '2026-12-20', 'units' => 'LITER', 'featured' => false, 'status' => true,
            ],

            // --- BAKERY & SNACKS ---
            [
                'title' => 'Whole Wheat Bread 400g', 'category_id' => $categoryIds['Bakery & Snacks'] ?? null,
                'image' => 'uploads/products/bread.png', 'gall_images' => '[]',
                'stock' => 50, 'price' => 60, 'selling_price' => 55,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Wonder',
                'sku' => '9638521', 'expiry_date' => '2026-08-08', 'units' => 'PEICE', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Marie Biscuits 200g', 'category_id' => $categoryIds['Bakery & Snacks'] ?? null,
                'image' => 'uploads/products/biscuits.png', 'gall_images' => '[]',
                'stock' => 130, 'price' => 45, 'selling_price' => 40,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Olympia',
                'sku' => '7412589', 'expiry_date' => '2027-01-10', 'units' => 'PEICE', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Chanachur Hot & Spicy 300g', 'category_id' => $categoryIds['Bakery & Snacks'] ?? null,
                'image' => 'uploads/products/chanachur.png', 'gall_images' => '[]',
                'stock' => 110, 'price' => 75, 'selling_price' => 70,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Ruchi',
                'sku' => '3698524', 'expiry_date' => '2026-12-15', 'units' => 'PEICE', 'featured' => false, 'status' => true,
            ],

            // --- MORE GROCERY ESSENTIALS ---
            [
                'title' => 'Miniket Rice 5KG', 'category_id' => $categoryIds['Grains & Rice'] ?? null,
                'image' => 'uploads/products/rice.png', 'gall_images' => '[]',
                'stock' => 100, 'price' => 380, 'selling_price' => 360,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '1234567', 'expiry_date' => '2027-08-01', 'units' => 'KG', 'featured' => true, 'status' => true,
            ],
            [
                'title' => 'Soyabean Oil 5L', 'category_id' => $categoryIds['Cooking Oil & Ghee'] ?? null,
                'image' => 'uploads/products/soyabean_oil.png', 'gall_images' => '[]',
                'stock' => 90, 'price' => 840, 'selling_price' => 810,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Teer',
                'sku' => '2345678', 'expiry_date' => '2027-07-15', 'units' => 'LITER', 'featured' => true, 'status' => true,
            ],
            [
                'title' => 'Red Lentils (Masoor Dal) 1KG', 'category_id' => $categoryIds['Pulses & Beans'] ?? null,
                'image' => 'uploads/products/dal.png', 'gall_images' => '[]',
                'stock' => 160, 'price' => 140, 'selling_price' => 130,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '3456789', 'expiry_date' => '2027-06-10', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Refined Sugar 1KG', 'category_id' => $categoryIds['Spices & Seasonings'] ?? null,
                'image' => 'uploads/products/sugar.png', 'gall_images' => '[]',
                'stock' => 200, 'price' => 135, 'selling_price' => 128,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Fresh',
                'sku' => '4567890', 'expiry_date' => '2027-09-01', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Iodized Salt 1KG', 'category_id' => $categoryIds['Spices & Seasonings'] ?? null,
                'image' => 'uploads/products/salt.png', 'gall_images' => '[]',
                'stock' => 250, 'price' => 42, 'selling_price' => 38,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'ACI',
                'sku' => '5678901', 'expiry_date' => '2028-01-01', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Garlic Native', 'category_id' => $categoryIds['Fresh Vegetables'] ?? null,
                'image' => 'uploads/products/garlic.png', 'gall_images' => '[]',
                'stock' => 110, 'price' => 220, 'selling_price' => 200,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '6789012', 'expiry_date' => '2026-09-15', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Ginger Fresh', 'category_id' => $categoryIds['Fresh Vegetables'] ?? null,
                'image' => 'uploads/products/ginger.png', 'gall_images' => '[]',
                'stock' => 85, 'price' => 260, 'selling_price' => 240,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'China',
                'sku' => '7890123', 'expiry_date' => '2026-09-10', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Green Chili', 'category_id' => $categoryIds['Fresh Vegetables'] ?? null,
                'image' => 'uploads/products/green_chili.png', 'gall_images' => '[]',
                'stock' => 75, 'price' => 160, 'selling_price' => 140,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '8901234', 'expiry_date' => '2026-08-12', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Fresh Cauliflower', 'category_id' => $categoryIds['Fresh Vegetables'] ?? null,
                'image' => 'uploads/products/cauliflower.png', 'gall_images' => '[]',
                'stock' => 50, 'price' => 70, 'selling_price' => 60,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '9012345', 'expiry_date' => '2026-08-10', 'units' => 'PEICE', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Sweet Papaya', 'category_id' => $categoryIds['Fresh Fruits'] ?? null,
                'image' => 'uploads/products/papaya.png', 'gall_images' => '[]',
                'stock' => 45, 'price' => 90, 'selling_price' => 80,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '0123456', 'expiry_date' => '2026-08-14', 'units' => 'KG', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Watermelon Medium', 'category_id' => $categoryIds['Fresh Fruits'] ?? null,
                'image' => 'uploads/products/watermelon.png', 'gall_images' => '[]',
                'stock' => 30, 'price' => 320, 'selling_price' => 280,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Bangladesh',
                'sku' => '1122334', 'expiry_date' => '2026-08-11', 'units' => 'PEICE', 'featured' => false, 'status' => true,
            ],
            [
                'title' => 'Ghee Pure Cow 500g', 'category_id' => $categoryIds['Cooking Oil & Ghee'] ?? null,
                'image' => 'uploads/products/ghee.png', 'gall_images' => '[]',
                'stock' => 40, 'price' => 750, 'selling_price' => 700,
                'short_description' => $shortDesc, 'description' => null, 'origin' => 'Aarong',
                'sku' => '2233445', 'expiry_date' => '2027-04-01', 'units' => 'PEICE', 'featured' => false, 'status' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['title' => $product['title']],
                array_merge($product, ['slug' => str($product['title'])->slug()->toString()])
            );
        }
    }
}
