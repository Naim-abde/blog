<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\userController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\auth;
use App\Http\Middleware\AuthMiddleware;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("home",function (){
    return view("pages.home");
})->name("home");

 

 Route::resource("/posts",PostController::class)->middleware(AuthMiddleware::class);
Route::resource("/user",userController::class);
Route::resource("/comment",CommentController::class);

Route::get("/login",[AuthController::class,"show"])->name("login.show");
Route::post("/login",[AuthController::class,"login"])->name("login");
Route::post("/logout",[AuthController::class,"logout"])->name("logout");


Route::resource("/admin",admin::class)->middleware([AuthMiddleware::class,AdminMiddleware::class]);

Route::delete("/admin/user/{user}",[admin::class,"adminDeleteUser"])->name("admin.user.destroy")->middleware([AuthMiddleware::class,AdminMiddleware::class]);
Route::get("/admin/user/{user}",[admin::class,"adminShowUser"])->name("admin.user.show")->middleware([AuthMiddleware::class,AdminMiddleware::class]);
Route::delete("/admin/post/{post}",[admin::class,"adminDeletePost"])->name("admin.post.destroy")->middleware([AuthMiddleware::class,AdminMiddleware::class]);
Route::get("/admin/post/{post}",[admin::class,"adminShowPost"])->name("admin.post.show")->middleware([AuthMiddleware::class,AdminMiddleware::class]);
Route::delete("/admin/comment/{comment}",[admin::class,"adminDeleteComment"])->name("admin.comment.destroy")->middleware([AuthMiddleware::class,AdminMiddleware::class]);
 Route::resource("/likes",LikeController::class);
 Route::post('/posts/{post}/like', [LikeController::class, 'store'])->name("post.like.store");

Route::post("/user/{user}",[FollowController::class,"store"])->name("user.follow.store");

Route::get("/admi/post",function (){
    $posts = Post::all();
    return view("admin.posts",compact("posts"));
})->name("admin.all.post");