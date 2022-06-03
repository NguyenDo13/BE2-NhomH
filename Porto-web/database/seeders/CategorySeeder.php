<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('categories')->insert([
            [
                'category_name' => 'Shoes'           
            ],
            [
                'category_name' => 'Clothing'           
            ],
            [
                'category_name' => 'Fashion'
               
            ],
            [
                'category_name' => 'ACCESSORIES'
            ],
            [
                'category_name' => 'WATCHES'
            ],
            [
                'category_name' => 'CAPS'
            ],
            [
                'category_name' => 'ELECTRONICS'
            ],
            [
                'category_name' => 'MUSIC'
            ]

        ]);
    }
}
