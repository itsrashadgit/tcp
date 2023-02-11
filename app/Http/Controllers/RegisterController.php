<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\State;
use SalimHosen\Core\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use SalimHosen\Core\Models\Contact;
use SalimHosen\Core\Models\Country;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    // use RegistersUsers;
    use RedirectsUsers;

    protected function registered(Request $request, $user)
    {

        // Mail::to($user->email)->send(new WelcomeMail($user));

        return response()->json([
            "success" => true,
            "message" =>
                $user instanceof MustVerifyEmail ?
                __("An Verification Email has been Sent to you email") :
                __("Registration Successful")
        ], Response::HTTP_OK);
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            "role" => ["required", Rule::in(["customer", "vendor"]), "max: 255"],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'email:rfc,dns', 'max:255', 'unique:users'],
            'phone' => ["required","numeric"],
            'password' => ['required', 'string', 'min:8', 'confirmed', "max: 255"],
            "state" => ["required", "max: 100"],
        ]);
    }


    protected function create(array $data)
    {
        DB::beginTransaction();
        try{

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            // assign role
            $role = Role::where("title", $data["role"])->first();
            $user->roles()->sync([$role->id]);

            Contact::create([
                "user_id" => $user->id,
                "country_id" => 1,
                "state_id" => $data['state'],
                "name" => $user->name,
                "email" => $user->email,
                "phone" => $user->phone,
                "source" => "website",
                "is_default_contact" => true,
            ]);


            DB::commit();
            return $user;

        }catch(\Exception $e){
            DB::rollBack();
            throw $e;
        }
    }

    public function register(Request $request)
    {

        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());
    }


    public function showRegister(){
        $states = State::all();
        return view('auth.register', compact('states'));
    }

}
