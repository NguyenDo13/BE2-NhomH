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


Route::prefix('/cart')->group(function () {
    Route::get('/', [CartController::class, 'showCart'])->name('show_cart');
    Route::get('/delete/{id}', [CartController::class, 'deleteCart'])->name('delete_cart');
    Route::post('/update', [CartController::class, 'updateCart'])->name('update_cart');
    Route::get('/checkout', [CartController::class, 'checkoutCart']);
    Route::get('/send', [CartController::class, 'sendMail']);
});
