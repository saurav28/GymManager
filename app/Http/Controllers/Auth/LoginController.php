<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\User;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/users';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
    protected function attemptLogin(Request $request)
    {
            
        $user = User::where('email', $request->email)
                         ->where('password', $request->password)
                         ->where('roles','admin')
                         ->first();
    
        if(!isset($user)){
            return false;
        }
        Auth::login($user);
        return true;
    
    }
    

    public function authenticate(Request $request)
    {
        Log::info("email id is ". $request->email);
        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     // Authentication passed...
        //     return redirect()->intended('dashboard');
        // }
        // auth attempts to login with hashed password which we don't have in our 
        //db    

        $user = \Users::where([
            'email' => $request->email, 
            'password' => $request->password
        ])->first();
        
        if($user)
        {
            Auth::login($user);
            return redirect()->route('users');
        }
    }

    public function logout () {
        Auth::logout();
        return redirect('/login');
    }
}
