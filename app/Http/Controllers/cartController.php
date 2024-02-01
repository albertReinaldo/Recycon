<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cartController extends Controller
{
    public function index($id){
        $cartData = cart::where('UserId','=',$id)->get();
        return view('cart',compact('cartData'));
    }

    public function insertCart($userId,$ItemID,Request $request){

        cart::insert([
            'ItemID' => $ItemID,
            'userId' => $userId,
            'Quantity' => $request->Qty
        ]);
        $cartData = cart::where('userId','=',$userId)->get();

        //return redirect()->to('/MyCart/'.$userId)->with(compact('cart'));
        return redirect()->to('/myCart/'.$userId)->with(compact('cartData'));
        // dd($cartData->products->Name);
    }

    public function updateCart($id,$userId,Request $request){
        cart::where('id','=',$id)->update([
            'Quantity' => $request->Qty
        ]);
        $cartData = cart::where('userId','=',$userId)->get();

        return redirect()->to('/myCart/'.$userId)->with(compact('cartData'));
    }

    public function deleteCart($userId,$id){
        DB::table('carts')->where('id','=',$id)->delete();
        $cartData = cart::where('userId','=',$userId)->get();

        return view('cart',compact('cartData'));
    }
}
