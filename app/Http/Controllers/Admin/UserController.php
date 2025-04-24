<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DataTables;
use Spatie\Permission\Models\Role;
use DB;

class UserController extends AdminController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*')->where('email', '!=', 'admin@gmail.com');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     

                        $btn = '';

                        if(!auth()->user()->can('User Edit') && !auth()->user()->can('User Delete')){
                            $btn .='<span class="text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Access denied</span>';
                        }else{
                            if (auth()->user()->can('User Edit')) {
                                $btn .= '<a href="'.route('admin.user.edit', [$row->id]).'" class="edit btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ';
                            }
                            if (auth()->user()->can('User Delete')) {
                                $btn .= '<a href="'.route('admin.user.delete', [$row->id]).'" class="edit btn btn-danger btn-sm delete-btn" data-route='.route('admin.user.delete', [$row->id]).'><i class="fa fa-trash" aria-hidden="true"></i></a>';
                            }
                        }

                        return $btn;
                    })
                    ->addColumn('role', function ($user) {
                        return optional($user->roles->first())->name ?? '-'; 
                    })
                    ->addColumn('notification_status', function ($row) {
                        if (auth()->user()->can('User Notification Status')) {
                            $selectedYes = $row->notification_status == 1 ? 'selected' : '';
                            $selectedNo = $row->notification_status == 0 ? 'selected' : '';
                            $route = route('admin.users.set.notification.status');
                            
                            return '<select class="form-control form-select notification-status" data-id="' . $row->id . '" data-route="' . $route . '">
                                        <option value="1" ' . $selectedYes . '>Yes</option>
                                        <option value="0" ' . $selectedNo . '>No</option>
                                    </select>';
                        }else{
                            return $row->notification_status == 1 ? 'Yes' : 'No';
                        }
                    })

                    ->rawColumns(['action', 'role', 'notification_status'])
                    ->make(true);
        }
        return view('admin.user.index');
    }

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('admin.user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required',
            'roles' => 'required',
        ]);

        // send notification
        $message = 'New User '.$request->name;
        sendNotification(0, $message);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->assignRole($request->roles);

        notificationMsg('success','User Created Successfully');
        return redirect()->route('admin.users');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name')->first();
        return view('admin.user.edit', compact('user', 'roles', 'userRole'));
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

        // send notification
        $message = 'User '.$request->name;
        sendNotification(1, $message);

        $user->update($data);

        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->roles);

        notificationMsg('info','User Updated Successfully');
        return redirect()->route('admin.users');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $userName = $user->name;
        $user->delete();

        // send notification
        $message = 'User '.$userName;
        sendNotification(2, $message);
        
        notificationMsg('error','User Deleted Successfully');
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('admin.user.profile', compact('user'));
    }

    public function profileUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable',
        ]);

        $data = ['name' => $request->name, 'email' => $request->email];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        if ($request->hasFile('profile')) {
            $avatarPath = $request->file('profile')->store('profile', 'public');
            $data['profile'] = $avatarPath;
        }

        $user->update($data);

        notificationMsg('info','User Profile Updated Successfully');
        return redirect()->route('admin.profile', [$user->id]);
    }

    public function setNotificationStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->update(['notification_status' => $request->notification_status]);
    }

}
