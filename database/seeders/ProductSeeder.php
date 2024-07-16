<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ["type" => "Food", "status" => true],
            ["type" => "Banana", "status" => true],
            ["type" => "Shoes", "status" => true],
            ["type" => "Dresses", "status" => true],
            ["type" => "Handbags", "status" => true],
            ["type" => "Books", "status" => true],
            ["type" => "Cosmetics", "status" => true],
            ["type" => "Kitchenware", "status" => true],
            ["type" => "Stationery", "status" => true]
        ];

        $images = [
            '2024071604265226.webp',
            '2024071604515551.webp',
            '2024071604505450.webp',
            '2024071604385238.webp',
            '2024071604265226.webp',
            '2024071604115211.webp',
            '2024071604115211.webp',
            '2024071604515551.webp',
            '2024071604515551.webp',
            '2024071604505450.webp',
            
        ];

        foreach ($categories as $categoryData) {
            // Create category
            $category = Category::create($categoryData);

            // Create products for the created category
            for ($i = 1; $i <= 10; $i++) {
                Product::create([
                    'category_id' => $category->id,
                    'name' => 'Product ' . $i,
                    'image' => $images[($i - 1) % count($images)],
                    'weight' => 1.5 + $i,
                    'stock' => 10 + $i,
                    'price' => 20.99 + $i,
                    'discount' => $i % 2 == 0 ? null : $i * 2,
                    'discounted_price' => $i % 2 == 0 ? null : 20.99 + $i - ($i * 2),
                    'time' => now()->addDays($i),
                    'description' => 'This is product ' . $i . ' description.',
                    'product_information' => 'Product ' . $i . ' information.',
                    'status' => rand(0, 2),
                ]);
            }
        }
    }
}
