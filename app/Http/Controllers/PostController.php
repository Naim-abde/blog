<?php

namespace App\Http\Controllers;

use App\Http\Requests\postRequest;
use App\Models\Comment;
use App\Models\follow;
use App\Models\like;
use App\Models\Post;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)

    {
        $posts = Post::all();

        return view("posts.posts",compact("posts"));
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.createPost");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(postRequest $request)
    {
        $file =$request->validated();
        if($request->hasFile("image")){
            $file["image"] = $request->file("image")->store("posts","public");

        }   
        Auth::user()->post()->create($file);
        return  to_route("posts.index");
    }

    /**
     * Display the specified resource.
     */
public function show(Post $post)
{
     $selectedPost = Post::find($post->id);

     $user = User::find($post->user_id);

     $followers = \DB::table('follows')
        ->where('follwing_id', $user->id)    
        ->count();

     $likes = $post->likes()->count();
     $isfollow = follow::where("follwer_id",auth()->user()->id)->where("follwing_id",$user->id)->exists();

     
    $islike = like::where("user_id", auth()->user()->id)
                  ->where("post_id", $selectedPost->id)
                  ->exists();

     $comments = Comment::with("user")->where("post_id", $post->id)->get();

    return view("posts.post", compact(
        "selectedPost",
        "user",
        "comments",
        "likes",
        "islike",
        "followers",
        "isfollow"
    ));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        if(auth()->user()->id === $post->user_id){
           return view("posts.update",compact("post")); 
        }else{
            return abort(401);
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(postRequest $request, Post $post)
    {
        $file = $request->validated();
        if(!empty($request->hasFile("image"))){
            $file["image"] = $request->file("image")->store("posts","public");
        }
        $post->update($file);
        return to_route("posts.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if(auth()->user()->id === $post->user_id){
            $post->delete();
            return to_route("posts.index");
        }else{
            abort(401);
        }
        
        
    }
}
