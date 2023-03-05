<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class MessageBoardController extends Controller
{
    public function index(Request $request, $trade){

        $query = $request->q;



            $user = Auth::user();
        // $receivers = User::where("id", "!=", $user->id)
        //             ->whereHas("chatmessages", function($q){
        //                 $q->where("sender_id", Auth::user()->id);
        //             })->get();


        if(is_numeric($trade)){
            $receivers = User::where("trade_id", $trade)
                ->where("id", "!=", $user->id)->get();
        }else{
            $receivers = User::where("user_type", $trade)
            ->where("id", "!=", $user->id)->get();
        }


        $receiver = null;
        if(request("receiver_id")){
            $receiver = User::findOrFail(request("receiver_id"));
        }

        $messages = ChatMessage::whereIn("sender_id", [$user->id, $receiver->id ?? ""])
                            ->whereIn("receiver_id", [$user->id, $receiver->id ?? ""])
                            ->paginate(request()->per_page);

        return view("profile-list", compact("user", "receivers", "receiver", "messages"));

    }
}
