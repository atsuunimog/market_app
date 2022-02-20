<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Scholarship extends Model
{
    public $table = "scholarships";

    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'location',
        'grade',
        'scholarship_details', 
        'commission'
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
