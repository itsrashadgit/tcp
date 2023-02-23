<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{

    public function updateCoverPhoto(Request $request){

        $request->validate([
            "cover_photo" => [
                'required',
                'image',
                'mimes:jpeg,jpg,png,webp'
            ],
        ]);

        $user = Auth::user();

        $cover_photo = uploadImage($request, "cover_photo", "images/user/", 800, 300);

        deleteOldFile($user->cover_photo, "images/user");

        $user->cover_photo = $cover_photo;
        $user->update();

        return response()->json(asset("images/user/$user->cover_photo"), 200);

    }
}
