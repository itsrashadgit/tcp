<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use Illuminate\Http\Request;
use Auth;

class FollowController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function follow(Request $request){

        $user = Auth::user();

        $follower = new Follower();
        $follower->user_id = $request->user_id;
        $follower->follower_id = $user->id;

        $follower->save();

        return redirect()->back()->with("success", "Following");
    }

}
