<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageBoardController extends Controller
{
    public function index(){

        return view("user.messenger");
    }
}
