<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index(){

        $states = State::all();
        return view("admin.states.index",  compact("states"));
    }

    public function edit($id){

        $state = State::findOrFail($id);

        return view("admin.states.edit", compact("state"));

    }


    public function update(Request $request, $id){

        $request->validate([
            "name" => ["required"],
            "code" => ["required"]
        ]);

        $state = State::findOrFail($id);

        $image_name = "";
        if($request->hasFile("map_image")){
            $image_name = uploadImage($request, "map_image", "uploads/images", 600, 600);
            $state->image = $image_name;
        }


        $state->name = $request->name;
        $state->code = $request->code;

        $state->save();

        return redirect()->route("admin.states.index")->with("success", "Updated Successfully");
    }
}
