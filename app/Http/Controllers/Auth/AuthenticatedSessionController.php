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
    public function createUser()
    {
        return view('auth.user-login');
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
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $db_email = $request->all("email")["email"];

        // $acct_type = DB::table('users')
        //     ->select('account_type')
        //     ->where('email', '=', $db_email)
        //     ->get()[0]->account_type;

        // if($acct_type == "sch_acct"):
        //     return redirect()->intended(RouteServiceProvider::SCHOOL_HOME);
        // else:
        //     return redirect()->intended(RouteServiceProvider::AFFILIATE_HOME);
        // endif;

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

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
