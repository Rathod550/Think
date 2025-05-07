<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;
use App\Models\BlogCategory;
use DataTables;
use Illuminate\Validation\Rule;

class BlogCategoryController extends AdminController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = BlogCategory::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     

                        $btn = '';

                        if(!auth()->user()->can('User Blog Category Edit') && !auth()->user()->can('User Blog Category Delete')){
                            $btn .='<span class="text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Access denied</span>';
                        }else{
                            if (auth()->user()->can('User Blog Category Edit')) {
                                $btn .= '<a href="'.route('admin.blog.category.edit', [$row->id]).'" class="edit btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ';
                            }
                            if (auth()->user()->can('User Blog Category Delete')) {
                                $btn .= '<a href="'.route('admin.blog.category.delete', [$row->id]).'" class="edit btn btn-danger btn-sm delete-btn" data-route='.route('admin.blog.category.delete', [$row->id]).'><i class="fa fa-trash" aria-hidden="true"></i></a>';
                            }
                        }

                        return $btn;
                    })
                    ->addColumn('status', function ($row) {
                        if (auth()->user()->can('User Blog Category Status')) {
                            $selectedYes = $row->status == 1 ? 'selected' : '';
                            $selectedNo = $row->status == 0 ? 'selected' : '';
                            $route = route('admin.set.blog.category.status');
                            
                            return '<select class="form-control form-select blog-category-status" data-id="' . $row->id . '" data-route="' . $route . '">
                                        <option value="1" ' . $selectedYes . '>Yes</option>
                                        <option value="0" ' . $selectedNo . '>No</option>
                                    </select>';
                        }else{
                            return $row->status == 1 ? 'Yes' : 'No';
                        }
                    })
                    ->addColumn('image', function ($row) {
                        if(!empty($row->image)){
                            return '<img src="'.asset($row->image).'" width="100" height="100">';
                        }else{
                            return '-';
                        }
                    })

                    ->rawColumns(['action', 'status', 'image'])
                    ->make(true);
        }
        return view('admin.blogCategory.index');
    }

    public function create()
    {
        return view('admin.blogCategory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255' ,Rule::unique('blog_categories', 'name')->whereNull('deleted_at')],
            'image' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $profile = uploadImagePublic(public_path('category/image'), $request->file('image'));
            $image = 'category/image/' . $profile;
        }

        BlogCategory::create(['name'=>$request->name, 'image' => $image ?? '']);

        notificationMsg('success','Blog Category Created Successfully');
        return redirect()->route('admin.blog.category');
    }

    public function edit($id)
    {
        $blogCategory = BlogCategory::find($id);
        return view('admin.blogCategory.edit', compact('blogCategory'));
    }

    public function update(Request $request, $id)
    {
        $category = BlogCategory::findOrFail($id);

        $request->validate([
            'name' => ['required', 'max:255', Rule::unique('blog_categories', 'name')->ignore($id)->whereNull('deleted_at')],
        ]);

        $image = $category->image ?? '';
        if ($request->hasFile('image')) {
            $fileName = uploadImagePublic(public_path('category/image'), $request->file('image'));
            $image = 'category/image/' . $fileName;
        }

        $category->update(['name' => $request->name, 'image' => $image]);

        notificationMsg('info', 'Blog Category Updated Successfully');
        return redirect()->route('admin.blog.category');
    }


    public function delete($id)
    {
        BlogCategory::find($id)->delete();
        notificationMsg('error','Blog Category Deleted Successfully');
    }

    public function setBlogCategoryStatus(Request $request)
    {
        $blogCategory = BlogCategory::find($request->id);
        $blogCategory->update(['status' => $request->status]);
    }
}
