<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function index(){

        return view("user.home");
    }


}
