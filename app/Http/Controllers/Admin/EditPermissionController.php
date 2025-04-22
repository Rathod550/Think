<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class EditPermissionController extends AdminController
{
    public function edit($id)
    {
        $role = Role::where('id',$id)->first();
        $permission = Permission::orderBy('group_name')->get();
        $rolePermission = $role->getAllPermissions()->pluck('name')->toArray();

        return view('admin.permissions.edit', compact('role', 'permission', 'rolePermission'));
    }

    public function permissionSet(Request $request,$id)
    {
        $role = Role::where('id',$id)->first();
        $role->syncPermissions($request->input('checkbox'));

        notificationMsg('success','Permission Updated Successfully');
        return redirect()->route('admin.roles');
    }
}
