<?php
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