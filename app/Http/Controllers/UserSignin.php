<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserSignin extends Controller
{
    public function index(Request $req) {
        $req->validate(['email' => 'required', 'password' => 'required']);

       
        $user = User::where("email", $req->email)->get();

        if (count($user) > 0) {
            if ($user[0]->password === $req->password) {
                $req->session()->put("id", $user[0]->id);
                return redirect("/");
            } else {
                $req->session()->flash("invalidCred", "Your Password is invalid ");
                return Redirect::back();
            }
        } else {
            $req->session()->flash("invalidCred", "Your Email id is invalid ");
            return Redirect::back();
        }
        // $req->session()->push('id', 4);
        // return $user;
    }
}
