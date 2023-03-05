<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use App\Models\County;
use App\Models\State;
use App\Models\Trade;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class PublicPageController extends Controller
{
    public function index(){

        $states = State::all();
        return view("welcome", compact("states"));
    }

    public function login(){
        return view("auth.login");
    }

    public function register(){
        $trades = Trade::all();
        return view("auth.register", compact("trades"));
    }

    public function usa() {
        $states = State::all();
        return view("usa", compact("states"));
    }

    public function stateCounties($slug){

        $state = State::where("code", $slug)->first();

        $counties = County::where("state_id", $state->id)->get();

        return view("state-county", compact("state", "counties"));

    }


}
