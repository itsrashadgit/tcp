<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FeedComment;
use Illuminate\Http\Request;
use Auth;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function postComment(Request $request){

        $comment = new FeedComment();
        $comment->feed_id = $request->feed_id;
        $comment->user_id = Auth::user()->id;
        $comment->feed_comment_id = $request->feed_comment_id ?? null;
        $comment->comment = $request->comment;
        $comment->save();

        return response()->json([
            "success" => true,
            "message" => "Commented Successfully"
        ]);
    }
}
