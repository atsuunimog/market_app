<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolProfile extends Model
{
    use HasFactory;

    public $table = "school_profile";

    protected $fillable = [
        'user_id',
        'logo_img',
        'banner_img',
        'school_name',
        'school_email',
        'school_address', 
        'phone_no', 
        'about_school'
    ];
}
