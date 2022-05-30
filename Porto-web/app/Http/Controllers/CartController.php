<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;//sử dụng để truy vấn data bằng eloquent
use Illuminate\Support\Facades\DB;//sử dụng khi truy vấn data bằng Query Builder (DB::)

class CartController extends Controller
{
    //dữ liệu dùng chung
    public $data = [];
    //khởi tạo dữ liệu mẫu
    public function initData()
    {
        DB::update("ALTER TABLE carts AUTO_INCREMENT = 1;");
        DB::table('carts')->insert([
            'id_product' => 1,
            'id_user' => 1,
            'size' => 'S',
            'qty' => 2,
        ]);
        $this->data['carts'] = DB::table('carts')->get();

        return dd($this->data);
    }
    //lấy toàn bộ dữ liệu bảng
    public function get()
    {
        $this->data['carts'] = Cart::all();

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
}
