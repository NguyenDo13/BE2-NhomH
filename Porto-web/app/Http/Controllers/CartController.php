<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;//sử dụng để truy vấn data bằng eloquent
use App\Models\cart_detail;
use Illuminate\Support\Facades\DB;//sử dụng khi truy vấn data bằng Query Builder (DB::)

session_start();
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

    //add cart
    public function addCart(){
        //TODO: kiểm tra đăng nhập bằng session() xem id_user có tồn tại không?

        //TODO: lấy id_user từ secsion
        if(!isset($_SESSION['user_id'])){
            return "hãy đăng nhập trước";
        }
        //TODO: lấy cart có id_user = session
        $idUser = $_SESSION['id_user']; //đang null
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
