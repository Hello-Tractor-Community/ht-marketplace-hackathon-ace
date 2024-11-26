<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard'); // Replace with your desired route
        }

        $this->error("Invalid Login Credentials");
        return redirect()->back();
    }

    public function register(Request $request){
        if ($request->password !== $request->password_confirmation) {
            $this->error('Passwords do not match!');
            return redirect()->back(); // Preserve the user's input except for passwords
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->company = $request->company;
        $user->job = $request->job;
        $user->description = $request->description;
        $user->profile = $request->profile ?? '/assets/images/profiles/main.png';
        $user->password = bcrypt($request->password);
        $user->save();
        $this->success("Saved Successfully");
        return redirect()->back();
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $user = User::where('email', $googleUser->email)->first();
        if(!$user)
        {
            $user = new User();
            $user->name =$googleUser->name;
            $user->email = $googleUser->email;
            $user->email_verified_at = Carbon::now();
            $user->password = Hash::make(rand(100000,999999));
            $user->save();
            //$user = User::create(['name' => $googleUser->name, 'email' => $googleUser->email,'email_verified_at'=>Carbon::now(), 'password' => Hash::make(rand(100000,999999)),]);
        }

        Auth::login($user,true);

        return redirect('/');
    }
}
