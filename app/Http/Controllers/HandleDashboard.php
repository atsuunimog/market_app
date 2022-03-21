<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class HandleDashboard extends Controller
{
    //handle display for dashboard
    public function displayDashboard(Request $request){
        $user_id = Auth::user()->id;
        if(Auth::user()->role == "school"):
            $multi_query = DB::table("users")
            ->join('school_profile', 'users.id', '=', 'school_profile.user_id')
            ->where('users.id', '=', $user_id)
            ->limit(1)

            ->get();
            return view('school/dashboard', ['school_data' => $multi_query]);
        elseif(Auth::user()->role == "affiliate"):

            //check if user has updated his profile
            $user_count = DB::table('affiliate_profile')->where('user_id', '=', $user_id )->count();
            if($user_count > 0){
                //get user affiliate code 
                $code = DB::table('affiliate_profile')->where('user_id', '=', $user_id )->get('affiliate_code')[0];
                $aff_code = $code->affiliate_code;
                $access = true;
            }else{
                $aff_code = "";
                $access = false;
            }

            $all_scholarship = DB::table('scholarships')->paginate(5);
            //fetch all scholarships from database
            return view('affiliate/dashboard',
             ["all_scholarship" => $all_scholarship, "access" => $access, 'code' => $aff_code ]);
        else:


        endif;
    }

}

