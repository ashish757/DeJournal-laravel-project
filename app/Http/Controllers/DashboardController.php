<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $id = session("id");
        $user = User::find($id);

        return view("dashboard.dashboard", ["user" => $user]);
    }
    
    public function logout() {
        session()->pull("id");
        return redirect("/signin");
    }
}
