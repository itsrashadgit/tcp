<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FeedLike;
use Illuminate\Http\Request;
use Auth;

class LikeController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function store(Request $request){

        $user = Auth::user();

        $like = new FeedLike();
        $like->user_id = $user->id;
        $like->type = "like";
        $like->feed_id = $request->feed_id;

        $like->save();

        return response()->json([
            "success" => true,
            "message" => "Liked Successfully"
        ]);

    }


    public function destroy($feed_id){

        $like = FeedLike::where("feed_id", $feed_id)->where("user_id", Auth::user()->id)->first();

        if($like->delete()){
            return response()->json([
                "success" => true,
                "message" => "Delete Successfully"
            ]);
        }else{
            return response()->json([
                "success" => false,
                "message" => "Failed to Delete"
            ]);
        }

    }
}
