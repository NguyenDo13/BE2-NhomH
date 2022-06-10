<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Brown Women Casual HandBag',
            'price' => 269.00,
            'image' => 'product-1.png',
            'size' => 'S'.'M'.'XL',
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                            Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
            'qty' => 1,
            'feature' => 0,     
            'sale'=> 30,
            'tag_id'=>2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Blue Backpack for Young',
            'price' => 111.00,
            'image' => 'balo-xanh.jpg',
            'size' => 'S'.'M'.'XL',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                             Excepteur sint occaecat cupidatat non.',
                             'qty' => 2,
            'feature' => 1,
            'sale'=> 40,
            'tag_id'=>1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Men Sports Travel Bag',
            'price' => 299.00,
            'image' => 'product-2.png',
            'size' => 'S'.'M'.'XL',
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                            Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
                            'qty' => 0,
            'feature' => 0,
            'sale'=> 10,
            'tag_id'=>2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Ultimate 3D Bluetooth Speaker',
            'price' => 108.00,
            'image' => 'product-3.png',
            'size' => 'S'.'M'.'XL',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                             Excepteur sint occaecat cupidatat non.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'qty' => 1,
            'feature' => 0,
            'sale'=> 20,
            'tag_id'=>1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Ultimate 3D Bluetooth Speaker',
            'price' => 108.00,
            'image' => 'loa-chuyendoi.jpg',
            'size' => 'S'.'M'.'XL',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                             Excepteur sint occaecat cupidatat non.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'qty' => 2,
            'feature' => 1,
            'sale'=> 70,
            'tag_id'=>2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Men Belt Double Set',
            'price' => 299.00,
            'image' => 'product-4.png',
            'size' => 'S'.'M'.'XL',
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                            Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
            'qty' => 2,
            'feature' => 1,
            'sale'=> 70,
            'tag_id'=>1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Men Belt Double Set',
            'price' => 299.00,
            'image' => 'best-2.jpg',
            'size' => 'S'.'M'.'XL',
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                            Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
            'qty' => 7,
            'feature' => 1,
            'sale'=> 10,
            'tag_id'=>2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Men Black Sports Watch',
            'price' => 111.00,
            'image' => 'product-5.png',
            'size' => 'S'.'M'.'XL',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non.',
            'qty' => 4,
            'feature' => 1,
            'sale'=> 0,
            'tag_id'=>1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Basketball Sports Blue Shoes',
            'price' => 111.00,
            'image' => 'Best-3.jpg',
            'size' => 'S'.'M'.'XL',
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                             Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet
                             quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
            'qty' => 2,
            'feature' => 1,
            'sale'=> 50,
            'tag_id'=>2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Casual Spring Blue Shoes',
            'price' => 55.00,
            'image' => 'giay-xanh.jpg',
            'size' => 'S'.'M'.'XL',
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                             Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet
                             quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
            'qty' => 3,
            'feature' => 1,
            'sale'=> 20,
            'tag_id'=>1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
