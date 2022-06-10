<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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

Route::get('/category', [ProductController::class, 'ShowAllProduct']);
Route::get('/', function () {
    return view('clients.pages.home');
});


Route::get('/cart', [CartController::class, 'initData'])->name('cart');

Route::get('/login', function(){
    return view('clients.pages.login');
});
// Product detail
Route::get('/product/{id}', [ProductController::class, 'getProductById']);
// Product->category
Route::get('/product', function () {
    return view('clients.pages.detail_product');
});

Route::get('/', [ProductController::class, 'ShowFeatureProduct']);
//loc san pham
Route::get('/showall', [ProductController::class,'SortAllProduct']);
Route::get('/showfeature', [ProductController::class,'SortFeatureProduct']);
Route::get('/showlowtohigh', [ProductController::class,'ShowProductPriceLowToHigh']);
Route::get('/showhightolow', [ProductController::class,'ShowProductPriceHighToLow']);
Route::get('/showsale', [ProductController::class,'SortProductSale']);
Route::get('/showa-z', [ProductController::class,'SortAZ']);
Route::get('/showz-a', [ProductController::class,'SortZA']);

