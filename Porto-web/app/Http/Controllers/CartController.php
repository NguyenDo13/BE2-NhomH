<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;//sử dụng để truy vấn data bằng eloquent
use App\Models\cart_details;

use Illuminate\Support\Facades\DB;//sử dụng khi truy vấn data bằng Query Builder (DB::)

class CartController extends Controller
{
    //dữ liệu dùng chung
    public $data = [];
    private $idUser;
    private $insert = ['2', '5', 'M', '4'];
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
    //khởi tạo dữ liệu mẫu
    public function initData()
    {
        //reset id
        DB::update("ALTER TABLE carts AUTO_INCREMENT = 1;");
        //insert cart
        DB::table('carts')->insert([
            'id_user' => 1,
        ]);
        //insert detail
        DB::table('cart_details')->insert([
            'id_cart' => 1,
            'id_prod' => 1,
            'size' => 'S',
            'qty' => 4,
        ]);
        //get data
        $carts = Cart::all();
        $this->data['carts'] = $carts->fresh();
        
        $this->data['cart_details'] = DB::table('cart_details')->get();
        return dd($this->data);
    }
    //lấy toàn bộ dữ liệu bảng
    public function get()
    {
        $this->data['carts'] = Cart::all();
        $this->data['cart_details'] = cart_detail::all();

        return dd($this->data);
    }
    //xóa toàn bộ dữ liệu bảng
    public function remove()
    {
        $this->data['carts'] = Cart::all();
        foreach($this->data['carts'] as $item){
            $this->data['carts'] = DB::table('carts')->delete($item['id']);
        }
        return dd($this->data['carts']);
    }
    // sử cột id_product có id là 1
    public function update()
    {
        $this->data['carts'] = DB::table('carts')->where('id', 1)->update(['id_product' => 6]);

        return dd($this->data['carts']);
    }

    public function getToMany(){
        $this->data['carts'] = Cart::getDetail();
        return dd($this->data['carts']);
    }
}