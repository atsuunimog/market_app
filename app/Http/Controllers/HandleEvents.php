<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Events;

use Illuminate\Http\Request;

class HandleEvents extends Controller
{
    //create events
    public function createEvent(Request $request){
        $user_id  = Auth::user()->id;
        $username =  Auth::user()->username;

        $request->validate([
            'event_title'   => ['required', 'string', 'max:255'],
            'event_date'    => ['required', 'string', 'max:255'],
            'event_details' => ['required', 'string'],
        ]);

         //check if the post is for edit or create
         if($request->post_id !== null):
            $edit_id = $request->edit_events_id;
            //update post where id  and user id match
            DB::table("events")->where('user_id', $user_id)->where('id', $request->post_id)
            ->update([
                'event_title' =>  $request->event_title,
                'event_date' => $request->event_date,
                'event_details' => $request->event_details
            ]);

            return redirect()->back()->with('message', '1 event updated!');
            endif;
    
            Events::create([
                'user_id'       => $user_id,
                'username'      => $username,
                'event_title'   => $request->event_title,
                'event_date'    => $request->event_date,
                'event_details' => $request->event_details
            ]);
    
            return redirect()->back()->with('message', '1 event added!');
    }

    //edit school events
    public function editEvent(Request $request, $id){
        //make sure that post id and the user id are match before pulling edit information
        $u_id = Auth::user()->id;
        $edit_data =  DB::table('events')->where('user_id', '=', $u_id)
        ->where('id', '=', $id)->get();
        return view("school.school-events", 
        [
         "editable_data" => $edit_data, 
         "edit_table" => true,
         ]);
    }


      //delete scholarship
      public function deleteEvent($id){
        //delete where user id and scholarship_id  match
        $u_id = Auth::user()->id;
        DB::table('events')
        ->where('user_id', '=', $u_id)
        ->where('id', '=', $id)
        ->delete();
        return redirect()->back()->with('message', '1 record deleted!');
    }

    //displayAllevents public
    public function displayAllEventsPublic(Request $request, $username){
        //get user id with username
        $user_id = DB::table("users")->where('username', '=', $username)->get()[0]->id; 
        //get all information from user profile 
        $profile_info  = DB::table("school_profile")->where('user_id', '=', $user_id)->get();
        //select all event from this user id
        $all_events = DB::table("events")->where('user_id', '=', $user_id)->paginate(10);
        return view("school-events", ["all_events" => $all_events, "profile_info"=>$profile_info]);
    }

    public function displayAllEvents(){  //count all scholarships created by this user
          //get all scholarship where id is user id
          $u_id = Auth::user()->id;
          $all_event_post = DB::table('events')
          ->where('user_id', '=', $u_id)
          ->paginate(5);
          return view("school.school-all-events", ['all_event_post' => $all_event_post]);
    }


}




