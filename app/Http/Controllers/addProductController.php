<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addProductController extends Controller
{
    public function index(){
        return view('addProduct');
    }

    public function addLogic(Request $request){
        $request->validate([
            "ItemID" => "required|unique:products",
            "Name" => "required|unique:products|max:20",
            "Image" => "required|image|file",
            "Category" => "required|in:Recycle,Second",
            "Description" => "required|max:200",
            "Price"=>"required|numeric|min:1000"
        ]);

        $objFile = $request->file('Image');
        $name = $objFile->getClientOriginalName();
        $ext = $objFile->getClientOriginalExtension();
        $new_filename = $name . time() . '.' . $ext;
        $objFile->storeAs('public/images', $new_filename);

        DB::table('products')->insert([
            "ItemID" => $request->ItemID,
            "Name" => $request->Name,
            "Price" => $request->Price,
            "Description" => $request->Description,
            "Image" => $new_filename,
            "Category" => $request->Category
        ]);

        return redirect()->route('show-product-admin');
    }
}
