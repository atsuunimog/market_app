<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Scholarship;
use App\Models\Nomination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HandleScholarship extends Controller
{
    //display all affiliate link candidates
    public function displayAffiliateNominations(){
        $user_id = Auth::user()->id;
        $affiliate_code = DB::table('affiliate_profile')->where('user_id', '=', $user_id)->get("affiliate_code")[0]->affiliate_code;
        $all_aff_nomination = DB::table('nominations')->where('affiliate_code', '=', $affiliate_code)->paginate(5);
        return view("affiliate.affiliate-nominations", ["affiliate_data" => $all_aff_nomination]);
    }

    //show all school nominations
    public function showAllSchoolNominations(){
        $user_id = Auth::user()->id;
        $nomination_data = DB::table('nominations')->where('user_id', '=', $user_id)->paginate(5);
        return view('school.school-all-nominations', ["nominate_data" => $nomination_data] );
    }

    //generate edit code
    public function gen_edit_code($length_of_string) { 
        $randId = uniqid(time());
        $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz'.$randId; 
        return substr(str_shuffle($str_result), 0, $length_of_string); 
    } 

    //handle affiliate nomination 
    public function AffiliateNomination($post_id, $affiliate_id){
        $single_scholarship_data = DB::table("scholarships")
        ->where('scholarships.id', '=', $post_id)->get();
        return view('nominate-candidate', ["single_scholar_data"=> $single_scholarship_data, "post_id" => $post_id, "affiliate_code" => $affiliate_id]);
    }

    //submit affiliate nomination 
    public function StoreAffiliateNomination(Request $request, $post_id, $affiliate_id){
         //validate entries
         $request->validate([
            'child_full_name' => ['required', 'string', 'max:255'],
            'grade' => ['required', 'string', 'max:255'],
            'parent_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'address' => ['required', 'string'],
            'phone_no' => ['required','numeric'],
            'whatsapp_no' => ['required','numeric'],
        ]);

        $edit_code = $this->gen_edit_code(15);

        if($request->affiliate_code !== null){
            $request->validate(['affiliate_code' => ['string', 'max:255']]);
            $affiliate_code = $request->affiliate_code;
        }else{
            return redirect()->back()->with('Oops! try again');
        }

        //enter values into database
        $nomination = Nomination::create([
            'post_id' =>   $request->post_id,
            'user_id' =>  $request->user_id,
            'child_full_name' => $request->child_full_name,
            'class' => $request->grade,
            'parent_name' => $request->parent_name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_no' => $request->phone_no,
            'whatsapp_no' => $request->whatsapp_no,
            'edit_code' => $edit_code,
            'affiliate_code' => $affiliate_code,
            'nomination_details' => $request->nomination_details
        ]);

        $request->session()->flash('message', '1 Nomination Logged');

        $single_scholarship_data = DB::table("scholarships")
        ->where('scholarships.id', '=', $post_id)->get();

        return view('nominate-candidate', ["single_scholar_data"=> $single_scholarship_data, "post_id" => $post_id, "affiliate_code" => $affiliate_id]);
    }

    //submit nomination
    public function submitNomination(Request $request, $id){
        //validate entries
         $request->validate([
            'child_full_name' => ['required', 'string', 'max:255'],
            'grade' => ['required', 'string', 'max:255'],
            'parent_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'address' => ['required', 'string'],
            'phone_no' => ['required','numeric'],
            'whatsapp_no' => ['required','numeric'],
        ]);
    
        $edit_code = $this->gen_edit_code(15);

        //enter values into database
        $nomination = Nomination::create([
            'post_id' =>   $request->post_id,
            'user_id' =>  $request->user_id,
            'child_full_name' => $request->child_full_name,
            'class' => $request->grade,
            'parent_name' => $request->parent_name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_no' => $request->phone_no,
            'whatsapp_no' => $request->whatsapp_no,
            'edit_code' => $edit_code,
            'nomination_details' => $request->nomination_details
        ]);

        $request->session()->flash('message', '1 Nomination Logged');

        $single_scholarship_data = DB::table("scholarships")
        ->where('scholarships.id', '=', $id)->get();

        return view('single-scholarship', ["single_scholar_data"=> $single_scholarship_data, "post_id" => $id]);
    }



    //display all scholarships from a single school
    public function displaySchoolPrivateScholarship(Request $request, $username){
        //get user id 
        // $user_data  = DB::table("users")->where("username", "=", $username)->get();
        $user_id  = DB::table("users")->where("username", "=", $username)->get('id')[0]->id;
        $multi_query = DB::table("users")
            ->join('school_profile', 'users.id', '=', 'school_profile.user_id')
            ->where('users.id', '=', $user_id)
            ->limit(1)
            ->get();

        //pull all data from school scholarship
        $scholarship_data = DB::table('scholarships')->where("user_id", "=", $user_id)->paginate(5);
        //display all scholarships with current username
        return view("private-scholarship", ["scholarship_data" => $scholarship_data, "user_data" => $multi_query]);
    }

    //display all school scholarship
    public function displayAllSchoolScholarship(Request $request){
        $scholarship_data = DB::table("scholarships")
        ->paginate(10);
         return view("scholarship", ["scholarship_data" => $scholarship_data]);
    }

    //display single scholarship
    public function displaySingleScholarship(Request $request, $id){
        $single_scholarship_data = DB::table("scholarships")
        ->where('scholarships.id', '=', $id)->get();
        return view('single-scholarship', ["single_scholar_data"=> $single_scholarship_data, "post_id" => $id]);
    }

    //REUSABLES
    public function countUserScholarships(){
         //get all scholarship where id is user id 
         $u_id = Auth::user()->id;
         $count_scholarship_post = DB::table('scholarships')
         ->where('user_id', '=', $u_id)
         ->count();
         return $count_scholarship_post;
    }

    //delete scholarship
    public function deleteScholarship($id){
        //delete where user id and scholarship_id  match
        $u_id = Auth::user()->id;
        $count_scholarship_post = DB::table('scholarships')
        ->where('user_id', '=', $u_id)
        ->where('id', '=', $id)
        ->delete();
        return redirect()->back()->with('message', '1 record deleted!');
    }

    //edit scholarship
    public function editScholarship(Request $request, $id){
        //make sure that post id and the user id are match before pulling edit information
       $u_id = Auth::user()->id;
       $edit_data =  DB::table('scholarships')->where('user_id', '=', $u_id)
       ->where('id', '=', $id)->get();
       return view("school.school-scholarship", 
       [
        "editable_data" => $edit_data, 
        "edit_table" => true,
        "count_scholarship_post" => $this->countUserScholarships()
        ]);
    }

      //count all scholarships created by this user
      public function getAllScholarship(){
        //get all scholarship where id is user id
        $u_id = Auth::user()->id;
        $all_scholarship_post = DB::table('scholarships')
        ->where('user_id', '=', $u_id)
        ->paginate(5);

        return view("school.school-all-scholarship", ["all_scholarship_post" => $all_scholarship_post, "count" => 1]);
    }   

    //count all scholarships created by this user
    public function countAllScholarship(){
        $count_scholarship_post = $this->countUserScholarships();
        return view("school/school-scholarship", [
        "edit_table" => false, 
        "count_scholarship_post" => $count_scholarship_post]);
    }   


    //store function to db
    public function storeScholarship(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'grade' => ['required', 'string', 'max:255'],
            'school_name' => ['required', 'string', 'max:255'],
            'scholarship_details' => ['required', 'string'],
            'commission' => ['required', 'integer']
        ]);

        //get user id 
        $user_id = Auth::user()->id;

        //check if the post is for edit or create
        if($request->edit_scholarship_id !== null):
        $edit_id = $request->edit_scholarship_id;
        //update post where id  and user id match
        DB::table("scholarships")->where('user_id', $user_id)->where('id', $edit_id)
        ->update([
            'title' =>  $request->title,
            'location' => $request->location,
            'grade' => $request->grade,
            'school_name' => $request->school_name,
            'scholarship_details' => $request->scholarship_details,
            'commission' => $request->commission
        ]);
       return redirect()->back()->with('message', '1 record updated!');

        endif;


        $scholarship = Scholarship::create([
            'user_id' =>   $user_id,
            'title' =>  $request->title,
            'location' => $request->location,
            'grade' => $request->grade,
            'school_name' => $request->school_name,
            'scholarship_details' => $request->scholarship_details,
            'commission' => $request->commission
        ]);

        // return redirect("/school-scholarship");

        return redirect()->back()->with('message', '1 scholarship added!');
 
    }
}
