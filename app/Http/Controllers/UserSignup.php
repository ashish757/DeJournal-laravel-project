<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserSignup extends Controller
{
    public function index(Request $req) {
        $req->validate(['name' => 'required', 'email' => 'required|email|unique:users', 'password' => 'required|min:2|same:cpassword']);
        $username = strstr($req->email, '@', true).$req->name;

        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->username = $username;
        $user->save();
        echo $user->id;
        $req->session()->put("id", $user->id);

        
        $req->session()->flash("username", $username);
        return redirect("/signup/auth/username");
    }
    public function username(Request $req) {
        $req->validate(['username' => 'required|unique:users']);
        
        $username = $req->username;
        $id = $req->session()->get("id");
        $user = User::find($id);
        $user->username = $username;
        $user->update();

        return redirect("/dashboard/profile");
    }
}
