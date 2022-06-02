<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart; //sử dụng để truy vấn data bằng eloquent
use App\Models\cart_detail;
use Illuminate\Support\Facades\DB; //sử dụng khi truy vấn data bằng Query Builder (DB::)
use SebastianBergmann\Template\Template;

use function PHPUnit\Framework\isEmpty;

session_start();
class CartController extends Controller
{

    //dữ liệu dùng chung
    public $data = [];
    private $insert = ['2', '5', 'M', '4'];
    private $idUser;

    //TODO: process array insert
    private function processArray()
    {
        $idCart = Cart::orderBy('id')->get();
        foreach ($idCart as $item) {
            $this->insert[0] = rand(1, $item['id']);
            $this->insert[1] = rand(1, 5);
            $this->insert[3] = rand(1, 5);
        }
    }
    //khởi tạo dữ liệu mẫu
    public function initData()
    {
        //reset id
        DB::update("ALTER TABLE carts AUTO_INCREMENT = 1;");
        //insert cart
        DB::table('carts')->insert([
            'id_user' => $this->idUser,
        ]);
        $this->idUser++;
        //insert detail
        $this->processArray();
        DB::table('cart_details')->insert([
            'id_cart' => $this->insert[0],
            'id_prod' => $this->insert[1],
            'size' => $this->insert[2],
            'qty' => $this->insert[3],
        ]);
        //get data
        $carts = Cart::all();
        $this->data['carts'] = $carts->fresh(); //lam moi data

        $this->data['cart_details'] = DB::table('cart_details')->get();
        return dd($this->data);
    }

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
        $CartDetail = cart_detail::where('id_cart', $idCart)->update(['size' => $size, 'qty' => $qty]);
        $CartDetail = cart_detail::where('id_cart', $idCart)->get();


        return view('template', ['data' => $CartDetail]);
    }
}
