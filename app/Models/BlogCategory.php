<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use HasFactory, SoftDeletes;

    /*
        status
        0 = inactive
        1 = active
    */

    protected $fillable = [
        'name',
        'status',
        'image',
        'parent_id',
        'slug'
    ];
}
