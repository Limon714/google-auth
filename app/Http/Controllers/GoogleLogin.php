<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleLogin extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }



    public function callback(){
        $user = Socialite::driver('google')->user();

        //Find User
        $findUser = User::where('google_id', $user->id)->first();

        if($findUser){
            Auth::login($findUser);
        }else{
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id'=> $user->id
            ]);
            Auth::login($newUser);
        }

        return redirect('/dashboard');
    }

    // GitHub 

    public function GitHubRedirect(){
        return Socialite::driver('github')->redirect();
    }


    
    public function GitHubCallback(){
        $user = Socialite::driver('github')->user();

        //Find User
        $findUser = User::where('github_id', $user->id)->first();

        if($findUser){
            Auth::login($findUser);
        }else{
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'github_id'=> $user->id
            ]);
            Auth::login($newUser);
        }

        return redirect('/dashboard');
    }

}
