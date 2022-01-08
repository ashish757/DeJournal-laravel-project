<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class DashboardPostsController extends Controller
{
    public function posts() {
        $id = session("id");
        $posts = User::find($id)->getPosts;

        return view("dashboard.posts", ["posts" => $posts]);
    }


    public function savePost(Request $req) {

        $post = new Post;

        if ($req->file('image')) {
            $path = $req->file('image')->store('post/images', "public");
            // $path = Storage::putFile('avatars', $req->file('avatar'));
            $post->image = $path;
        }

        $post->title = $req->title;
        $post->subTitle = $req->subTitle;
        $post->description = $req->description;
        $post->postedBy = $req->session()->get("id");
        $post->save();

        $req->session()->flash("msg", "Post was inserted");
        return redirect('/dashboard/posts');
    }
    
    public function editPost($id) {

        $post = Post::find($id);
        return view("dashboard.editPost", ["post" => $post]);
    }
    public function updatePost(Request $req, $id) {

        $post = Post::find($id);
        if ($req->file('image')) {
            $path = $req->file('image')->store('post/images', "public");
            $post->image = $path;
        }
        $post->title = $req->title;
        $post->subTitle = $req->subTitle;
        $post->description = $req->description;
        $post->update();

        $req->session()->flash("msg", "Post was updates");
        return redirect('/dashboard/posts');
    }


}
