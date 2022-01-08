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
        $req->session()->put("id", $user->id);

        $username = strstr($req->email, '@', true).$req->name;
        return redirect("/signup/auth/username", ["username" => $username]);
    }
    public function username(Request $req) {
        $req->validate(['username' => 'required|unique:users']);
        
        $username = $req->username;
        $id = $req->session("id");
        $user = User::find($id);
        $user->username = $username;
        return redirect("/dashboard/profile");
    }
}
