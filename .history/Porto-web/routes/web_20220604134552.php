<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

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

Route::get('/get',[CartController::class, 'get']);
Route::get('/init',[CartController::class, 'initdata']);
Route::get('/remove',[CartController::class, 'remove']);
Route::get('/update',[CartController::class, 'update']);



Route::get('/cart', [CartController::class, 'initData'])->name('cart');

Route::get('/login', function(){
    return view('clients.pages.login');
});

Route::get('/product', function () {
    return view('clients.pages.detail_product');
});
Route::get('/category', function () {
    return view('clients.pages.categories');
});