<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;

class SliderController extends AdminController
{
    public function index()
    {
        return view('admin.slider.index');
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validated = $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        notificationMsg('success','Slider Created Successfully');

        return redirect()->route('admin.slider');
    }
}
