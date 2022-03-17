<?php

namespace App\Http\Controllers;

use App\Models\AffiliateProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HandleAffiliateProfile extends Controller
{

//generate affiliate
    public function displayAffiliateProfile(){
        $user_id = Auth::user()->id;
        $affiliate_data =  DB::table('affiliate_profile')->where('user_id', '=', $user_id )->get();
        return view("affiliate.affiliate-profile", ["affiliate_data" => $affiliate_data]);
    }


     //generate referral code
    public function referral_code($length_of_string, $email) { 
        $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz'.$email; 
        return substr(str_shuffle($str_result), 0, $length_of_string); 
    } 

     //
     public function updateProfile(Request $request){
        $user_id = Auth::user()->id;
        $username = Auth::user()->username;

        $request->validate([
            'affiliate_name'     =>  ['required', 'string', 'max:255'],
            'affiliate_email'    =>  ['required', 'string', 'email', 'max:255'],
            'affiliate_address'  =>  ['required', 'string', 'max:255'],
            'affiliate_phone_no' =>  ['required','numeric'],
            'about_affiliate'    =>  ['required', 'string']
        ]);

        if($request->file('profile_img') !== null){
            $request->validate([
            'profile_img' => ['required', 'image', 'max:2000', 'mimes:jpg,bmp,png, jpeg'],
            ]);

            $logo_hash_name = $request->file('profile_img')->hashName();

            if($request->file('profile_img')->isValid()){
                $request->file('profile_img')->store('public');
            }else{
                return redirect()->back()->with('message', 'Oops! Image upload error. Please try again');
            }

        }else{
            if($request->edit_img_profile == null):
                return redirect()->back()->with('error-message', 'Upload an image');
            else:
                $logo_hash_name = $request->edit_img_profile;
            endif;
        }

          //check if user wants to edit or update his user information 
          $user_count = DB::table('affiliate_profile')->where('user_id', '=', $user_id )->count();

          if($user_count > 0){
          //update user profile ;
              DB::table('affiliate_profile')->where('user_id', '=', $user_id )->update(
              [
                  "profile_img"         => $logo_hash_name, 
                  "affiliate_name"      => $request->affiliate_name, 
                  "affiliate_email"     => $request->affiliate_email, 
                  "affiliate_address"   => $request->affiliate_address,
                  "affiliate_phone_no"  => $request->affiliate_phone_no,
                  "about_affiliate"     => $request->about_affiliate
              ]);
              return redirect()->back()->with('message', 'profile updated!');
          }

        // generate referral code
         $referral_code = $this->referral_code(10, $request->affiliate_email);
          
          //user first time profile creation
          AffiliateProfile::create([
                "user_id"           => $user_id,
                "profile_img"       => $logo_hash_name, 
                "affiliate_name"    => $request->affiliate_name, 
                "affiliate_email"   => $request->affiliate_email, 
                "affiliate_address" => $request->affiliate_address,
                "affiliate_phone_no"=> $request->affiliate_phone_no,
                "about_affiliate"   => $request->about_affiliate,
                "affiliate_code"    => $referral_code
          ]);

          return redirect()->back()->with('message', 'profile created!');
    
    }//


}
