<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //BREAKFAST
        DB::table('menu_items')->insert([
            'name' => 'Fruity Pancakes',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'breakfast',
            'price'=>49.00
        ]);

        DB::table('menu_items')->insert([
            'name' => 'Vegetarian Breakfast',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'breakfast',
            'price'=>69.00
        ]);

        DB::table('menu_items')->insert([
            'name' => "Farmer's Fritatta",
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'breakfast',
            'price'=>499.00
        ]);

        //Chicken

        DB::table('menu_items')->insert([
            'name' => 'Classic Chicken',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'chicken',
            'price'=>599.00

        ]);

        DB::table('menu_items')->insert([
            'name' => 'Hot Spicy Chicken',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'chicken',
            'price'=>749.00

        ]);
        DB::table('menu_items')->insert([
            'name' => 'Cheese Garlic Chicken',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'chicken',
            'price'=>749.00

        ]);
        

        //BEEF
        DB::table('menu_items')->insert([
            'name' => 'Chilly Beef',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'beef',
            'price'=>499.00


        ]);
        DB::table('menu_items')->insert([
            'name' => 'Garlic Beef',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'beef',
            'price'=>749.00


        ]);
        DB::table('menu_items')->insert([
            'name' => 'Dragon Chilly Beef',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'beef',
            'price'=>999.00

        ]);

        //DESSERT
        DB::table('menu_items')->insert([
            'name' => 'Chocolate Whip',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'dessert',
            'price'=>249.00


        ]);
        DB::table('menu_items')->insert([
            'name' => 'Eggless Truffle Cake',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'dessert',
            'price'=>249.00


        ]);
        DB::table('menu_items')->insert([
            'name' => 'Marshmallow Fudge',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'dessert',
            'price'=>249.00


        ]);


        //BEVERAGES
        DB::table('menu_items')->insert([
            'name' => 'Pineapple Juice',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'beverages',
            'price'=>45.00


        ]);
        DB::table('menu_items')->insert([
            'name' => 'Fresh Lemon',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'beverages',
            'price'=>59.00


        ]);
        DB::table('menu_items')->insert([
            'name' => 'Blue Lemonade',
            'desc' => '',
            'image' => 'image.jpeg',
            'category'=>'beverages',
            'price'=>45.00


        ]);

    }
}
