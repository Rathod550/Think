<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\Slider;
use DataTables;

class SliderController extends AdminController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Slider::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     

                        $btn = '';

                        if(!auth()->user()->can('Slider Edit') && !auth()->user()->can('Slider Delete')){
                            $btn .='<span class="text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Access denied</span>';
                        }else{
                            if (auth()->user()->can('Slider Edit')) {
                                $btn .= '<a href="'.route('admin.slider.edit', [$row->id]).'" class="edit btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ';
                            }
                            if (auth()->user()->can('Slider Delete')) {
                                $btn .= '<a href="'.route('admin.slider.delete', [$row->id]).'" class="edit btn btn-danger btn-sm delete-btn" data-route='.route('admin.slider.delete', [$row->id]).'><i class="fa fa-trash" aria-hidden="true"></i></a>';
                            }
                        }

                        return $btn;
                    })
                    ->addColumn('formate', function ($row) {
                        return $row->formate == 0 ? 'Center' : 'Left';
                    })
                    ->addColumn('image', function ($row) {
                        if(!empty($row->image)){
                            return '<img src="'.asset($row->image).'" width="40%" height="40%">';
                        }else{
                            return '-';
                        }
                    })

                    ->rawColumns(['action', 'formate', 'image'])
                    ->make(true);
        }

        return view('admin.slider.index');
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'formate' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $fileName = uploadImagePublic(public_path('slider/image'), $request->file('image'));
            $image = 'slider/image/' . $fileName;
        }

        Slider::create([
            'image' => $image,
            'formate' => $request->formate,
            'title' => $request->title,
            'title_hindi' => getLanguage($request->title, 'hi'),
            'title_gujrati' => getLanguage($request->title, 'gu'),
            'description' => $request->description,
            'description_hindi' => getLanguage($request->description, 'hi'),
            'description_gujrati' => getLanguage($request->description, 'gu')
        ]);

        notificationMsg('success','Slider Created Successfully');
        return redirect()->route('admin.slider');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $request->validate([
            'formate' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);


        $image = $slider->image ?? '';
        if ($request->hasFile('image')) {
            $fileName = uploadImagePublic(public_path('slider/image'), $request->file('image'));
            $image = 'slider/image/' . $fileName;
        }

        $slider->update([
            'image' => $image,
            'formate' => $request->formate,
            'title' => $request->title,
            'title_hindi' => getLanguage($request->title, 'hi'),
            'title_gujrati' => getLanguage($request->title, 'gu'),
            'description' => $request->description,
            'description_hindi' => getLanguage($request->description, 'hi'),
            'description_gujrati' => getLanguage($request->description, 'gu')
        ]);

        notificationMsg('info', 'Slider Updated Successfully');
        return redirect()->route('admin.slider');
    }

    public function delete($id)
    {
        Slider::find($id)->delete();
        notificationMsg('error','Slider Deleted Successfully');
    }
}
