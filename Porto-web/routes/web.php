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
Route::prefix('/cart')->group(function(){
    Route::get('/', [CartController::class, 'showCart'])->name('show_cart');
    Route::get('/delete/{id}', [CartController::class, 'deleteCart'])->name('delete_cart');
    Route::post('/update',[CartController::class, 'updateCart'])->name('update_cart');
});