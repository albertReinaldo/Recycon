<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class editProductController extends Controller
{
    public function productEditForm($id){
        $product = product::where('itemId','=',$id)->first();

        return view('editProduct',compact('product'));
    }

    public function productEditLogic(Request $request, $id){
        //$product = product::find($request->ItemID);

        $request->validate([
            "Name" => "required|max:20",
            "Price"=>"required|numeric|min:1000",
            "Description" => "required|max:200",
            "Image" => "image|file",
            "Category" => "required|in:Recycle,Second",
        ]);

        if($request->file('Image')){
            $objFile = $request->file('Image');
            $name = $objFile->getClientOriginalName();
            $ext = $objFile->getClientOriginalExtension();
            $new_filename = $name . time() . '.' . $ext;
            $objFile->storeAs('public/images', $new_filename);

            $file = storage_path('public/images',$request->Image);
            Storage::delete($request->$file);

            product::where('ItemId','=',$id)->update([
                "Name" => $request->Name,
                "Price" => $request->Price,
                "Description" => $request->Description,
                "Image" => $new_filename,
                "Category" => $request->Category
            ]);
        }
        else{
            product::where('ItemId','=',$id)->update([
                "Name" => $request->Name,
                "Price" => $request->Price,
                "Description" => $request->Description,
                "Category" => $request->Category
            ]);
        }

        return redirect()->route('view-item');
    }
}
