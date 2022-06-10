<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart; //sử dụng để truy vấn data bằng eloquent
use Illuminate\Support\Facades\DB; //sử dụng khi truy vấn data bằng Query Builder (DB::)
use SebastianBergmann\Template\Template;
use App\Models\cart_detail;
use Illuminate\Contracts\Session\Session;
use App\Models\Product;
use function PHPUnit\Framework\isEmpty;

session_start();
class CartController extends Controller
{

    //dữ liệu dùng chung
    public $data = [];

    //add cart
    public function addCart($id){
        $idUser = Session::get('customer_id');
        // $idUser = 1;
        $idCart = Cart::where('id_user', $idUser)->value('id');
        DB::table('cart_details')->insert([
            ['id_cart' => $idCart, 'id_prod' => $id, 'size' => 'M' , 'qty' => 1, 'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')],
        ]);
        $this->data['details'] = cart_detail::where('id_cart', $idCart)->get();
        return redirect()->route('show_cart');
    }
    //Delete cart
    public function deleteCart($id)
    {
        if($id == null){
            return "khong co id";
        }
        $count = 0;
        //process DELETE
        //1: get id_user
        $idUser = 1; //for debugs

        //2: get id_cart
        $id_Carts = Cart::where('id_user', $idUser)->value('id'); //get cart from id_user
        // foreach ($Carts as $i) {
        //     $idCart = $i['id'];
        //     $count++;
        // }
        //check 2: check empty Cart
        // if ($count <= 0) {
        //     return 'Your Cart must have products';
        // }

        //3: delete cart
        $CartDetail = cart_detail::where('id_cart', $id_Carts)->where('id_prod', $id)->delete();
        return redirect()->route('show_cart');
    }
    //update cart
    public function updateCart(Request $request)
    {
        $count = 0;
        
        // $size = 'XL';

        // if(isEmpty($request)){
        //     return dd($request);
        // }
        //check login or not
        // if(null !== ($_SESSION('id_user'))){
        //     return 'Go to Login';
        // }

        // //check empty Cart
        // $Carts = Cart::where('id_user', $idUser)->get();
        // // dd($Carts);
        // foreach ($Carts as $i) {
        //     $count++;
        //     $idCart = $i['id'];
        // }
        // if ($count <= 0) {
        //     return 'Your Cart must have products';
        // }

        //process update
        //TODO 1:f
        foreach($request['id'] as $item){
            // echo $item;
            cart_detail::where('id_prod', $item)->update(['qty' => $request['qty'][$count]]);
            $count++;
        }
        // $CartDetail = 
        // $CartDetail = cart_details::where('id_cart', $idCart)->update(['qty' => $qty]);
        // $CartDetail = cart_details::where('id_cart', $idCart)->get();


        // return view('template', ['data' => $CartDetail]);
        // return dd($CartDetail);
        
        return redirect()->route('show_cart');
    }
    
    public function showCart(){
        //get id_user
        $idUser = 1;
        $this->data['idUser'] = $idUser;

        //get id_cart
        $this->data['id_cart'] = Cart::where('id_user', $idUser)->value('id');

        //kiem tra
        if($this->data['id_cart'] == null){
            return 'user khong ton tai';
        }

        //get cart
        $this->data['carts'] = cart_detail::where('id_Cart', $this->data['id_cart'])->get()->toArray();
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