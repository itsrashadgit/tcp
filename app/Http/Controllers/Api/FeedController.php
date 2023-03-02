<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FeedResource;
use App\Models\Feed;
use App\Models\FeedFile;
use Illuminate\Http\Request;
use Auth;

class FeedController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:sanctum")->except(["index"]);
    }

    public function index(Request $request){

        $state_id = $request->state_id;
        $county_id = $request->county_id;

        $feeds = Feed::whereHas("user", function($q) use($state_id, $county_id) {
            $q->where("state_id", $state_id)
                ->where("county_id", $county_id);
        })->orderBy("created_at", "desc")->paginate($request->per_page ?? 10);

        return FeedResource::collection($feeds);

    }

    public function getMyFeeds(Request $request){

        $user = Auth::user();

        $feeds = Feed::whereHas("user", function($q) use($user) {
            $q->where("user_id", $user->id);
        })->orderBy("created_at", "desc")->paginate($request->per_page ?? 10);

        return FeedResource::collection($feeds);

    }

    public function store(Request $request){

        $feed = new Feed();

        $feed->user_id = Auth::user()->id;
        $feed->visibility = $request->visibility;
        $feed->content = $request->content;
        $feed->save();

        foreach ($request->media as $media) {

            $m = FeedFile::find($media['id']);

            $m->feed_id = $feed->id;

            $m->save();

        }

        return response()->json([
            "success" => true,
            "message" => "Feed Posted Successfully"
        ]);
    }


    public function update(Request $request, $id){

    }

    public function destroy($id){

        $feed = Feed::where("id", $id)->where("user_id", Auth::user()->id)->first();

        if($feed->delete()){
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


    public function uploadFeedMedia(Request $request){

        $request->validate([
            "media" => [
                'required',
                'image',
                'mimes:jpeg,jpg,png,webp'
            ],
        ]);

        $user = Auth::user();

        $filename = uploadImage($request, "media", "uploads/feed/", 600, 600);

        $feed_file = new FeedFile();
        $feed_file->file_name = $filename;
        $feed_file->file_type = "image";
        $feed_file->save();

        return response()->json([
            "success" => true,
            "message" => "Uploaded Successfully",
            "data" => [
                "id" => $feed_file->id,
                "media_url" => asset("uploads/feed/$filename")
            ]
        ], 200);


    }

}
