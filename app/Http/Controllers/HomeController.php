<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    function allvenue()
    {
        return view('allvenue');
    }

    function singlevenue()
    {
        return view('singlevenue');
    }
    function houranalysis()
    {
        return view('houranalysis');
    }
    function currentdayanalysis()
    {
        return view('currentdayanalysis');
    }
    function dayraw()
    {
        return view('day_raw_analysis');
    }
    function maptrafficdata()
    {
        return view('map_traffic');
    }
}
