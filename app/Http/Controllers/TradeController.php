<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function index(){

        $trades = Trade::orderBy("name", "asc")->get();
        return view("trade-list", compact("trades"));
    }
}
