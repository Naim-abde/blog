<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show(){
        return view("users.login");
    }
    public function login(Request $request , User $user){
        
       $form = $request->validate([
        "email"=>"required|email",
        "password"=>"required"
       ]);
       if(Auth::attempt($form)){
            $request->session()->regenerate();
            return to_route("home");
       }
       else{
        return to_route("user.create");
       }




    }
    public function logout(Request $request){
         
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route("login.show");
    }
}
