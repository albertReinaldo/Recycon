<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class viewItemController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('viewItem',compact('products'));
    }
}
