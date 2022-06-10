<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Mail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function __construct()
    {

    }
    function index()
    {
        $product = Product::all();

        $product_type = Product_type::all();
        $Productbs = Product::orderby('sale_amount', 'ASC')->limit(10)->get();
        $Productnew = Product::orderby('id', 'DESC')->limit(10)->get();
        return view('main', ['data' => $product, 'datatype' => $product_type, 'bs' => $Productbs, 'new' => $Productnew]);
    }
    function page($name = "/")
    {

        $product = Product::all();
        return view($name, ['data' => $product]);
    }
    function getProductById($id)
    {
        $productdetail = Product::where('id', $id)->get();
        // $manu = Product::where('manufacture_id', $product->manufacture_id)->get();
        return view('clients.pages.detail_product', ['detail' => $productdetail]);
    }
    function getProductByTypeID($id)
    {
        $product = Product::where('type_id', $id)->get();
        return view('producttype', ['productType' => $product]);
    }

    function ShowAllProduct()
    {
        $Product = Product::simplePaginate(3);
        return view('clients.pages.categories', compact("Product"));
    }
    function ShowFeatureProduct()
    {
        $Product = Product::where('feature', 1)->get();
        return view('clients.pages.home', compact("Product"));
    }
   

    // function getProductByTypeID($id)
    // {
    //     $product = Product::where('type_id', $id)->get();
    //     return view('producttype', ['productType' => $product]);
    // }
}
