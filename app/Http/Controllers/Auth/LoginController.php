<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected function authenticated()
    {
        if(Auth::user()->s_admin == '0') //1 = Admin Login
        {
            return redirect('dashboard')->with('status','Welcome to your dashboard');
        }
        elseif(Auth::user()->s_admin == '1') // Normal or Default User Login
        {
            return redirect('/')->with('status','Logged in successfully');
        }
    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


}
