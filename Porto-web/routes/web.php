<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/cart', [CartController::class, 'initData'])->name('cart');
Route::get('/add', [CartController::class, 'add']);
Route::get('/update', [CartController::class, 'update']);
Route::get('/remove', [CartController::class, 'remove']);

Route::get('/login', function () {
    return view('clients.pages.login');
});

Route::get('/product', function () {
    return view('clients.pages.detail_product');
});
Route::get('/category', function () {
    return view('clients.pages.categories');
});

//Login by gmail
Route::get('/login-google', [AdminController::class, 'login_google']);
Route::get('/logingooglecallback', [AdminController::class, 'callback_google']);

Route::get('/', [ProductController::class, 'getSaleProduct']);