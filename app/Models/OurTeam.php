<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OurTeam extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image',
        'name',
        'name_hindi',
        'name_gujrati',
        'description',
        'description_hindi',
        'description_gujrati',
        'company_role',
        'company_role_hindi',
        'company_role_gujrati',
        'facebook_link',
        'instagram_link',
        'linkedin_link',
        'twitter_link',
    ];
}
