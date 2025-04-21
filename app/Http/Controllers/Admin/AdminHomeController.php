<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;

class AdminHomeController extends AdminController
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
