<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateProfile extends Model
{
    use HasFactory;

    public $table = "affiliate_profile";

    protected $fillable = [
        'user_id',
        'profile_img',
        'affiliate_name',
        'affiliate_email',
        'affiliate_address',
        'affiliate_phone_no',
        'about_affiliate',
        'affiliate_code'
    ];

}
