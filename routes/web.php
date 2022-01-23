<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostsController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserSignin;
use App\Http\Controllers\UserSignup;
use App\Http\Middleware\NoAccessLoggedIn;
use App\Http\Middleware\NoAccessLoggedOut;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, "posts"]);





Route::middleware([NoAccessLoggedOut::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, "index"]);
    Route::get('/logout', [DashboardController::class, "logout"]);

    Route::get('/dashboard/profile', [DashboardProfileController::class, "profile"]);
    Route::get('/dashboard/profile/edit', [DashboardProfileController::class, "editProfile"]);
    Route::post('/dashboard/profile/edit/update', [DashboardProfileController::class, "updateProfile"]);


    Route::get('/dashboard/posts', [DashboardPostsController::class, "posts"]);
    Route::get('/dashboard/posts/edit/{id}', [DashboardPostsController::class, "editPost"]);
    Route::post('/dashboard/posts/edit/update/{id}', [DashboardPostsController::class, "updatePost"]);

    Route::view('/dashboard/createPost', 'dashboard.createPost');
    Route::post('/dashboard/createPost/save', [DashboardPostsController::class, "savePost"]);
});

Route::middleware([NoAccessLoggedIn::class])->group(function () {
    Route::view('/signin', 'signin');
    Route::view('/signup', 'signup');
    Route::post('/signin/auth', [UserSignin::class, "index"]);
    Route::post('/signup/auth', [UserSignup::class, "index"]);
});

Route::view('/signup/auth/username',"username");
Route::post('/signup/auth/username', [UserSignup::class, "username"]);

Route::get('/writer/{username}', [ProfileController::class, "index"]);

Route::get('/search/{scope}/{query}', [SearchController::class, "search"]);




Route::get('/posts', [PostController::class, "index"]);
Route::get('/posts/{title}/{postId}', [PostController::class, "post"]);


