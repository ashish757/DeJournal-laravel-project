<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function posts() {

        $posts = Post::with("getUser:id,name,avatar")->get();

        return view("index", ["posts"=> $posts]);
    }
}
