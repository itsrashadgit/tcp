<?php

namespace App\Http\Controllers;

use App\Http\Requests\Chat\StoreChatRequest;
use App\Models\ChatMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;


class MessageBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function index($username){

        $user = Auth::user();
        $receivers = User::where("id", "!=", $user->id)->get();
        $receiver = null;
        if(request("receiver_id")){
            $receiver = User::findOrFail(request("receiver_id"));
        }

        $messages = ChatMessage::whereIn("sender_id", [$user->id, $receiver->id ?? ""])
                            ->whereIn("receiver_id", [$user->id, $receiver->id ?? ""])
                            ->paginate(request()->per_page);

        return view("user.messenger", compact("user", "receivers", "receiver", "messages"));
    }

    public function sendMsg(StoreChatRequest $request){

        $user = Auth::user();

        $message_type = 0;
        // $fileName = null;
        // if($request->hasFile("file")){
        //     $fileName = uploadFile($request, "file", "chats/user-$request->receiver_id");
        //     $message_type = 1;
        // }

        ChatMessage::create([
            "sender_id" => $user->id,
            "receiver_id" => $request->receiver,
            "message" => $request->message,
            "message_type" => $message_type,
            // "file_name" => $fileName
        ]);

        return redirect()->back();

    }
}
