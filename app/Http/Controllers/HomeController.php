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
        $recent_orders = [];
        return view("tradesmen.home",  compact("recent_orders"));
    }

    public function supplier(){

        $data['latest_orders'] = [];
        $data['top_selling_products'] = [];


        $data['total_users'] = 0;
        $data['total_orders'] = 0;
        $data['total_products'] = 0;
        $data['total_cancelled_orders'] = 0;

        return view("vendor.home",  $data);
    }



}
