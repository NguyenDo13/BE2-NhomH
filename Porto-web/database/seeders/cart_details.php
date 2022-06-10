<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cart_details extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart_details')->insert([
            ['id_cart' => 1, 'id_prod' => 1, 'size' => 'M' , 'qty' => 2],
            ['id_cart' => 1, 'id_prod' => 2, 'size' => 'M' , 'qty' => 4],
            ['id_cart' => 1, 'id_prod' => 3, 'size' => 'S' , 'qty' => 6],
            ['id_cart' => 2, 'id_prod' => 1, 'size' => 'M' , 'qty' => 3],
            ['id_cart' => 2, 'id_prod' => 3, 'size' => 'XL' , 'qty' => 4],
            ['id_cart' => 3, 'id_prod' => 3, 'size' => 'S' , 'qty' => 1],
            ['id_cart' => 4, 'id_prod' => 1, 'size' => 'L' , 'qty' => 2],
            ['id_cart' => 4, 'id_prod' => 2, 'size' => 'M' , 'qty' => 1],
            ['id_cart' => 4, 'id_prod' => 3, 'size' => 'M' , 'qty' => 1],
        ]);
    }
}
