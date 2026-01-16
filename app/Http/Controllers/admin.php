<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class admin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        
        return view("admin.users",compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $posts = Post::all();
        return view("admin.posts",compact("posts"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
         // $user->delete();
        // return to_route("admin.index");
    }
    public function adminDeleteUser(User $user){
        $user->delete();
        return to_route("admin.index");
    }

    public function adminShowUser(User $user){
        $posts = Post::where("user_id",$user->id)->get();
        $followers = \DB::table('follows')
        ->where('follwing_id', $user->id)    
        ->count();
        return view("admin.userProfile",compact("posts",'user',"followers"));

    }
    public function adminDeletePost(Post $post){
           $post->delete();
           return to_route("admin.index");
    }
    public function adminShowPost(Post $post){
         $user = User::where("id",$post->user_id)->first();
         $comments =Comment::with("user")->where("post_id",$post->id)->get();
        return view("admin.post",compact("post","user","comments"));

    }
    public function adminDeleteComment(Comment $comment){
        $comment->delete();
        return back();
    }
    public function adminPosts(){
        return view("admin.posts");
    }
    

}
