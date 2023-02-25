<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class FriendController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function addFriend(Request $request){

        $user = Auth::user();

        $user->user()->attach([$request->user_id]);

        return redirect()->back()->with("success", "Following");
    }

    public function unFriend(Request $request){

        $friend = Auth::user()->user()->where("user_id", Auth::user()->id)
                ->where("friend_id", $request->user_id)->first();

        if($friendship){
            $friendship->delete();
        }

        return redirect()->back()->with("success", "Unfollowing");
    }
}
