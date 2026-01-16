<?php

namespace App\Http\Controllers;

use App\Models\follow;
use App\Models\User;
use Illuminate\Http\Request;

class FollowController extends Controller
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
    public function store(User $user)
    {
        $isfollow = follow::where("follwer_id",auth()->user()->id)->where("follwing_id",$user->id)->exists();
        if(auth()->user()->id==$user->id){
            return abort(404);
        }
        if($isfollow){
            follow::where("follwer_id",auth()->user()->id)->where("follwing_id",$user->id)->delete();
        }
        else{
             follow::firstOrCreate([
            "follwer_id" =>auth()->user()->id,
            "follwing_id"=>$user->id
        ]);
        }
       
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(follow $follow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(follow $follow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, follow $follow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(follow $follow)
    {
        //
    }
}
