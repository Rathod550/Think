<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\BlogCategory;
use App\Models\Note;
use App\Models\TraficEmail;

class AdminHomeController extends AdminController
{
    public function index()
    {
        $userCount = User::count();
        $userRoleCount = Role::count();
        $userBlogCategoryCount = BlogCategory::count();
        if(auth()->user()->email == 'admin@gmail.com'){
            $userNoteCount = Note::count();
        }else{
            $userNoteCount = Note::where('user_id', auth()->user()->id)->count();
        }
        $traficEmails = TraficEmail::count();

        return view('admin.dashboard', compact('userCount', 'userRoleCount', 'userBlogCategoryCount', 'userNoteCount', 'traficEmails'));
    }
}
