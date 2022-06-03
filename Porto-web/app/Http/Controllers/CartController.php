<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;//sử dụng để truy vấn data bằng eloquent
use App\Models\cart_details;

use Illuminate\Support\Facades\DB;//sử dụng khi truy vấn data bằng Query Builder (DB::)

class CartController extends Controller
{
    public $data = [];
    private $idUser;
    public function showCart(){
        $idUser = rand(1,10);
        $this->data['idUser'] = $idUser;
        $idCart = Cart::where('id_user', $idUser)->value('id');
        if($idCart == null){
            return 'user khong ton tai';
        }
        $this->data['carts'] = cart_details::where('id_Cart', $idCart)->get();
        return view('clients.pages.carts', $this->data);
    }
}
