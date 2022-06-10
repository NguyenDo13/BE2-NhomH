<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;
use App\Models\Login;
use App\Models\UserSocial;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login_google()
    {
        config(['services.google.redirect'=>env('GOOGLE_CLIENT_URL')]);
        return Socialite::driver('google')->redirect();
    }
    public function callback_google()
    {
        $users = Socialite::driver('google')->stateless()->user();
        // return $users->id;
        $authUser = $this->findOrCreateUser($users, 'google');
        if ($authUser) {
            $account_name = Login::where('customer_id', $authUser->user)->first();
            Session::put('customer_id', $account_name->customer_id);  # code...
            Session::put('customer_name', $account_name->customer_name);
            Session::put('customer_picture', $account_name->customer_picture);

        } elseif ($customer_new) {
            $account_name = Login::where('customer_id', $authUser->user)->first();
            Session::put('customer_id', $account_name->customer_id);  # code...
            Session::put('customer_name', $account_name->customer_name);
            Session::put('customer_picture', $account_name->customer_picture);

        }
        return redirect('/home')->with('message', 'Đăng nhập Admin thành công');
    }
    public function findOrCreateUser($users, $provider)
    {
        $authUser = UserSocial::where('provider_user_id', $users->id)->first();
        if ($authUser) {

            return $authUser;
        } else {
            $customer_new = new UserSocial([
                'provider_user_id' => $users->id,
                'provider_email' => $users->email,
                'provider' => strtoupper($provider),
                'user' => ''
            ]);

            $orang = Login::where('customer_email', $users->email)->first();

            if (!$orang) {
                $orang = Login::create([
                    'customer_name' => $users->name,
                    'customer_email' => $users->email,
                    'customer_password' => '',
                    'customer_picture' => $users->avatar,
                    'customer_token' => '',
                ]);
            }
            $customer_new->login_customer_google()->associate($orang);
            $customer_new->save();
            return $customer_new;
        }
    }
}