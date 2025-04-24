<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use HasFactory, SoftDeletes;

    /* 
        action_type :
        0 = create
        1 = edit
        2 = delete

        is_read :
        0 = pending
        1 = complete
    */

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'message',
        'is_read',
        'action_type'
    ];
}
