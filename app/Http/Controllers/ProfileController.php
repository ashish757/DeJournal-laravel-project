<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index($username) {
        $user = User::where(["username" => $username])->with("getPosts")->first();
        return view('profile', ["user" => $user]);
    }
}
