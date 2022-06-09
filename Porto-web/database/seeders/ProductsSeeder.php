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
            'category_id' => 1,
            'name' => 'Brown Women Casual HandBag',
            'price' => 269.00,
            'image' => 'product-1.png',
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                            Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
            'feature' => 0,
            'manufacture_id' => '1',
            'type_id' => '1',
            'comment_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Blue Backpack for Young',
            'price' => 111.00,
            'image' => 'balo-xanh.jpg',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                             Excepteur sint occaecat cupidatat non.',
            'feature' => 1,
            'manufacture_id' => '1',
            'type_id' => '1',
            'comment_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Men Sports Travel Bag',
            'price' => 299.00,
            'image' => 'product-2.png',
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                            Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
            'feature' => 0,
            'manufacture_id' => '1',
            'type_id' => '1',
            'comment_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Ultimate 3D Bluetooth Speaker',
            'price' => 108.00,
            'image' => 'product-3.png',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                             Excepteur sint occaecat cupidatat non.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'feature' => 0,
            'manufacture_id' => '1',
            'type_id' => '1',
            'comment_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Ultimate 3D Bluetooth Speaker',
            'price' => 108.00,
            'image' => 'loa-chuyendoi.jpg',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                             Excepteur sint occaecat cupidatat non.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'feature' => 1,
            'manufacture_id' => '1',
            'type_id' => '1',
            'comment_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'Men Belt Double Set',
            'price' => 299.00,
            'image' => 'product-4.png',
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                            Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
            'feature' => 1,
            'manufacture_id' => '1',
            'type_id' => '1',
            'comment_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'Men Belt Double Set',
            'price' => 299.00,
            'image' => 'best-2.jpg',
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                            Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
            'feature' => 1,
            'manufacture_id' => '1',
            'type_id' => '1',
            'comment_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'name' => 'Men Black Sports Watch',
            'price' => 111.00,
            'image' => 'product-5.png',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non.',
            'feature' => 1,
            'manufacture_id' => '1',
            'type_id' => '1',
            'comment_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'name' => 'Basketball Sports Blue Shoes',
            'price' => 111.00,
            'image' => 'Best-3.jpg',
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                             Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet
                             quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
            'feature' => 1,
            'manufacture_id' => '1',
            'type_id' => '1',
            'comment_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'name' => 'Casual Spring Blue Shoes',
            'price' => 55.00,
            'image' => 'giay-xanh.jpg',
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                             Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet
                             quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
            'feature' => 1,
            'manufacture_id' => '1',
            'type_id' => '1',
            'comment_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
