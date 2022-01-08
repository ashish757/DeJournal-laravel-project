<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class users extends Controller
{
    public function index() {

        return view("users", ["users" => User::all()]);
    }

    public function experiment() {

        // return DB::table("users")->get();
        // return DB::table("users")->get()->where('id', 2);
        // return DB::table("users")->get()->where('name', 'a');
        // return (array)DB::table("users")->find(2);
        // return DB::table("users")->get()->count();
        // return DB::table("users")->insert(
        //     [
        //         "name"=>"as",
        //         "email"=>"as@gmail.com",
        //         "password"=>"aaagfjds",
        //     ]
        // );
        // return DB::table("users")->where("id", 3)->update(
        //     [
        //         "name"=>"as",
        //         "email"=>"as@gmail.com",
        //         "password"=>"aaagfjds",
        //     ]
        // );



    }
}
