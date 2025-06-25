<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use DataTables;

class ContactUsController extends AdminController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = ContactUs::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     
                        $btn = '';
                        if(!auth()->user()->can('Contact Us Delete')){
                            $btn .='<span class="text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Access denied</span>';
                        }else{
                            if (auth()->user()->can('Contact Us Delete')) {
                                $btn .= '<a href="'.route('admin.contact.us.delete', [$row->id]).'" class="edit btn btn-danger btn-sm delete-btn" data-route='.route('admin.contact.us.delete', [$row->id]).'><i class="fa fa-trash" aria-hidden="true"></i></a>';
                            }
                        }

                        return $btn;
                    })
                    ->addColumn('information', function ($row) {
                        $table = '<table class="table table-sm mb-0">';
                        $table .= '<tbody>';
                        $table .= '<tr><th class="text-nowrap text-secondary" style="width: 70px;">Email</th><td title="' . e($row->email) . '">' . limitText($row->email, 30) . '</td></tr>';
                        $table .= '<tr><th class="text-nowrap text-secondary">Mobile</th><td>' . e($row->mobile_number ?? '-') . '</td></tr>';
                        $table .= '<tr><th class="text-nowrap text-secondary">Subject</th><td>' . e($row->subject ?? '-') . '</td></tr>';
                        $table .= '<tr><th class="text-nowrap text-secondary">Message</th><td>' . e($row->message ?? '-') . '</td></tr>';
                        $table .= '<tr><th class="text-nowrap text-secondary">IP Address</th><td>' . e($row->ip_address ?? '-') . '</td></tr>';
                        $table .= '<tr><th class="text-nowrap text-secondary">Device</th><td>' . e($row->device ?? '-') . '</td></tr>';
                        $table .= '</tbody>';
                        $table .= '</table>';

                        return $table;
                    })
                    ->rawColumns(['action', 'information'])
                    ->make(true);
        }

        return view('admin.contactUs.index');
    }

    public function delete($id)
    {
        ContactUs::find($id)->delete();
        notificationMsg('error','Contact Us Deleted Successfully');
    }
}
