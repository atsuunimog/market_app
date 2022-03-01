<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HandleScholarship extends Controller
{
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
        return view("scholarship", ["scholarship_data" => $scholarship_data, "user_data" => $multi_query]);
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
            'scholarship_details' => $request->scholarship_details,
            'commission' => $request->commission
        ]);

        // return redirect("/school-scholarship");

        return redirect()->back()->with('message', '1 scholarship added!');
 
    }
}
