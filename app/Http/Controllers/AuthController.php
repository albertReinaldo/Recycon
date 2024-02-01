<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if($request->remember){
            Cookie::queue('CookieEmail',$request->email,60);
            Cookie::queue('CookiePassword',$request->password,60);
        }

        if (Auth::attempt($credentials) == true){
            Cookie::queue(
                'loggedUser',
                Auth::user()->username,
                60
            );
            if (Auth::user()->is_admin == true){
                return redirect()->route('show-product-admin');
            }else{
                return redirect()->route('show-product-customer');
            }
        } else {
            return back()->withErrors([
                'password' => 'Your combination of Email or Password is wrong !!!'
            ]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
