<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function createSchoolUser()
    {
        return view('auth.school-login');
    }

    public function createAffiliateUser()
    {
        return view('auth.affiliate-login');
    }

    public function create_user_admin()
    {
        return view('auth.admin-login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeSchoolUser(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

       return redirect()->intended(RouteServiceProvider::HOME);
    }


    public function storeAffiliateUser(LoginRequest $request)
    {

        $request->authenticate();

        $request->session()->regenerate();

       return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        Auth::guard('affiliate')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
