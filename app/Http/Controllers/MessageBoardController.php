<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use App\Models\Feed;
use App\Models\Trade;
use App\Models\TradeEvent;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class MessageBoardController extends Controller
{
    public function index(Request $request, $trade){

        $user = Auth::user();

        $messages = ChatMessage::where("message_board", $trade)->paginate(20);

        $trades = Trade::all();

        $trade_events = TradeEvent::all();
        $pipelines = Feed::where("is_on_pipeline", true)->get();

        $message_board = $trade;

        return view("message-board", compact("user", "messages", "trades", "trade_events", "pipelines", "message_board"));

    }


    public function store(Request $request){

        $msg = new ChatMessage();
        $msg->sender_id = Auth::user()->id;
        $msg->receiver_id = $request->receiver_id;
        $msg->message = $request->message;
        $msg->message_board = $request->message_board;
        $msg->save();

        return redirect()->back()->with("success", "Sent Successfully");

    }

}
