<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\SchoolProfile;

class HandleSchoolProfile extends Controller
{

    public function createProfile(Request $request){
        //When page loads, check if the user has an existing profile 
        $user_id = Auth::user()->id;
        $user_count = DB::table('school_profile')->where('user_id', '=', $user_id )->count();
        if($user_count > 0){
        //user exist: fetch all existing data from data base and display it on page
            $school_data = DB::table('school_profile')->where('user_id', '=', $user_id )->get();
            return view("school/school-profile", ["school_data" => $school_data]);
        }else{
            //else user does not have an existing profile return user to page.
            return view("school/school-profile");
        }
    }

    //
    public function updateProfile(Request $request){
        //check if the user has already logged in
        $user_id = Auth::user()->id;
        $username = Auth::user()->username;

        $request->validate([
            'logo_img' => ['image', 'max:2000', 'mimes:jpg,bmp,png, jpeg'],
            'banner_img' => ['image', 'max:2000', 'mimes:jpg,bmp,png, jpeg'],
            'school_name' => ['required', 'string', 'max:255'],
            'school_email' => ['required', 'string', 'email', 'max:255'],
            'school_address' => ['required', 'string', 'max:255'],
            'phone_no' => ['required','numeric'],
            'about_school' => ['required', 'string']
        ]);

        if($request->logo_img !== null && $request->logo_img !== null){
            $logo_hash_name = $request->file('logo_img')->hashName();
            $banner_hash_name = $request->file('banner_img')->hashName();

            $request->validate([
                'logo_img' => ['image', 'max:2000', 'mimes:jpg,bmp,png, jpeg'],
                'banner_img' => ['image', 'max:2000', 'mimes:jpg,bmp,png, jpeg'],
            ]);
            if($request->file('logo_img')->isValid() && $request->file('banner_img')->isValid()){
                $request->file('logo_img')->store($username);
                $request->file('banner_img')->store($username);
                $request->file('logo_img')->store('public');
                $request->file('banner_img')->store('public');
            }

        }else if($request->logo_img !== null){
            $logo_hash_name = $request->file('logo_img')->hashName();
            $request->validate([
                'logo_img' => ['image', 'max:2000', 'mimes:jpg,bmp,png, jpeg'],
            ]);
            if($request->file('logo_img')->isValid()){
                $request->file('logo_img')->store($username);
                $request->file('logo_img')->store('public');
            }
        }else if($request->banner_img !== null){
            $banner_hash_name = $request->file('banner_img')->hashName();
            $request->validate([
                'banner_img' => ['image', 'max:2000', 'mimes:jpg,bmp,png, jpeg'],
            ]);
            if($request->file('banner_img')->isValid()){
                $request->file('banner_img')->store($username);
                $request->file('banner_img')->store('public');
            }
        }else{
            $logo_hash_name = null;
            $banner_hash_name = null;
        }

        
        //check if user wants to edit or update his user information 
        $user_count = DB::table('school_profile')->where('user_id', '=', $user_id )->count();
        if($user_count > 0){
        //update user profile 
            DB::table('school_profile')->where('user_id', '=', $user_id )->update(
                [
                    "logo_img" => $logo_hash_name, 
                    "banner_img" => $banner_hash_name, 
                    "school_name" => $request->school_name, 
                    "school_email" => $request->school_email,
                    "school_address" => $request->school_address,
                    'phone_no' => $request->phone_no,
                    'about_school' => $request->about_school
                ]);

            return redirect()->back()->with('message', 'profile updated!');
       }


        //user first time profile creation
        $school_profile = SchoolProfile::create([
            'user_id' =>   $user_id,
            'logo_img' =>  $logo_hash_name,
            'banner_img' => $banner_hash_name,
            'school_name' => $request->school_name,
            "school_email" => $request->school_email,
            'school_address' => $request->school_address,
            'phone_no' => $request->phone_no,
            'about_school' => $request->about_school
        ]);

         return redirect()->back()->with('message', 'profile created!');

    }
}
