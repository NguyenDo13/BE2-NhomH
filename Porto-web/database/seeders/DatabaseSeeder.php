<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(carts::class);
        $this->call(cart_details::class);
       // $this->call(tbl_customers::class);
        $this->call(Order::class);
        $this->call(UserGoogle::class);
        $this->call(ProductsSeeder::class);
        
    }
}