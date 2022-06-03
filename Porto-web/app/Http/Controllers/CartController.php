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

    //Delete cart
    public function deleteCart()
    {
        //TODO check 1: check loginO 
        $count = 0;
        //process DELETE
        //1: get id_user
        $idUser = 2; //for debugs

        //2: get id_cart
        $Carts = Cart::where('id_user', $idUser)->get(); //get cart from id_user
        foreach ($Carts as $i) {
            $idCart = $i['id'];
            $count++;
        }
        //check 2: check empty Cart
        if ($count <= 0) {
            return 'Your Cart must have products';
        }

        //3: delete cart
        $CartDetail = cart_detail::where('id_cart', $idCart)->delete();

        //4: get all cart to check
        $CartDetail = cart_detail::all();

        return view('template', ['data' => $CartDetail]);
    }
}
