<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;

class SocialAuthController extends Controller
{
  /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $fbuser = Socialite::driver('facebook')->user();
      //  dd($fbuser);
        $user = User::whereEmail($fbuser->getEmail())->first();    
        if (!$user) {
            $user = User::create([
                'email' => $fbuser->getEmail(),
                'name' => $fbuser->getName(),
                'password' => '<no_pass>',
            ]);
        }
        auth()->login($user);
        
        return redirect()->to('/home');
    }
    
    
       /**
     * Return user if exists; create and return if doesn't
     *
     * @param $fbUser
     * @return User
    
    private function findOrCreateUser($fbUser)
    {

        if ($authUser = User::where('facebook_id', $fbUser->id)->first()) {
            return $authUser;
        }

        return User::create([
            'name' => $fbUser->name,
            'email' => $fbUser->email,
            'facebook_id' => $fbUser->id,
            'avatar' => $fbUser->avatar
        ]);

    } */
}
