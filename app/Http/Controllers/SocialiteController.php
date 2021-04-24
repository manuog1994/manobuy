<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    public function redirectSocialite() {
        return Socialite::driver('google')->redirect();
    }

    public function callbackSocialite() {
        try {
        
            $user = Socialite::driver('google')->user();
     
            $finduser = User::where('google_id', $user->id)->first();
       
            if($finduser){
     
                Auth::login($finduser);

                if($finduser->email_verified_at == null)
                    return redirect(route('verification.notice'));

                return redirect('/');
     
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
    
                Auth::login($newUser);
     
                return redirect('/');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function redirectFacebook() {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook() {
        try {
        
            $user = Socialite::driver('facebook')->user();
 
            $finduser = User::where('facebook_id', $user->id)->first();

            if($finduser){
     
                Auth::login($finduser);

                if($finduser->email_verified_at == null)
                    return redirect(route('verification.notice'));

                return redirect('/');
     
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
    
                Auth::login($newUser);
     
                return redirect('/');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
