<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;
use DataTables;
use App\Models\AboutUsSlider;

class AboutUsSliderController extends AdminController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = AboutUsSlider::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     

                        $btn = '';

                        if(!auth()->user()->can('Slider Edit') && !auth()->user()->can('Slider Delete')){
                            $btn .='<span class="text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Access denied</span>';
                        }else{
                            if (auth()->user()->can('Slider Edit')) {
                                $btn .= '<a href="'.route('admin.aboutUs.slider.edit', [$row->id]).'" class="edit btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ';
                            }
                            if (auth()->user()->can('Slider Delete')) {
                                $btn .= '<a href="'.route('admin.aboutUs.slider.delete', [$row->id]).'" class="edit btn btn-danger btn-sm delete-btn" data-route='.route('admin.aboutUs.slider.delete', [$row->id]).'><i class="fa fa-trash" aria-hidden="true"></i></a>';
                            }
                        }

                        return $btn;
                    })
                    ->addColumn('image', function ($row) {
                        if(!empty($row->image)){
                            return '<img src="'.asset($row->image).'" width="40%" height="40%">';
                        }else{
                            return '-';
                        }
                    })

                    ->rawColumns(['action', 'image'])
                    ->make(true);
        }

        return view('admin.aboutUsSlider.index');
    }

    public function create()
    {
        return view('admin.aboutUsSlider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $fileName = uploadImagePublic(public_path('aboutUs/slider/image'), $request->file('image'));
            $image = 'aboutUs/slider/image/' . $fileName;
        }

        AboutUsSlider::create([
            'image' => $image,
        ]);

        notificationMsg('success','About Us Slider Created Successfully');
        return redirect()->route('admin.aboutUs.slider');
    }

    public function edit($id)
    {
        $slider = AboutUsSlider::find($id);
        return view('admin.aboutUsSlider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = AboutUsSlider::findOrFail($id);

        $request->validate([
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $fileName = uploadImagePublic(public_path('aboutUs/slider/image'), $request->file('image'));
            $image = 'aboutUs/slider/image/' . $fileName;
        }

        $slider->update([
            'image' => $image,
        ]);

        notificationMsg('info', 'About Us Slider Updated Successfully');
        return redirect()->route('admin.aboutUs.slider');
    }

    public function delete($id)
    {
        AboutUsSlider::find($id)->delete();
        notificationMsg('error','About Us Slider Deleted Successfully');
    }
}
