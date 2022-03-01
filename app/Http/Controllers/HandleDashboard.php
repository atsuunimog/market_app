<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class HandleDashboard extends Controller
{
    //handle display for dashboard
    public function displayDashboard(Request $request){
        if(Auth::user()->role == "school"):
            $user_id = Auth::user()->id;
            $multi_query = DB::table("users")
            ->join('school_profile', 'users.id', '=', 'school_profile.user_id')
            ->where('users.id', '=', $user_id)
            ->limit(1)
            ->get();

            return view('school/dashboard', ['school_data' => $multi_query]);
        else:
            return view('affiliate/dashboard');
        endif;
    }

}
