<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\AffiliateUser;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    public function createSchool()
    {
        return view('auth.school-register');
    }

    public function createAffiliate()
    {
        return view('auth.affiliate-register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeSchool(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'school_name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        // dd($request);
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'school_name' => $request->school_name,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }

    //generate referral code
   public function referral_code($length_of_string, $email) { 
        $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz'.$email; 
        return substr(str_shuffle($str_result), 0, $length_of_string); 
    } 

    //store affiliate users into database
    public function storeAffiliate(Request $request)
    {
        
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:affiliate_users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // generate referral code
        $referral_code = $this->referral_code(10, $request->email);

        $affiliate = AffiliateUser::create([
            'username' => $request->username,
            'email' => $request->email,
            'referral_code' => $referral_code,
            'password' => Hash::make($request->password),
        ]);

  
        event(new Registered($affiliate));

        Auth::login($affiliate);

        return redirect(RouteServiceProvider::HOME);
    }


}
