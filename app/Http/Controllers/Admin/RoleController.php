<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use DataTables;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends AdminController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Role::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     

                        $btn = '';

                        if(!auth()->user()->can('User Role Manage Permission') && !auth()->user()->can('User Role Edit') && !auth()->user()->can('User Role Delete')){
                            $btn .='<span class="text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Access denied</span>';
                        }else{
                            if (auth()->user()->can('User Role Manage Permission')) {
                                $btn .='<a href="'.route('admin.roles.permission.edit', [$row->id]).'" class="edit btn btn-dark btn-sm"><i class="fa fa-lock" aria-hidden="true"></i></a> ';
                            }
                            if (auth()->user()->can('User Role Edit')) {
                                $btn .='<a href="'.route('admin.roles.edit', [$row->id]).'" class="edit btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ';
                            }
                            if (auth()->user()->can('User Role Delete')) {
                                $btn .='<a href="'.route('admin.roles.delete', [$row->id]).'" class="edit btn btn-danger btn-sm delete-btn" data-route='.route('admin.roles.delete', [$row->id]).'><i class="fa fa-trash" aria-hidden="true"></i></a>';
                            }
                        }

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.role.index');
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
        ]);


        Role::create([
            'name' => $request->name,
        ]);

        notificationMsg('success','Role Created Successfully');
        return redirect()->route('admin.roles');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('admin.role.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,'.$role->id,
        ]);

        $role->update(['name' => $request->name]);

        notificationMsg('info','Role Updated Successfully');
        return redirect()->route('admin.roles');
    }

    public function delete($id)
    {
        Role::find($id)->delete();
        notificationMsg('error','Role Deleted Successfully');
    }
}
