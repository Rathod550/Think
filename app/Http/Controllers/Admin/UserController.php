<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DataTables;

class UserController extends AdminController
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = User::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     
                        $btn = '<a href="'.route('admin.user.edit', [$row->id]).'" class="edit btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ';
                        $btn = $btn.'<a href="'.route('admin.user.edit', [$row->id]).'" class="edit btn btn-danger btn-sm delete-btn" data-route='.route('admin.user.delete', [$row->id]).'><i class="fa fa-trash" aria-hidden="true"></i></a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.user.index');
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required',
            // 'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        notificationMsg('success','User Created Successfully');
        return redirect()->route('admin.users');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // 'password' => 'nullable|string|min:8',
            'password' => 'nullable',
        ]);

        $data = ['name' => $request->name, 'email' => $request->email];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        notificationMsg('info','User Updated Successfully');
        return redirect()->route('admin.users');
    }

    public function delete($id)
    {
        info('ok');

        // Optional: perform the delete
        // User::findOrFail($id)->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }

}
