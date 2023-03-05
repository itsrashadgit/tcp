<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FeedLike;
use Illuminate\Http\Request;
use Auth;
use App\Http\Resources\FeedResource;
use App\Models\Feed;

class LikeController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function store(Request $request){

        $user = Auth::user();

        $feed = Feed::findOrFail($request->feed_id);

        $like = new FeedLike();
        $like->user_id = $user->id;
        $like->type = "like";
        $like->feed_id = $request->feed_id;

        $like->save();

        return response()->json([
            "success" => true,
            "message" => "Liked Successfully",
            "data" => new FeedResource($feed)
        ]);

    }


    public function destroy($feed_id){

        $like = FeedLike::where("feed_id", $feed_id)->where("user_id", Auth::user()->id)->first();

        $feed = Feed::findOrFail($feed_id);

        if($like->delete()){
            return response()->json([
                "success" => true,
                "message" => "Delete Successfully",
                "data" => new FeedResource($feed)
            ]);
        }else{
            return response()->json([
                "success" => false,
                "message" => "Failed to Delete"
            ]);
        }

    }
}
