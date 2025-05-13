<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{

    /*
        formate ( Text formate )
        0 = center
        1 = left
    */

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image',
        'title',
        'title_hindi',
        'title_gujrati',
        'description',
        'description_hindi',
        'description_gujrati',
        'formate'
    ];
}
