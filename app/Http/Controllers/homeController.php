<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function indexAdmin()
    {
        return view('homeAdmin');
    }

    public function indexCustomer()
    {
        return view('homeCustomer');
    }
}
