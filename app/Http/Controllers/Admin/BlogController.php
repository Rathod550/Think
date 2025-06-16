<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;
use DataTables;
use App\Models\BlogCategory;

class BlogController extends AdminController
{
    public function index(Request $request)
    {
        return view('admin.blog.index');
    }

    public function create()
    {
        $blogCategorys = BlogCategory::whereNull('parent_id')->pluck('name', 'id')->all();
        return view('admin.blog.create', compact('blogCategorys'));
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {

    }
}
