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
            $data = BlogCategory::whereNull('parent_id');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     

                        $btn = '';

                        if(!auth()->user()->can('User Blog Category Edit') && !auth()->user()->can('User Blog Category Delete') && !auth()->user()->can('User Blog Category Sub List')){
                            $btn .='<span class="text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Access denied</span>';
                        }else{
                            if (auth()->user()->can('User Blog Category Sub List')) {
                                $btn .= '<a href="'.route('admin.blog.category.sub', [$row->id]).'" class="edit btn btn-dark btn-sm"><i class="fa fa-list-alt" aria-hidden="true"></i></a> ';
                            }
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
            'image' => 'required',
            'description_english' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $profile = uploadImagePublic(public_path('category/image'), $request->file('image'));
            $image = 'category/image/' . $profile;
        }

        $slug = makeSlug($request->name);

        BlogCategory::create([
            'name'=>$request->name, 
            'image' => $image ?? '', 
            'slug' => $slug,
            'name_hindi' => getLanguage($request->name, 'hi'),
            'name_gujrati' => getLanguage($request->name, 'gu'),
            'description_english' => $request->description_english,
            'description_hindi' => getLanguage($request->description_english, 'hi'),
            'description_gujrati' => getLanguage($request->description_english, 'gu'),
        ]);

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

        $slug = makeSlug($request->name);

        $category->update([
            'name' => $request->name, 
            'image' => $image, 
            'slug' => $slug,
            'name_hindi' => getLanguage($request->name, 'hi'),
            'name_gujrati' => getLanguage($request->name, 'gu'),
            'description_english' => $request->description_english,
            'description_hindi' => getLanguage($request->description_english, 'hi'),
            'description_gujrati' => getLanguage($request->description_english, 'gu'),
        ]);

        notificationMsg('info', 'Blog Category Updated Successfully');
        return redirect()->route('admin.blog.category');
    }


    public function delete($id)
    {
        $blogCategorySubs = BlogCategory::where('parent_id', $id)->get();
        if(!empty($blogCategorySubs) && $blogCategorySubs->count() > 0){
            foreach($blogCategorySubs as $value){
                $value->delete();
            }
        }

        BlogCategory::find($id)->delete();
        notificationMsg('error','Blog Category Deleted Successfully');
    }

    public function setBlogCategoryStatus(Request $request)
    {
        $blogCategorySubs = BlogCategory::where('parent_id', $request->id)->get();
        if(!empty($blogCategorySubs) && $blogCategorySubs->count() > 0){
            foreach($blogCategorySubs as $value){
                $value->update(['status' => $request->status]);
            }
        }

        $blogCategory = BlogCategory::find($request->id);
        $blogCategory->update(['status' => $request->status]);
    }

    public function blogCategorySubIndex($id)
    {
        $blogCategory = BlogCategory::find($id);
        $blogCategorySubs = BlogCategory::where('parent_id', $id)->get();
        return view('admin.blogCategory.subCategory.index', compact('blogCategory', 'blogCategorySubs'));
    }

    public function blogCategorySubCreate($id)
    {
        $blogCategory = BlogCategory::find($id);
        return view('admin.blogCategory.subCategory.create', compact('blogCategory'));
    }

    public function blogCategorySubStore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255' ,Rule::unique('blog_categories', 'name')->whereNull('deleted_at')],
        ]);

        $slug = makeSlug($request->name);

        BlogCategory::create(['name'=>$request->name, 'parent_id' => $request->parent_id, 'slug' => $slug]);

        notificationMsg('success','Category Sub Created Successfully');
        return redirect()->route('admin.blog.category.sub', [$request->parent_id]);
    }

    public function blogCategorySubEdit($parentId, $id)
    {
        $blogCategory = BlogCategory::find($parentId);
        $blogCategorySub = BlogCategory::find($id);
        return view('admin.blogCategory.subCategory.edit', compact('blogCategory', 'blogCategorySub'));
    }

    public function blogCategorySubUpdate(Request $request, $id)
    {
        $category = BlogCategory::findOrFail($id);

        $request->validate([
            'name' => ['required', 'max:255', Rule::unique('blog_categories', 'name')->ignore($id)->whereNull('deleted_at')],
        ]);

        $slug = makeSlug($request->name);

        $category->update(['name' => $request->name, 'slug' => $slug]);

        notificationMsg('info', 'Category Sub Updated Successfully');
        return redirect()->route('admin.blog.category.sub', [$request->parent_id]);
    }

    public function setBlogCategorySubStatus(Request $request)
    {
        $blogCategory = BlogCategory::find($request->id);
        $blogCategory->update(['status' => $request->status]);
    }
}
