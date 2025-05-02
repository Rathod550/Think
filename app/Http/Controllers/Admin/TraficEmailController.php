<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;
use DataTables;
use App\Models\TraficEmail;
use Illuminate\Validation\Rule;
use App\Imports\TraficEmailImport;
use Maatwebsite\Excel\Facades\Excel;

class TraficEmailController extends AdminController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = TraficEmail::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     

                        $btn = '';

                        if(!auth()->user()->can('User Trafic Email Edit') && !auth()->user()->can('User Trafic Email Delete')){
                            $btn .='<span class="text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Access denied</span>';
                        }else{
                            if (auth()->user()->can('User Trafic Email Edit')) {
                                $btn .= '<a href="'.route('admin.trafic.email.edit', [$row->id]).'" class="edit btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ';
                            }
                            if (auth()->user()->can('User Trafic Email Delete')) {
                                $btn .= '<a href="'.route('admin.trafic.email.delete', [$row->id]).'" class="edit btn btn-danger btn-sm delete-btn" data-route='.route('admin.trafic.email.delete', [$row->id]).'><i class="fa fa-trash" aria-hidden="true"></i></a>';
                            }
                        }

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.traficEmail.index');
    }

    public function create()
    {
        return view('admin.traficEmail.create');
    }

    public function store(Request $request){
        $request->validate([
            'email' => ['required', Rule::unique('trafic_emails', 'email')->whereNull('deleted_at')]
        ]);

        TraficEmail::create(['email' => $request->email]);

        notificationMsg('success','Email Created Successfully');
        return redirect()->route('admin.trafic.email');
    }

    public function edit($id)
    {
        $traficEmail = TraficEmail::find($id);
        return view('admin.traficEmail.edit', compact('traficEmail'));
    }

    public function update(Request $request, $id)
    {
        $traficEmail = TraficEmail::find($id);

        $request->validate([
            'email' => ['required',Rule::unique('trafic_emails', 'email')->ignore($traficEmail->id)->whereNull('deleted_at')],
        ]);

        $traficEmail->update(['email' => $request->email]);

        notificationMsg('info','Email Updated Successfully');
        return redirect()->route('admin.trafic.email');
    }

    public function delete($id)
    {
        TraficEmail::find($id)->delete();
        notificationMsg('error','Email Deleted Successfully');
    }

    public function importCreate()
    {
        return view('admin.traficEmail.importExcelCreate');
    }

    public function importStore(Request $request)
    {
        $request->validate([
            'excel_file' => 'required'
        ]);

        $import = new TraficEmailImport;

        Excel::import($import, request()->file('excel_file'));

        if (!empty($import->reason)) {
            return back()->withErrors(['errorInArray' => $import->reason]);
        }

        notificationMsg('success','Emails Created Successfully');
        return redirect()->route('admin.trafic.email');
    }
}
