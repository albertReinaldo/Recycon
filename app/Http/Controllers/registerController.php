<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function registerLogic(Request $request){
        $request->validate([
            "username" =>"required|min:3|unique:users",
            "email" =>"required|email|unique:users",
            "password"=>"required|string|min:6",
            "confirm_password"=>"required|same:password",
        ]);

        DB::table('users')->insert([
            "username" => $request->username,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "confirm_password" =>Hash::make($request->confirm_password),
            "is_admin" => false
        ]);

        return redirect()->route('home');
    }
}
