<?php

namespace App\Http\Controllers;

use App\Models\County;
use App\Models\State;
use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    public function index(){

        $states = State::all();
        return view("welcome", compact("states"));
    }

    public function stateCounties($slug){

        $state = State::where("code", $slug)->first();

        $counties = County::where("state_id", $state->id)->get();

        return view("state-county", compact("state", "counties"));

    }

}
