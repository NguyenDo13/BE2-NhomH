<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart; //sử dụng để truy vấn data bằng eloquent
use App\Models\Order;
use Illuminate\Support\Facades\DB; //sử dụng khi truy vấn data bằng Query Builder (DB::)
use SebastianBergmann\Template\Template;
use Illuminate\Support\Facades\Mail;
use App\Models\cart_detail;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;

use function PHPUnit\Framework\isEmpty;

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
            ['id_cart' => $idCart, 'id_prod' => $id, 'size' => 'M' , 'qty' => 1,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')],
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

        //process DELETE
        //1: get id_user
        $idUser = Session::get('customer_id'); 
        // $idUser = 1; 

        //2: get id_cart
        $id_Carts = Cart::where('id_user', $idUser)->value('id'); //get cart from id_user

        //3: delete cart
        $CartDetail = cart_detail::where('id_cart', $id_Carts)->where('id_prod', $id)->delete();
        return redirect()->route('show_cart');
    }

    //update cart
    public function updateCart(Request $request)
    {
        $count = 0;
        foreach($request['id'] as $item){
            // echo $item;
            cart_detail::where('id_prod', $item)->update(['qty' => $request['qty'][$count]]);
            $count++;
        }
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
        if($this->data['carts'] == null){
            return "giỏ hàng trống";
        }
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

    //checkout
    public function checkoutCart()
    {
        // $idUser = 1; //for debugs
        $idUser = Session::get('customer_id');
        //2: get id_cart
        $id_Carts = Cart::where('id_user', $idUser)->value('id');

        //3: checkout cart
        $CartDetail = cart_detail::where('id_cart', $id_Carts)->get()->toArray();
        // dd($CartDetail);
        foreach ($CartDetail as $i) {
            //add to order
            DB::table('orders')->insert([
                ['user_id' => $idUser, 'product_id' => $i['id_prod'], 'shipping' => 0 , 'qty' => $i['qty'], 'price' => 30000],
            ]); 
            
        }
        cart_detail::where('id_cart', $id_Carts)->delete();
        return redirect()->route('show_cart');
    }

    //send Mail
    public function sendMail(){
        //get id_user->getname,email
        // $name = 'NTS';
        // $sendToEmail = 'sinhlop10a9@gmail.com';
        $idUser = Session::get('customer_id');
        $name = Session::get('customer_name');
        $sendToEmail = Session::get('customer_email');

        //get id_order

        $idOrder = Order::Where('user_id', $idUser)->value('id');

        Mail::send('layouts.emails.sendEmail', ['data' => $idOrder], function($email) use($name, $sendToEmail){
            $email->subject('Porto - Your order is being processed');
            $email->to($sendToEmail, $name);
        });
        return redirect()->route('show_cart');
    }
}
