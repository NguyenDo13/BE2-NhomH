<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;//sử dụng để truy vấn data bằng eloquent
use App\Models\cart_detail;
use Database\Seeders\cart_details;
use Database\Seeders\carts;
use Illuminate\Support\Facades\DB;//sử dụng khi truy vấn data bằng Query Builder (DB::)

class CartController extends Controller
{
    //dữ liệu dùng chung
    public $data = [];
    private $insert = ['2', '5', 'M', '4'];
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
    //lấy toàn bộ dữ liệu bảng
    public function add()
    {
        //reset id
        DB::update("ALTER TABLE carts AUTO_INCREMENT = 1;");
        //insert cart
        DB::table('carts')->insert([
            'id_user' => 11,
        ]);
        //insert detail
        DB::table('cart_details')->insert([
            'id_cart' => 1,
            'id_prod' => 1,
            'size' => 'S',
            'qty' => 4,
        ]);

        return dd($this->data);
    }
    //xóa toàn bộ dữ liệu bảng
    public function remove()
    {
        $this->data['carts'] = cart_detail::where('id_cart', 1)->delete();
        return dd($this->data['carts']);
    }
    // sử cột id_product có id là 1
    public function update()
    {
        // $this->data['carts'] = DB::table('carts')->where('id', 15)->update(['id_product' => 6]);
        $this->data['carts'] = Cart::where('id',15)->update(['id_user' => 15]);
        return dd($this->data['carts']);
    }

    // public function getToMany(){
    //     $this->data['carts'] = Cart::getDetail();
    //     return dd($this->data['carts']);
    // }
}