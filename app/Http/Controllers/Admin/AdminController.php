<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class AdminController extends Controller
{
    public function __construct(){
        view()->share('adminTheme','adminTheme.default');
    }

    public function crudMessage($type, $module)
    {
        switch ($type) {
            case 'add':
                return $module . ' created successfully';
                break;
            case 'delete':
                return $module . ' deleted successfully';
                break;
            case 'info':
                return $module . ' updated successfully';
                break;
            
            default:
                # code...
                break;
        }
    }
}
