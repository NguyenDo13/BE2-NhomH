<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public $data = [];

    public function initData()
    {
        DB::table('carts')->insert([
            'id_product' => 1,
            'id_user' => 1,
            'size' => 'S',
            'qty' => 2,
        ]);
        $this->data['carts'] = DB::table('carts')->get();

        return dd($this->data);
    }

    public function get()
    {
        $this->data['all'] = Cart::all();

        return dd($this->data);
    }
}
