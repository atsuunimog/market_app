<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HandleBlog extends Controller
{

    //display all school blog
    public function displayAllSchoolBlogs(){
        $all_blogs = DB::table('blogs')->paginate(5);
        return view("blog", ["blog_data"=> $all_blogs]);
    }

    //update likes and comments 
    public function handleBlogComments(Request $request, $id){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' =>  ['required', 'string', 'email', 'max:255'],
            'comment' => ['required']
        ]);

         if($request->comment !== null){
            Comment::create([
                'post_id' => $id, 
                'name' => $request->name,
                'email' => $request->email,
                'comment' => $request->comment
             ]);
             $request->session()->flash('message', 'Comment posted successfully!');
         }else{
            return redirect()->back()->with('error-message', 'Enter a comment');
         }

           //get current blog comments for this post
           $blog_comments = DB::table("comments")->where('post_id', '=', $id)->get();

           $total_comments = DB::table("comments")->where('post_id', '=', $id)->count();
         
        //get current blog details of this user
        $blog_details = DB::table('blogs')->where('id', '=', $id)->get();
        $user_id = DB::table('blogs')->where('id', '=', $id)->get("user_id")[0]->user_id;

        //get all blog post by this user 
        $user_blogs = DB::table('blogs')->where('user_id', '=', $user_id)->limit(4)->get();
        return view("blog-content", [
        "current_blog_data"=> $blog_details, 
        "other_blog_data" => $user_blogs,
        "all_comments" => $blog_comments,
        "comment_count" => $total_comments
        ]
    );
    }


    //handle display for all blogs 
    public function showBlogDetails(Request $request, $id){
        //add up views per 
        
        if($request->like !== null){
            DB::table('blogs')->where('id', '=', $id)->update(
                ["upvote" => DB::raw('upvote + 1')]
            );
        }
    
        DB::table('blogs')->where('id', '=', $id)->update(
            ["views" => DB::raw('views + 1')]
        );

         //get current blog comments for this post
         $blog_comments = DB::table("comments")->where('post_id', '=', $id)->get();

         $total_comments = DB::table("comments")->where('post_id', '=', $id)->count();
 
        //get current blog details of this user
        $blog_details = DB::table('blogs')->where('id', '=', $id)->get();
        $user_id = DB::table('blogs')->where('id', '=', $id)->get("user_id")[0]->user_id;

        //get all blog post by this user 
        $user_blogs = DB::table('blogs')->where('user_id', '=', $user_id)->limit(4)->get();
        return view("blog-content", [
         "current_blog_data"=> $blog_details,
         "other_blog_data" => $user_blogs,
         "all_comments" => $blog_comments,
         "comment_count" => $total_comments
        ]);
    }

    //REUSABLES
    public function countUserBlogs(){
         $u_id = Auth::user()->id;
         $count_blog_post = DB::table('blogs')
         ->where('user_id', '=', $u_id)
         ->count();
         return $count_blog_post;
    }

    //delete scholarship
    public function deleteBlog($id){
        $u_id = Auth::user()->id;
        $count_blog_post = DB::table('blogs')
        ->where('user_id', '=', $u_id)
        ->where('id', '=', $id)
        ->delete();
        return redirect()->back()->with('message', '1 record deleted!');
    }

    //edit scholarship
    public function editBlog(Request $request, $id){
       $u_id = Auth::user()->id;
       $edit_data =  DB::table('blogs')->where('user_id', '=', $u_id)
       ->where('id', '=', $id)->get();
       return view("school.school-blog", 
       [
        "editable_data" => $edit_data, 
        "edit_table" => true,
        "count_blog_post" => $this->countUserBlogs()
      ]);
    }

    //display school blog landing page for school user.
    public function displaySchoolBlogPage(){
        return view("school.school-blog", ["count_blog_post" => $this->countUserBlogs()]);
    }

    //all scholarships created by this user
    public function displayAllBlogs(){
        $u_id = Auth::user()->id;
        $all_blog_post = DB::table('blogs')
        ->where('user_id', '=', $u_id)
        ->paginate(5);
        return view("school.school-all-blog", ["all_blog_data" => $all_blog_post,
        "count_blog_post" => $this->countUserBlogs(), "count" => 1]);
    }   

    //count all scholarships created by this user
    // public function countAllScholarship(){
    //     $count_scholarship_post = $this->countUserScholarships();
    //     return view("school/school-scholarship", [
    //     "edit_table" => false, 
    //     "count_scholarship_post" => $count_scholarship_post]);
    // }   

    //store function to db
    public function storeBlog(Request $request)
    {
        $user_id = Auth::user()->id;
        $request->validate([
            'blog_title' => ['required', 'string', 'max:255'],
            'blog_content' => ['required', 'string'],
            'school_name' => ['required', 'string', 'max:255'],
        ]);
        if($request->file('blog_image') !== null){
            $request->validate([
            'blog_image' => ['required', 'image', 'max:2000', 'mimes:jpg,bmp,png, jpeg'],
            ]);
            $logo_hash_name = $request->file('blog_image')->hashName();
            if($request->file('blog_image')->isValid()){
            $request->file('blog_image')->store('public');
            }else{
            return redirect()->back()->with('message', 'Oops! Image upload error. Please try again');
            }
        }else{
            if($request->edit_blog_id == null):
                return redirect()->back()->with('error-message', 'Upload an image');
            endif;
        }

        if($request->edit_blog_id !== null):

            $request->validate([
                'edit_blog_id' => ['required'],
                'edit_blog_image' => ['required'],
            ]);
            
            //check if user is updating an image or using the old image
            if($request->edit_blog_id == null):
                $logo_hash_name = $request->edit_blog_image;
            else:
                $logo_hash_name = $request->file('blog_image')->hashName();
            endif;

            $edit_id = $request->edit_blog_id;

        DB::table("blogs")->where('user_id', $user_id)->where('id', $edit_id)
        ->update([
            'blog_image' =>  $logo_hash_name,
            'blog_title' => $request->blog_title,
            'blog_content' => $request->blog_content,
            'school_name' => $request->school_name
        ]);
       return redirect()->back()->with('message', '1 record updated!');

        endif;

        $blog = Blog::create([
            'user_id' =>   $user_id,
            'blog_image' =>  $logo_hash_name,
            'blog_title' =>  $request->blog_title,
            'blog_content' => $request->blog_content,
            'school_name' => $request->school_name
        ]);

        return redirect()->back()->with('message', '1 Blog added!');
    }
}
