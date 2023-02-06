<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    public function index(){
        return view("welcome");
    }

    public function stateCounties($slug){

        $state = State::where("code", $slug)->first();

        $cities = City::where("state_id", $state->id)->get();

        return view("state-county", compact("state", "cities"));

    }

}
