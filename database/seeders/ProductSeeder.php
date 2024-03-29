<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array( 
                'name' =>  "Caramel Coffee with Chocolate",
                'price' => 1.9,
                'image' => "coffee_01",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Large Cold Coffee with Chocolate",
                'price' => 2.9,
                'image' => "coffee_02",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Large Cold Latte with Chocolate",
                'price' => 3.9,
                'image' => "coffee_03",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Large Cold Latte with Chocolate",
                'price' => 3.9,
                'image' => "coffee_04",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Large Cold Milkshake with Chocolate",
                'price' => 3.9,
                'image' => "coffee_05",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Small Hot Mocha Coffee",
                'price' => 1.9,
                'image' => "coffee_06",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Large Hot Mocha Coffee with Chocolate",
                'price' => 1.9,
                'image' => "coffee_07",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Large Hot Cappuccino Coffee",
                'price' => 1.9,
                'image' => "coffee_08",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Hot Mocha Coffee Medium",
                'price' => 2.9,
                'image' => "coffee_09",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Medium Cold Mocha Coffee with Caramel",
                'price' => 2.9,
                'image' => "coffee_10",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Medium Cold Mocha Coffee with Chocolate",
                'price' => 2.9,
                'image' => "coffee_11",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Espresso Coffee",
                'price' => 1.9,
                'image' => "coffee_12",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Large Cappuccino Coffee with Caramel",
                'price' => 1.9,
                'image' => "coffee_13",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Large Caramel Coffee",
                'price' => 1.9,
                'image' => "coffee_14",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Chocolate Donuts 3 Pack",
                'price' => 2.9,
                'image' => "donut_01",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Glazed Donuts 3 Pack",
                'price' => 2.9,
                'image' => "donut_02",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Strawberry Donut",
                'price' => 0.9,
                'image' => "donut_03",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Donut with Chocolate Cookie",
                'price' => 0.9,
                'image' => "donut_04",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Glazed Donut with Strawberry Chips",
                'price' => 0.9,
                'image' => "donut_05",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Glazed Donut with Chocolate",
                'price' => 0.9,
                'image' => "donut_06",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Chocolate Donut with MORE Chocolate",
                'price' => 0.9,
                'image' => "donut_07",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Chocolate Donut 3 Pack",
                'price' => 1.9,
                'image' => "donut_08",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Vanilla and Chocolate Donut 3 Pack",
                'price' => 1.9,
                'image' => "donut_09",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Donuts 6 Pack",
                'price' => 3.9,
                'image' => "donut_10",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Mixed 3 Pack",
                'price' => 1.9,
                'image' => "donut_11",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Natural Donut with Chocolate",
                'price' => 0.9,
                'image' => "donut_12",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Chocolate Donuts with Chips 3 Pack",
                'price' => 1.9,
                'image' => "donut_13",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Chocolate and Coconut Donut",
                'price' => 0.9,
                'image' => "donut_14",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Chocolate Cookies Pack",
                'price' => 1.9,
                'image' => "cookie_01",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Chocolate and Oatmeal Cookies Pack",
                'price' => 1.9,
                'image' => "cookie_02",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Vanilla Muffins Pack",
                'price' => 1.9,
                'image' => "cookie_03",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Oatmeal Cookies 4 Pack",
                'price' => 2.9,
                'image' => "cookie_04",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Mixed Butter Cookies",
                'price' => 1.9,
                'image' => "cookie_05",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Fruity Flavors Cookies",
                'price' => 1.9,
                'image' => "cookie_06",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Basic Hamburguer",
                'price' => 4.9,
                'image' => "hamburguer_01",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Chicken Hamburguer",
                'price' => 4.9,
                'image' => "hamburguer_02",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Chicken and Chili Hamburguer",
                'price' => 4.9,
                'image' => "hamburguer_03",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Cheese and Pickles Hamburguer",
                'price' => 4.9,
                'image' => "hamburguer_04",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Quarter Pound Hamburguer",
                'price' => 5.9,
                'image' => "hamburguer_05",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Double Cheese Hamburguer",
                'price' => 5.9,
                'image' => "hamburguer_06",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Special Hot Dog",
                'price' => 2.9,
                'image' => "hamburguer_07",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Hot Dogs 2 Pack",
                'price' => 4.9,
                'image' => "hamburguer_08",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "4 Slices of Cheesecake",
                'price' => 4.9,
                'image' => "cake_01",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Special Waffle",
                'price' => 2.9,
                'image' => "cake_02",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "House Special Croissant",
                'price' => 2.9,
                'image' => "cake_03",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Cheesecake",
                'price' => 1.9,
                'image' => "cake_04",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Chocolate Cake",
                'price' => 11.9,
                'image' => "cake_05",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Chocolate Cake Slice",
                'price' => 1.9,
                'image' => "cake_06",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Spicy Pizza with Double Cheese",
                'price' => 7.9,
                'image' => "pizza_01",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Jam and Cheese Pizza",
                'price' => 7.9,
                'image' => "pizza_02",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Double Cheese Pizza",
                'price' => 8.9,
                'image' => "pizza_03",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "House Special Pizza",
                'price' => 8.9,
                'image' => "pizza_04",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Sausage Pizza",
                'price' => 8.9,
                'image' => "pizza_05",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Hawaiian Pizza",
                'price' => 8.9,
                'image' => "pizza_06",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Bacon Pizza",
                'price' => 8.9,
                'image' => "pizza_07",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Vegetables and Cheese Pizza",
                'price' => 7.9,
                'image' => "pizza_08",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Pepperoni and Cheese Pizza",
                'price' => 7.9,
                'image' => "pizza_09",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Olives and Cheese Pizza",
                'price' => 7.9,
                'image' => "pizza_10",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'name' =>  "Jam and Mushrooms Cheese Pizza",
                'price' => 7.9,
                'image' => "pizza_11",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ];

        DB::table('products')->insert($data);
    }
}
