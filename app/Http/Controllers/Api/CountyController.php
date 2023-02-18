<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\County;
use Illuminate\Http\Request;

class CountyController extends Controller
{
    public function index()
    {
        $state = request("state");
        if($state){
            $counties = County::where("state_id", $state)->get();
        }else{
            $counties = County::all();
        }

        return response()->json([
            "success" => true,
            "data" => $counties
        ], 200);
    }
}
