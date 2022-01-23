<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search($scope, $query) {
        session()->flash("scope", $scope);
        session()->flash("query", $query);
        
        return view('searchResults');
    }
}
