<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HandleHomepage extends Controller
{
    public function displayHomePage(){
        //get all lastest 10 scholarships
       $all_scholarship =  DB::table('scholarships')
       ->inRandomOrder()
       ->limit(20)
       ->get();

        //get all schools data from profile
       $all_schools =  DB::table('school_profile')
       ->join('users', 'school_profile.user_id', '=', 'users.id')
       ->paginate(5); 

       return view("welcome", ["all_scholar" => $all_scholarship, "all_school" => $all_schools]);
    }
}
