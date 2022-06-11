<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserGoogle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('usersgg')->insert([
            ['provider_user_id' => '1', 'provider' => 'GOOGLE', 'user' => '1'],
        ]);
    }
}