<?php

namespace App\Http\Controllers;

use App\Models\County;
use App\Models\Feed;
use App\Models\State;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function showFeed($state_code, $county_slug){

        $state = State::where("code", $state_code)->first();
        $county = County::where("slug", $county_slug)->first();

        return view("feed", compact("state", "county"));

    }
}
