<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\County;
use App\Models\Portfolio;
use App\Models\Trade;
use App\Models\User;
use Auth;
use Illuminate\Http\Client\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function index(){

        $user = Auth::user();
        return view("user.home", compact("user"));
    }

    public function activity($username){

        $user = User::where("username", $username)->first();
        return view("user.home", compact("user"));
    }


    public function profile($username){

        $user = User::where("username", $username)->first();
        return view("user.profile", compact("user"));
    }

    public function portfolio($username){
        $user = User::where("username", $username)->first();

        $query = request("q");
        if($query){
            $portfolios = Portfolio::where("user_id", $user->id)
                ->where("file_name", "%$query%")
                ->where("original_name", "%$query%")
                ->paginate(20)->appends(request()->query());
        }else{
            $portfolios = Portfolio::where("user_id", $user->id)->paginate(20)->appends(request()->query());
        }

        return view("user.portfolio", compact("user", "portfolios"));
    }

    public function settings(){

        $user = Auth::user();
        return view('user.settings', compact('user'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        $trades = Trade::all();
        $counties = County::all();

        return view("user.profile-edit", compact("user", "trades", "counties"));
    }

    // public function updateProfile(Request $request){

    //     dd($request->all());
    // }
}
