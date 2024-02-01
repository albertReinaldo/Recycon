<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class editProfileController extends Controller
{
    public function editProfileCustomer ($id){
        $profile = User::where('id','=',$id)->first();

        return view("editProfileCustomer",compact('profile'));
    }

    public function editProfileAdmin ($id){
        $profile = User::where('id','=',$id)->first();

        return view("editProfileAdmin",compact('profile'));
    }

    public function editProfile(Request $request,$id){
        $request->validate([
            "username" =>"required|min:3|unique:users",
            "email" =>"required|email|unique:users"
        ]);

        User::where('id','=',$id)->update([
            "username" => $request->username,
            "email" => $request->email,
        ]);

        return redirect()->route('home');
    }

    public function changePasswordAdmin($id){
        $pass = User::where('id','=',$id)->first();
        return view('changePasswordAdmin',compact('pass'));
    }

    public function changePasswordCustomer($id){
        $pass = User::where('id','=',$id)->first();
        return view('changePasswordCustomer',compact('pass'));
    }

    public function changePassword(Request $request){
        $request->validate([
            "old_password"=>'required',
            "password"=>"required|string|min:6",
            "confirm_password"=>"required|same:password"
        ]);

        if(Hash::check($request->old_password, auth()->user()->password)){
            User::whereId(auth()->user()->id)->update([
                "password"=>Hash::make($request->password),
                "confirm_password"=>Hash::make($request->confirm_password)
            ]);
        }
        else{
            return back()->with("error","old password not match!");
        }

        return redirect()->route('home');
    }
}


