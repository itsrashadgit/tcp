<?php

namespace App\Http\Controllers;

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
        return view("user.messenger", compact("user"));
    }
}
