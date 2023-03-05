<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\County;
use App\Models\Portfolio;
use App\Models\Trade;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

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

        $query = request("q");
        if($query){
            $portfolios = Portfolio::where("user_id", $user->id)
                ->where("file_name", "%$query%")
                ->where("original_name", "%$query%")
                ->paginate(20)->appends(request()->query());
        }else{
            $portfolios = Portfolio::where("user_id", $user->id)->paginate(20)->appends(request()->query());
        }

        return view("user.portfolio", compact("user", "portfolios"));
    }

    public function settings(){

        $user = Auth::user();
        $counties = County::all();

        return view('user.settings', compact('user', 'counties'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        $trades = Trade::all();
        $counties = County::all();

        return view("user.profile-edit", compact("user", "trades", "counties"));
    }

    // public function updateProfile(Request $request){

    //     dd($request->all());
    // }

    public function userCounties(Request $request){

        $user = Auth::user();

        $user->counties()->sync($request->counties);

        return redirect()->back()->with("success", "Saved Successfully");

    }


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

    public function updateProfile(Request $request){

        $user = Auth::user();


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'email:rfc,dns', 'max:255', 'unique:users,email,'.$user->id],
            'phone' => ["required","numeric"],
            "state" => ["required", "max: 100"],
            "address" => ["required", "max: 255"],
            "zip_code" => ["required", "max: 100"],
        ]);


        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            "phone" => $request->phone,
            'address' => $request->address ?? null,
            'state_id' => $request->state ?? null,
            'county_id' => $request->county ?? null,
            'zip_code' => $request->zip_code ?? null,
            'business_description' => $request->business_description ?? null,
            'company_mission' => $request->company_mission ?? null,
            'company_vision' => $request->company_vision ?? null,
            'products' => $request->products ?? null,
            'services' => $request->services ?? null,
            'trade_id' => $request->trade ?? null,
            'profession_title' => $request->profession_title ?? null,
            'years_of_experience' => $request->years_of_experience ?? null,
            'education' => $request->education ?? null,
            'institution' => $request->institution ?? null,
            'work_history' => $request->work_history ?? null,
            'license' => $request->license ?? null,
            'certificates' => $request->certificates ?? null,
            'achievements' => $request->achievements ?? null,
            'ability_skills' => $request->ability_skills ?? null,
            'about_you' => $request->about_you ?? null,
        ]);

        return response()->json([
            "success" => true,
            "message" => "Updated Successfully"
        ]);
    }
}
