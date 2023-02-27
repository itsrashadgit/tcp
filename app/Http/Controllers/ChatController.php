<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\ChatMessage;
use Auth;
use App\Events\MessageSent;
use App\Http\Requests\Chat\StoreChatRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function index()
    {
        return view('chat::chat.index');
    }

    public function users()
    {

        $users = User::all()->except(Auth::user()->id);
        return ChatUsers::collection($users);

    }

    public function store(StoreChatRequest $request){

        $user = Auth::user();

        $message_type = 0;
        $fileName = null;
        if($request->hasFile("file")){
            $fileName = uploadFile($request, "file", "chats/user-$request->receiver_id");
            $message_type = 1;
        }

        $conversation = ChatMessage::create([
            "sender_id" => $request->sender_id,
            "receiver_id" => $request->receiver_id,
            "message" => $request->message,
            "message_type" => $message_type,
            "file_name" => $fileName
        ]);

        MessageSent::dispatch($user, $conversation);

        return new ChatMessages($conversation);

    }


    public function messages($receiver_id){

        $user = Auth::user();
        $user->received_messages()->where("is_seen", false)->update(["is_seen" => true]);

        $sender_id = $user->id;
        $messages = ChatMessage::whereIn("sender_id", [$sender_id, $receiver_id])
                            ->whereIn("receiver_id", [$sender_id, $receiver_id])->paginate(request()->per_page);

        return ChatMessages::collection($messages);
    }

}
