<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class DashboardProfileController extends Controller
{
    public function profile() {
        $id = session("id");
        $user = User::find($id);

        return view("dashboard.profile", ["user" => $user]);
    }

    public function editProfile() {
        $id = session("id");
        $user = User::find($id);

        return view("dashboard.editProfile", ["user" => $user]);
    }
    public function updateProfile(Request $req) {
        $id = session("id");
        $user = User::find($id);

        if ($req->file('avatar')) {
            $path = $req->file('avatar')->store('avatars', "public");
            // $path = Storage::putFile('avatars', $req->file('avatar'));
            $user->avatar = $path;
        }
        
        $user->name = $req->input()["name"];
        $user->status = $req->input()["status"];
        $user->bio = $req->input()["bio"];
        $user->update();

        $req->session()->flash("msg", "Profile was Updated");
        return redirect("/dashboard/profile");
    }
}
