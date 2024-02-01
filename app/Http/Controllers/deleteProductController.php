<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class deleteProductController extends Controller
{
    public function deleteLogic($id){
        product::where('ItemID','=',$id)->delete();
        return  redirect()->route('view-item');
    }
}
