<?php

namespace SalimHosen\Core\Http\Controllers;

use App\Charts\SaleChart;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function index(){

        if(getAuthRole() != "admin"){
            return redirect()->route("home.".getAuthRole());
        }


        return view("core::home.index");
    }

}
