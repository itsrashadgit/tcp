<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use App\Models\County;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

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

        return view("state-county", compact("state", "counties"));

    }

    public function profiles(Request $request){

        $query = $request->q;

        $profiles = User::whereHas("roles", function($q){
            $q->where("title", "!=", "admin");
        })->where("name", "like", "%$query%")
            ->paginate(20);


            $user = Auth::user();
        // $receivers = User::where("id", "!=", $user->id)
        //             ->whereHas("chatmessages", function($q){
        //                 $q->where("sender_id", Auth::user()->id);
        //             })->get();
        $receivers = User::all();

        $receiver = null;
        if(request("receiver_id")){
            $receiver = User::findOrFail(request("receiver_id"));
        }

        $messages = ChatMessage::whereIn("sender_id", [$user->id, $receiver->id ?? ""])
                            ->whereIn("receiver_id", [$user->id, $receiver->id ?? ""])
                            ->paginate(request()->per_page);

        return view("profile-list", compact("user", "receivers", "receiver", "messages", "profiles"));

    }
}
