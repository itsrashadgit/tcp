<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;

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
        return view("user.portfolio", compact("user"));
    }

    public function settings(){

        $user = Auth::user();
        return view('user.settings', compact('user'));
    }
}
