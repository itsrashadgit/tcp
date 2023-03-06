<?php

namespace App\Http\Controllers;

use App\Models\TradeEvent;
use Illuminate\Http\Request;
use Auth;

class TradeEventController extends Controller
{
    public function index(){


    }

    public function create()
    {

    }

    public function store(Request $request){

        $request->validate([
            "name" => ["required"],
            "start_time" => ["required"],
            "end_time" => ["required"],
            "event_details" => ["required"],
        ]);

        $event = new TradeEvent();
        $event->user_id = Auth::user()->id;
        $event->name = $request->name;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->event_details = $request->event_details;
        $event->save();

        return response([
            "success" => true,
            "message" => "Created Successfully"
        ], 200);

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){


    }

}
