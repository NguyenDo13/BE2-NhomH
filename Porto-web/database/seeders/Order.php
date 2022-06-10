<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['user_id' => 1, 'product_id' => 1, 'shipping' => 0 , 'qty' => 2, 'price' => 30000],
            ['user_id' => 2, 'product_id' => 2, 'shipping' => 0 , 'qty' => 1, 'price' => 15000],
            ['user_id' => 1, 'product_id' => 5, 'shipping' => 0 , 'qty' => 2, 'price' => 20000],
            ['user_id' => 3, 'product_id' => 3, 'shipping' => 0 , 'qty' => 4, 'price' => 37000],
            ['user_id' => 4, 'product_id' => 1, 'shipping' => 0 , 'qty' => 5, 'price' => 40000],
        ]);
    }
}