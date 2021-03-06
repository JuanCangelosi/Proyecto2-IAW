<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function handleProviderCallback()
    {
        $github = Socialite::driver('github')->user();
        $user = User::whereEmail($github->getEmail())->first();    
        if (!$user) {
            $user = User::create([
                'email' => $github->getEmail(),
                'name' => $github->getName(),
                'password' => '<no_pass>',
            ]);
        }
        auth()->login($user);
        return redirect()->to('/home');
    }
}
