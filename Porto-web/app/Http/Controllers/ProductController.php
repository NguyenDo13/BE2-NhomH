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
    function getProductById($id)
    {
        $productdetail = Product::where('id', $id)->get();
        return view('clients.pages.detail_product', ['detail' => $productdetail]);
    }
    function showProductByCategory(){
        $product_cate = Product::where('category_name')->get();
        return view('clients.pages.home', compact("Product"));
    }
    function page($name = "/")
    {

        $product = Product::all();
        return view($name, ['data' => $product]);
    }

    // function getProductByTypeID($id)
    // {
    //     $product = Product::where('type_id', $id)->get();
    //     return view('producttype', ['productType' => $product]);
    // }
    function ShowAllProduct()
    {
        $Product = Product::simplePaginate(4);
        return view('clients.pages.categories', compact("Product"));
    }

    function ShowFeatureProduct()
    {
        $Product = Product::where('feature', 1)->get();
        return view('clients.pages.home', compact("Product"));
    }

    // Loc san pham
    function SortAllProduct()
    {
        $feature = Product::simplePaginate(4);
        return view('clients.modules.15-sort', compact("feature"));
    }
    function SortFeatureProduct()
    {
        $feature = Product::where('feature', 1)->simplePaginate(4);
        return view('clients.modules.15-sort', compact("feature"));
    }
    function ShowProductPriceHighToLow()
    {
        $feature = Product::orderby('price', 'ASC')->simplePaginate(4);

        return view('clients.modules.15-sort', compact("feature"));
    }
    function ShowProductPriceLowToHigh()
    {
        $feature = Product::orderby('price', 'DESC')->simplePaginate(4);

        return view('clients.modules.15-sort', compact("feature"));
    }
    function SortProductSale()
    {
        $feature = Product::orderby('sale', 'ASC')->simplePaginate(4);

        return view('clients.modules.15-sort', compact("feature"));
    }
    function SortAZ()
    {
        $feature = Product::orderby('name', 'ASC')->simplePaginate(4);

        return view('clients.modules.15-sort', compact("feature"));
    }
    function SortZA()
    {
        $feature = Product::orderby('name', 'DESC')->simplePaginate(4);

        return view('clients.modules.15-sort', compact("feature"));
    }
}
