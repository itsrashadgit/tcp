<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Auth;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function uploadPortfolio(Request $request){

        $request->validate([
            "photo" => [
                'required',
                'image',
                'mimes:jpeg,jpg,png,webp'
            ],
        ]);

        $user = Auth::user();

        $portfolio_photo = uploadImage($request, "photo", "uploads/portfolio/", 600, 600);

        $portfolio = new Portfolio();
        $portfolio->user_id = $user->id;
        $portfolio->file_name = $portfolio_photo;
        $portfolio->original_name = $request->file("photo")->getClientOriginalName();
        $portfolio->save();

        return redirect()->back()->with("success", "Uploaded Successfully");

    }
}
