<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\County;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CountyController extends Controller
{
    public function index(){

        $state = request("state");
        if($state){
            $counties = County::where("state_id", $state)->paginate(20)->appends(request()->query());
        }else{
            $counties = County::paginate(20);
        }

        return view("admin.counties.index",  compact("counties"));
    }

    public function create(){

        $states = State::all();
        return view("admin.counties.create", compact("states"));
    }

    public function store(Request $request){


        $request->validate([
            "state" => ["required"],
            "name" => ["required", "unique:counties"],
            "shape" => ["required"],
            "coords" => ["required"],
        ]);

        $county = new County();
        $county->name = $request->name;
        $county->state_id = $request->state;
        $county->shape = $request->shape;
        $county->coords = $request->coords;
        $county->slug = Str::slug($request->name);
        $county->save();

        return redirect()->route("admin.counties.index")->with("success", "Updated Successfully");
    }

    public function edit($id){

        $county = County::findOrFail($id);

        return view("admin.counties.edit", compact("county"));

    }


    public function update(Request $request, $id){


        $request->validate([
            "state" => ["required"],
            "name" => ["required"],
            "shape" => ["required"],
            "coords" => ["required"],
        ]);

        $county = County::findOrFail($id);
        $county->state_id = $request->state;
        $county->name = $request->name;
        $county->shape = $request->shape;
        $county->coords = $request->coords;
        $county->slug = Str::slug($request->name);
        $county->save();

        return redirect()->route("admin.counties.index")->with("success", "Updated Successfully");
    }
}
