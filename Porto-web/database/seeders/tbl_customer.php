<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class tbl_customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_customers')->insert([
            ['customer_email' => 'taiem.work2022@gmail.com', 'customer_password' => '1', 'customer_name' => 'Em' , 'customer_picture' => '', 'customer_token' => ''],
        ]);
    }
}