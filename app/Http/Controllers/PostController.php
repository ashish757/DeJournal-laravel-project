<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Symfony\Component\VarDumper\VarDumper;

class PostController extends Controller
{
    public function index() {

        $posts = Post::with("getUser:id,name,avatar")->get();
        // echo $posts;
        return view("posts", ["posts" => $posts]);
    }

    public function post($title, $postId) {
        $post = Post::find($postId);
        
        return view("post", ["post" => $post]);
    }
}
