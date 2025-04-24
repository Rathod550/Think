<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;

class NotificationController extends AdminController
{
    public function removeBellNumber(){
        DB::table('notifications')
        ->where('receiver_id', auth()->id())
        ->where('is_read', 0)
        ->update(['is_read' => 1]);
    }
}
