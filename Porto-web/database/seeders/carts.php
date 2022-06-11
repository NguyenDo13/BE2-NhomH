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
            ['id_user' => 1, 'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')],
            ['id_user' => 2, 'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')],
            ['id_user' => 3, 'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')],
            ['id_user' => 4, 'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')],
            ['id_user' => 5, 'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
