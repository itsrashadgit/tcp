<?php

namespace App\Http\Controllers;

use App\Models\County;
use App\Models\Feed;
use App\Models\Portfolio;
use App\Models\State;
use Illuminate\Http\Request;
use Auth;

class FeedController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function showFeed($state_code, $county_slug){

        $state = State::where("code", $state_code)->first();
        $county = County::where("slug", $county_slug)->first();

        $user = Auth::user();
        $portfolios = Portfolio::where("user_id", $user->id)->get()->take(6);

        return view("feed", compact("state", "county", "portfolios"));

    }
}
