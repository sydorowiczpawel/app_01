<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{

    use RegistersUsers;

    // protected $redirectTo = '/registered';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastNName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    // protected function create(array $data)
    // {
    //     return User::create([
    //         'firstName' => $data['firstName'],
    //         'lastName' => $data['lastName'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function create(Request $request)
    {

		// $pass_number = $request -> input('pass_number');
		$firstName = $request->input('firstName');
		$lastName = $request->input('lastName');
		$email = $request->input('email');
        $password = Hash::make($request->input('password'));

		DB::table("users")
		->insert(
			[
				'firstName'=>$firstName,
				'lastName'=>$lastName,
				'email'=>$email,
				'password'=>$password,
				]
			);

		return redirect('home');
    }
}
