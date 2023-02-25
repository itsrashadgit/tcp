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

    public function unfollow(Request $request){

        $following = Follower::where("user_id", $request->user_id)->where("follower_id", Auth::user()->id)->first();
        if($following){
            $following->delete();
        }

        return redirect()->back()->with("success", "Unfollowing");
    }

}
