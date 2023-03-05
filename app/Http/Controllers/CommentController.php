<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\FeedResource;
use App\Models\Feed;
use App\Models\FeedComment;
use Illuminate\Http\Request;
use Auth;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function store(Request $request){

        $feed = Feed::findOrFail($request->feed_id);

        $comment = new FeedComment();
        $comment->feed_id = $request->feed_id;
        $comment->user_id = Auth::user()->id;
        $comment->feed_comment_id = $request->feed_comment_id ?? null;
        $comment->comment = $request->comment;
        $comment->save();

        return response()->json([
            "success" => true,
            "message" => "Commented Successfully",
            "data" => new FeedResource($feed)
        ]);
    }


    public function destroy($id){

        $comment = FeedComment::where("id", $id)->where("user_id", Auth::user()->id)->first();

        $feed = $comment->feed;

        if($comment->delete()){
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
