<?php

namespace App\Http\Controllers;

use App\Models\County;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    public function index(){

        $states = State::all();
        return view("welcome", compact("states"));
    }

    public function usa() {
        $states = State::all();
        return view("usa", compact("states"));
    }

    public function stateCounties($slug){

        $state = State::where("code", $slug)->first();

        $counties = County::where("state_id", $state->id)->get();
        //dd($counties);
        return view("state-county", compact("state", "counties"));

    }

    public function profiles(Request $request){

        $query = $request->q;

        $profiles = User::whereHas("roles", function($q){
                    $q->where("title", "!=", "admin");
                })->where("name", "like", "%$query%")
                    ->paginate(20);

        return view("profile-list", compact("profiles"));
    }
}
