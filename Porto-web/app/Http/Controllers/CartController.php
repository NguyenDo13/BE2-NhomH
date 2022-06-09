<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart; //sử dụng để truy vấn data bằng eloquent
use Illuminate\Support\Facades\DB; //sử dụng khi truy vấn data bằng Query Builder (DB::)
use SebastianBergmann\Template\Template;
use App\Models\cart_details;
use App\Models\Product;
use function PHPUnit\Framework\isEmpty;

session_start();
class CartController extends Controller
{

    //dữ liệu dùng chung
    public $data = [];
    
    //update cart
    public function updateCart()
    {
        $idUser = 1;
        $count = 0;
        $qty = 3;
        $size = 'XL';
        $idProd = 2;

        //check login or not
        // if(null !== ($_SESSION('id_user'))){
        //     return 'Go to Login';
        // }
        //check empty Cart
        $Carts = Cart::where('id_user', $idUser)->get();
        // dd($Carts);
        foreach ($Carts as $i) {
            $count++;
            $idCart = $i['id'];
        }
        if ($count <= 0) {
            return 'Your Cart must have products';
        }

        //process update
        //TODO 1:
        $CartDetail = cart_details::where('id_cart', $idCart)->update(['size' => $size, 'qty' => $qty]);
        $CartDetail = cart_details::where('id_cart', $idCart)->get();


        return view('template', ['data' => $CartDetail]);
    }
    
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
        $this->data['carts'] = cart_details::where('id_Cart', $idCart)->get()->toArray();
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
}