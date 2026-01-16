<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Models\Post;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class userController extends Controller
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
        return view("users.register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(userRequest $request)
    {
        $user = $request->validated();
        $user["password"] = Hash::make($user["password"] );
        if(!empty($request->hasFile("image"))){
            $user["image"] = $request->file("image")->store("users","public");
        }
        User::create($user);
        return to_route("posts.index");

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $posts =Post::where("user_id",$user->id)->get();
        return view("users.userProfile",compact("posts","user")); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
