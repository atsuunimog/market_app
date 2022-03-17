<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Nomination extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "post_id",
        "user_id",
        "child_full_name", 
        "class",
        "parent_name",
        "email",
        "address",
        "phone_no", 
        "whatsapp_no", 
        "edit_code",
        "nomination_details",
        "affiliate_code"
    ];

}
