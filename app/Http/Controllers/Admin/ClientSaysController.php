<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\ClientSays;
use DataTables;

class ClientSaysController extends AdminController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = ClientSays::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     

                        $btn = '';

                        if(!auth()->user()->can('Client Says Edit') && !auth()->user()->can('Client Says Delete')){
                            $btn .='<span class="text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Access denied</span>';
                        }else{
                            if (auth()->user()->can('Client Says Edit')) {
                                $btn .= '<a href="'.route('admin.client.says.edit', [$row->id]).'" class="edit btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ';
                            }
                            if (auth()->user()->can('Client Says Delete')) {
                                $btn .= '<a href="'.route('admin.client.says.delete', [$row->id]).'" class="edit btn btn-danger btn-sm delete-btn" data-route='.route('admin.client.says.delete', [$row->id]).'><i class="fa fa-trash" aria-hidden="true"></i></a>';
                            }
                        }

                        return $btn;
                    })
                    ->addColumn('image', function ($row) {
                        if(!empty($row->image)){
                            return '<img src="'.asset($row->image).'" width="100px" height="100px">';
                        }else{
                            return '-';
                        }
                    })

                    ->rawColumns(['action', 'image'])
                    ->make(true);
        }

        return view('admin.clientSays.index');
    }

    public function create()
    {
        return view('admin.clientSays.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'name_hindi' => 'required',
            'name_gujrati' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $fileName = uploadImagePublic(public_path('clientSays/image'), $request->file('image'));
            $image = 'clientSays/image/' . $fileName;
        }

        ClientSays::create([
            'image' => $image,
            'name' => $request->name,
            'name_hindi' => getLanguage($request->name_hindi, 'hi'),
            'name_gujrati' => getLanguage($request->name_gujrati, 'gu'),
            'description' => $request->description,
            'description_hindi' => getLanguage($request->description, 'hi'),
            'description_gujrati' => getLanguage($request->description, 'gu')
        ]);

        notificationMsg('success','Client Says Created Successfully');
        return redirect()->route('admin.client.says');
    }

    public function edit($id)
    {
        $clientSay = ClientSays::find($id);
        return view('admin.clientSays.edit', compact('clientSay'));
    }

    public function update(Request $request, $id)
    {
        $clientSay = ClientSays::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'name_hindi' => 'required',
            'name_gujrati' => 'required',
            'description' => 'required'
        ]);


        $image = $clientSay->image ?? '';
        if ($request->hasFile('image')) {
            $fileName = uploadImagePublic(public_path('clientSays/image'), $request->file('image'));
            $image = 'clientSays/image/' . $fileName;
        }

        $clientSay->update([
            'image' => $image,
            'name' => $request->name,
            'name_hindi' => getLanguage($request->name_hindi, 'hi'),
            'name_gujrati' => getLanguage($request->name_gujrati, 'gu'),
            'description' => $request->description,
            'description_hindi' => getLanguage($request->description, 'hi'),
            'description_gujrati' => getLanguage($request->description, 'gu')
        ]);

        notificationMsg('info', 'Client Says Updated Successfully');
        return redirect()->route('admin.client.says');
    }

    public function delete($id)
    {
        ClientSays::find($id)->delete();
        notificationMsg('error','Client Says Deleted Successfully');
    }
}
