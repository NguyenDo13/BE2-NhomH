<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('tags')->insert([
            [
                'tag_name' => 'Bag'
               
            ],
            [
                'tag_name' => 'Hub'
            ],
            [
                'tag_name' => 'Sports'
            ],
            [
                'category_name' => 'Sweater'
            ],
            [
                'tag_name' => 'Shoes'
            ],
            [
                'tag_name' => 'Clothes'
            ],
            [
                'tag_name' => 'Fashion'
            ]

        ]);
    }
}
