<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Fetch Category IDs
        $burgerCat = Category::where('slug', 'burgers')->first()->id;
        $submarineCat = Category::where('slug', 'submarines')->first()->id;
        $riceCat = Category::where('slug', 'rice-biriyani')->first()->id;
        $indianCat = Category::where('slug', 'indian-corner')->first()->id;
        $bevCat = Category::where('slug', 'beverages')->first()->id;

        // 2. Define Products with respective Category IDs
        $products = [
            // Burgers
            ['category_id' => $burgerCat, 'name' => 'Vegetable Burger', 'price' => 780.00],
            ['category_id' => $burgerCat, 'name' => 'Chicken Burger', 'price' => 980.00],
            ['category_id' => $burgerCat, 'name' => 'Beef Burger', 'price' => 1380.00],
            ['category_id' => $burgerCat, 'name' => 'Crispy Fish Burger', 'price' => 1380.00],
            ['category_id' => $burgerCat, 'name' => 'My Burger Special', 'price' => 1420.00],

            // Submarines
            ['category_id' => $submarineCat, 'name' => 'Vegetable Submarine', 'price' => 920.00],
            ['category_id' => $submarineCat, 'name' => 'Chicken Submarine', 'price' => 1260.00],
            ['category_id' => $submarineCat, 'name' => 'Beef Submarine', 'price' => 1430.00],
            ['category_id' => $submarineCat, 'name' => 'Tuna Submarine', 'price' => 1660.00],

            // Rice & Biriyani
            ['category_id' => $riceCat, 'name' => 'Chicken Fried Rice', 'price' => 1120.00],
            ['category_id' => $riceCat, 'name' => 'Chicken Dum Biriyani', 'price' => 1580.00],
            ['category_id' => $riceCat, 'name' => 'Nasi Goreng', 'price' => 1550.00],
            ['category_id' => $riceCat, 'name' => 'Mixed Fried Rice', 'price' => 1440.00],

            // Indian Corner
            ['category_id' => $indianCat, 'name' => 'Butter Naan', 'price' => 290.00],
            ['category_id' => $indianCat, 'name' => 'Chicken Tikka Masala', 'price' => 1590.00],
            ['category_id' => $indianCat, 'name' => 'Paneer Butter Masala', 'price' => 1380.00],
            ['category_id' => $indianCat, 'name' => 'Tandoori Chicken (Half)', 'price' => 1650.00],

            // Beverages
            ['category_id' => $bevCat, 'name' => 'Lime Juice', 'price' => 550.00],
            ['category_id' => $bevCat, 'name' => 'Blue Lagoon Mojito', 'price' => 780.00],
            ['category_id' => $bevCat, 'name' => 'Chocolate Milkshake', 'price' => 690.00],
            ['category_id' => $bevCat, 'name' => 'Iced Coffee', 'price' => 680.00],
        ];

        // 3. Insert Products
        foreach ($products as $item) {
            Product::create([
                'name' => $item['name'],
                'category_id' => $item['category_id'],
                'price' => $item['price'],
                'description' => 'Delicious ' . strtolower($item['name']) . ' from our kitchen.',
                'status' => 'active',
                'image' => null,
            ]);
        }
    }
}
