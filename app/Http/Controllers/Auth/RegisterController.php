<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'lastname' =>['required'],
            'phonenumber'=>['required', 'string', 'max:13'],
            'specificl'=>['required'],
            'address2'=>['required'],
            'county'=>['required'],
            'constituency'=>['required'],
            'Ward'=>['required'],
            'landmark'=>['required'],
        ]);
    }

    protected function create(array $data)
    {

        return User::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'lname' =>$data['lastname'],
            'phonenumber' =>$data['phonenumber'],
            'specificl' =>$data['specificl'],
            'address2' =>$data['address2'],
            'county' =>$data['county'],
            'constituency' =>$data['constituency'],
            'Ward' =>$data['Ward'],
            'landmark' =>$data['landmark'],

        ]);
    }
}

//protected function create(array $data)
//{

    //return User::create([

        //'name' => $data['name'],
       // 'email' => $data['email'],
       // 'password' => Hash::make($data['password']),
    //]);
//}
//}
