<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use DataTables;
use App\Models\OurTeam;
use Illuminate\Validation\Rule;

class OurTeamController extends AdminController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = OurTeam::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     

                        $btn = '';

                        if(!auth()->user()->can('Our Team Edit') && !auth()->user()->can('Our Team Delete')){
                            $btn .='<span class="text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Access denied</span>';
                        }else{
                            if (auth()->user()->can('Our Team Edit')) {
                                $btn .= '<a href="'.route('admin.our.team.edit', [$row->id]).'" class="edit btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ';
                            }
                            if (auth()->user()->can('Our Team Delete')) {
                                $btn .= '<a href="'.route('admin.our.team.delete', [$row->id]).'" class="edit btn btn-danger btn-sm delete-btn" data-route='.route('admin.our.team.delete', [$row->id]).'><i class="fa fa-trash" aria-hidden="true"></i></a>';
                            }
                        }

                        return $btn;
                    })
                    ->addColumn('image', function ($row) {
                        if(!empty($row->image)){
                            return '<img src="'.asset($row->image).'" width="100%" height="100%">';
                        }else{
                            return '-';
                        }
                    })

                    ->rawColumns(['action', 'image'])
                    ->make(true);
        }

        return view('admin.ourTeam.index');
    }

    public function create()
    {
        return view('admin.ourTeam.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'name' => ['required', 'max:255' ,Rule::unique('our_teams', 'name')->whereNull('deleted_at')],
            'name_hindi' => ['required', 'max:255' ,Rule::unique('our_teams', 'name_hindi')->whereNull('deleted_at')],
            'name_gujrati' => ['required', 'max:255' ,Rule::unique('our_teams', 'name_gujrati')->whereNull('deleted_at')],
            'company_role' => 'required',
            'description' => 'required',
            'facebook_link' => 'required',
            'instagram_link' => 'required',
            'twitter_link' => 'required',
            'linkedin_link' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $fileName = uploadImagePublic(public_path('ourTeam/image'), $request->file('image'));
            $image = 'ourTeam/image/' . $fileName;
        }

        OurTeam::create([
            'image' => $image,
            'name' => $request->name,
            'name_hindi' => $request->name_hindi,
            'name_gujrati' => $request->name_gujrati,
            'description' => $request->description,
            'description_hindi' => getLanguage($request->description, 'hi'),
            'description_gujrati' => getLanguage($request->description, 'gu'),
            'company_role' => $request->company_role,
            'company_role_hindi' => getLanguage($request->company_role, 'hi'),
            'company_role_gujrati' => getLanguage($request->company_role, 'gu'),
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
            'twitter_link' => $request->twitter_link
        ]);

        notificationMsg('success','Team Member Created Successfully');
        return redirect()->route('admin.our.team');
    }

    public function edit($id)
    {
        $ourTeam = OurTeam::find($id);
        return view('admin.ourTeam.edit', compact('ourTeam'));
    }

    public function update(Request $request, $id)
    {
        $ourTeam = OurTeam::find($id);

        $request->validate([
            'name' => ['required', 'max:255', Rule::unique('our_teams', 'name')->ignore($id)->whereNull('deleted_at')],
            'name_hindi' => ['required', 'max:255', Rule::unique('our_teams', 'name_hindi')->ignore($id)->whereNull('deleted_at')],
            'name_gujrati' => ['required', 'max:255', Rule::unique('our_teams', 'name_gujrati')->ignore($id)->whereNull('deleted_at')],
            'company_role' => 'required',
            'description' => 'required',
            'facebook_link' => 'required',
            'instagram_link' => 'required',
            'twitter_link' => 'required',
            'linkedin_link' => 'required'
        ]);

        $image = $ourTeam->image ?? '';
        if ($request->hasFile('image')) {
            $fileName = uploadImagePublic(public_path('ourTeam/image'), $request->file('image'));
            $image = 'ourTeam/image/' . $fileName;
        }

        $ourTeam->update([
            'image' => $image,
            'name' => $request->name,
            'name_hindi' => $request->name_hindi,
            'name_gujrati' => $request->name_gujrati,
            'description' => $request->description,
            'description_hindi' => getLanguage($request->description, 'hi'),
            'description_gujrati' => getLanguage($request->description, 'gu'),
            'company_role' => $request->company_role,
            'company_role_hindi' => getLanguage($request->company_role, 'hi'),
            'company_role_gujrati' => getLanguage($request->company_role, 'gu'),
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
            'twitter_link' => $request->twitter_link
        ]);

        notificationMsg('info', 'Team Member Updated Successfully');
        return redirect()->route('admin.our.team');
    }

    public function delete($id)
    {
        OurTeam::find($id)->delete();
        notificationMsg('error','Team Member Deleted Successfully');
    }
}
