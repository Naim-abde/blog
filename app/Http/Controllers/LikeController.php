<?php

namespace App\Http\Controllers;

use App\Models\like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store( Post $post)
    {   
        $unlike  = Like::where("user_id",auth()->user()->id)->where("post_id",$post->id)->exists();
        if($unlike){
            Like::where("user_id",auth()->user()->id)->where("post_id",$post->id)->delete();
             return back();
        }else{
            like::firstOrCreate([
            "user_id"=>auth()->user()->id,
            "post_id"=> $post->id,
        ]);   
        return back();
        }
        

    }

    /**
     * Display the specified resource.
     */
    public function show(like $like)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(like $like)
    {
        //
    }
}
