<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $data = [];
    public function initData(){
        $this->data['title'] = 'Giỏ hàng';
        return view('clients.pages.carts', $this->data);
    }
}
