<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserSignup extends Controller
{
    public function index(Request $req) {
        $req->validate(['name' => 'required', 'email' => 'required|email|unique:users', 'password' => 'required|min:2|same:cpassword']);

        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();
        return redirect("/signup/auth/username");
    }
    public function username() {
        
        return view("username");
    }
}
