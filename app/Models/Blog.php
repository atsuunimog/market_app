<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    public $table = "blogs";

    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'blog_image',
        'blog_title',
        'blog_content',
        'comment',
        'school_name',
        'upvote',
        'downvote',
        'views'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

}
