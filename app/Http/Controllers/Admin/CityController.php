<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){

        $cities = City::paginate(20);
        return view("admin.cities.index",  compact("cities"));
    }


    public function edit($id){

        $city = City::findOrFail($id);

        return view("admin.cities.edit", compact("city"));

    }


    public function update(Request $request, $id){


        $request->validate([
            "city" => ["required"],
            "county" => ["required"],
            "shape" => ["required"],
            "coords" => ["required"],
        ]);

        $city = City::findOrFail($id);

        $city->city = $request->city;
        $city->county = $request->county;
        $city->shape = $request->shape;
        $city->coords = $request->coords;
        $city->save();

        return redirect()->route("admin.cities.index")->with("success", "Updated Successfully");
    }
}
