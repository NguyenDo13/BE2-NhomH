<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;//sử dụng để truy vấn data bằng eloquent
use App\Models\cart_detail;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;//sử dụng khi truy vấn data bằng Query Builder (DB::)

session_start();
class CartController extends Controller
{
    
    //dữ liệu dùng chung
    public $data = [];

    //add cart
    public function addCart(){
        //TODO: lấy cart có id_user = session
        $idUser = Session::get('customer_id');
        $this->data['carts'] = Cart::where('id_user', $idUser)->get();
        //idcart->cart_detail
        foreach($this->data['carts'] as $item){
            $idCart = $item['id'];
        }
        $this->data['details'] = cart_detail::where('id_cart', $idCart)->get();
        //TODO: get all data
        return dd($this->data);
    }
    
}
