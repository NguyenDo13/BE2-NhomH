<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class carts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            ['id_user' => 1],
            ['id_user' => 2],
            ['id_user' => 3],
            ['id_user' => 4],
            ['id_user' => 5],
        ]);
    }
}
