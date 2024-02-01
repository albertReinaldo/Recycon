<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class showProductController extends Controller
{
    public function index()
    {
        $products = product::paginate(3);
        return view('showProduct',compact('products'));
    }

    public function productDetail($ItemID){
        $view = product::where('itemId','=',$ItemID)->first();
        return view('productDetail',compact('view'));
    }

    public function indexCustomer(){
        $products = product::paginate(3);
        return view('showProductCustomer',compact('products'));
    }

    public function productDetailCustomer($ItemID){
        $view = product::where('itemId','=',$ItemID)->first();
        return view('productDetailCustomer',compact('view'));
    }

    public function productDetailCustomerUpdate($ItemID,$id){
        //$view = product::where('itemId','=',$ItemID)->first();
        $viewJoin = product::where('products.ItemID','=',$ItemID)->join('carts','carts.ItemID','=','products.ItemID')->where('carts.id',$id)->first();
        return view('productEditDetailCustomer',compact('viewJoin'));
    }

    public function indexAdmin(){
        $products = product::paginate(3);
        return view('showProductAdmin',compact('products'));
    }

    public function productDetailAdmin($ItemID){
        $view = product::where('itemId','=',$ItemID)->first();
        return view('productDetailAdmin',compact('view'));
    }

    public function productSearchCustomer(Request $request){
        $product_data = product::where('Name','like',"%$request->searchName%")->paginate(3);
        return view('searchCustomer',compact('product_data'));
    }

    public function productSearchAdmin(Request $request){
        $product_data = product::where('Name','like',"%$request->searchName%")->paginate(3);
        return view('searchAdmin',compact('product_data'));
    }
}
