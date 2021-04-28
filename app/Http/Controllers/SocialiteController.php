<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\NewUserReceived;
use App\Mail\NewUserSendReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectSocialite() {
        return Socialite::driver('google')->redirect();
    }

    public function callbackSocialite() {
        try {
        
            $user = Socialite::driver('google')->user();
            
/*             if(!User::where('google_id', $user->id)->first())
            return redirect(route('home'))->with('alerta', __('ui.alertUser')); */
            
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
                
                Mail::to('manuelortegagaliano@gmail.com')->send(new NewUserReceived($newUser));
                Mail::to($newUser['email'])->send(new NewUserSendReceived($newUser));
     
                return redirect('/')->with('nuevo', 'Tu usuario ha sido registrado correctamente');;
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

/*             if(!User::where('facebook_id', $user->id)->first())
            return redirect(route('home'))->with('alerta', __('ui.alertUser')); */
 
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

                Mail::to('manuelortegagaliano@gmail.com')->send(new NewUserReceived($newUser));
                Mail::to($newUser['email'])->send(new NewUserSendReceived($newUser));
     
                return redirect('/')->with('nuevo', 'Tu usuario ha sido registrado correctamente');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
