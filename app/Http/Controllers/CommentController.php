<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function store(Request $request,Post $post)
    {
        $data =  $request->validate([
              'post_id' => 'required|exists:posts,id',
              'comment' => 'required|string',
        ]);
        comment::create([
            "post_id"=>$data['post_id'],
            "user_id"=>Auth::id(),
            "comment"=>$data["comment"]
        ]);
        return back();
        
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comment $comment)
    {
        if(auth()->user()->id == $comment->user_id){
            $comment->delete();
            return back();
        }else{
            abort(404);
        }
     }
}
