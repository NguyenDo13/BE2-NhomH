<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Login;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MailController extends Controller
{
    public function recover_pass(Request $request)
    {
        // $data  = $request->all();
        // $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        // $title_mail = "Verify your password!" + '  ' + $now;
        // $customer = Login::where('customer_email','=',$data['email'])->first();
        // if($customer){
        //     $count_customer = $customer->count();
        //     if($count_customer==0){
        //         return redirect()->back()->with('error','Email chưa được đăng ký!   ')
        //     }
        // }
        // $token_random = Str::random();
    }
}