<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;//sử dụng để truy vấn data bằng eloquent
// use App\Models\cart_details;
use App\Models\Product;
use App\Models\cart_detail;
use Database\Seeders\cart_details;
use Database\Seeders\carts;
use Illuminate\Support\Facades\DB;//sử dụng khi truy vấn data bằng Query Builder (DB::)

class CartController extends Controller
{
    //dữ liệu dùng chung
    public $data = [];

    public function showCart(){
        //get id_user
        $idUser = 1;
        $this->data['idUser'] = $idUser;

        //get id_cart
        $idCart = Cart::where('id_user', $idUser)->value('id');

        //kiem tra
        if($idCart == null){
            return 'user khong ton tai';
        }

        //get cart
        $this->data['carts'] = cart_detail::where('id_Cart', $idCart)->get()->toArray();
        $this->data['products'] = [];
        //get list prod
        foreach ($this->data['carts'] as $item) {  
            $Product = Product::where('id', $item['id_prod'])->get()->toArray();
            array_push($this->data['products'], $Product);
        }

        //all data cart

        // return dd($this->data['carts']);
        return view('clients.pages.carts', $this->data);
    }
    // public function getToMany(){
    //     $this->data['carts'] = Cart::getDetail();
    //     return dd($this->data['carts']);
    // }
}