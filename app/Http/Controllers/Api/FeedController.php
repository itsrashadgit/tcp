<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FeedResource;
use App\Models\Feed;
use Illuminate\Http\Request;
use Auth;

class FeedController extends Controller
{

    public function getFeeds(Request $request){

        $state_id = $request->state_id;
        $county_id = $request->county_id;

        $feeds = Feed::whereHas("user", function($q) use($state_id, $county_id) {
            $q->where("state_id", $state_id)
                ->where("county_id", $county_id);
        })->orderBy("created_at", "desc")->paginate($request->per_page ?? 10);

        return FeedResource::collection($feeds);

    }


    public function postFeed(Request $request){

        $feed = new Feed();

        $feed->user_id = Auth::user()->id;
        $feed->visibility = $request->visibility;
        $feed->content = $request->content;
        $feed->save();

        return response()->json([
            "success" => true,
            "message" => "Feed Posted Successfully"
        ]);
    }

}
