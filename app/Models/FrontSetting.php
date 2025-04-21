<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'value',
        'page_name'
    ];
}
