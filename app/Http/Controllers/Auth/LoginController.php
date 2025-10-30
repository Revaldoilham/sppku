<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller 
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    function getViewLogin(){
        return view('/login');
    }
    function authenticate(){
        $credential = Request::validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            Request::session()->regenerate();
            return redirect()->intended('/index');
        }
        return back()->with('error', 'Gagal Login');
    }
    function logout(){
        Auth::logout();

        Request::session()->invalidate();
        Request::session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
}
