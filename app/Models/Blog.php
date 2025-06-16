<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    /*
        is_published
        0 = yes
        1 = no

        post_type
        0 = regular
        1 = good
    */

    protected $fillable = [
        'admin_id',
        'image',
        'title',
        'title_hindi',
        'title_gujrati',
        'description',
        'description_hindi',
        'description_gujrati',
        'post_publish_date',
        'is_published',
        'blog_category_id',
        'slug',
        'seo_tags',
        'post_type',
    ];
}
