<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;
use DataTables;
use App\Models\BlogCategory;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Throwable;

class BlogController extends AdminController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     

                        $btn = '';

                        if(!auth()->user()->can('User Blog Category Edit') && !auth()->user()->can('User Blog Category Delete') && !auth()->user()->can('User Blog Category Sub List')){
                            $btn .='<span class="text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Access denied</span>';
                        }else{
                            if(auth()->user()->email == 'admin@gmail.com'){
                                $btn .= '<a href="'.route('admin.blog.show', [$row->id]).'" class="edit btn btn-dark btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a> ';
                                $btn .= '<a href="'.route('admin.blog.edit', [$row->id]).'" class="edit btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ';
                                $btn .= '<a href="'.route('admin.blog.delete', [$row->id]).'" class="edit btn btn-danger btn-sm delete-btn" data-route='.route('admin.blog.delete', [$row->id]).'><i class="fa fa-trash" aria-hidden="true"></i></a>';
                            }else{
                                if (auth()->user()->can('User Blog Category Sub List')) {
                                    $btn .= '<a href="'.route('admin.blog.show', [$row->id]).'" class="edit btn btn-dark btn-sm"></a> ';
                                }
                                if($row->admin_id == auth()->user()->id){
                                    if (auth()->user()->can('User Blog Category Edit')) {
                                        $btn .= '<a href="'.route('admin.blog.edit', [$row->id]).'" class="edit btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ';
                                    }
                                    if (auth()->user()->can('User Blog Category Delete')) {
                                        $btn .= '<a href="'.route('admin.blog.delete', [$row->id]).'" class="edit btn btn-danger btn-sm delete-btn" data-route='.route('admin.blog.delete', [$row->id]).'><i class="fa fa-trash" aria-hidden="true"></i></a>';
                                    }
                                }
                            }

                        }

                        return $btn;
                    })
                    ->addColumn('blog_category', function ($row) {
                        return $row->category->name ?? '';
                    })
                    ->addColumn('blog_sub_category', function ($row) {
                        return $row->subCategory->name ?? '';
                    })
                    ->addColumn('user', function ($row) {
                        return $row->user->name ?? '';
                    })

                    ->rawColumns(['action', 'blog_category', 'blog_sub_category', 'user'])
                    ->make(true);
        }
        return view('admin.blog.index');
    }

    public function create()
    {
        $blogCategorys = BlogCategory::whereNull('parent_id')->pluck('name', 'id')->all();
        return view('admin.blog.create', compact('blogCategorys'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        
        $validator = Validator::make($input, [
            'image' => 'required|mimes:jpg,pdf|max:2048',
            'title' => 'required',
            'description' => 'required',
            'title_hindi' => 'required',
            'description_hindi' => 'required',
            'title_gujrati' => 'required',
            'description_gujrati' => 'required',
            'blog_category_id' => 'required',
            'post_type' => 'required',
            'seo_tags' => 'required',
            'post_publish_date' => 'required',
        ]);

        if ($validator->passes()) {
            DB::beginTransaction();
            try {

                $data = [];

                if ($request->hasFile('image')) {
                    $fileName = uploadImagePublic(public_path('blog/image'), $request->file('image'));
                    $image = 'blog/image/' . $fileName;
                }

                $data['admin_id'] = auth()->user()->id;
                $data['image'] = $image;
                $data['title'] = $input['title'];
                $data['description'] = $input['description'];
                $data['title_hindi'] = $input['title_hindi'];
                $data['description_hindi'] = $input['description_hindi'];
                $data['title_gujrati'] = $input['title_gujrati'];
                $data['description_gujrati'] = $input['description_gujrati'];
                $data['slug'] = makeSlug($input['title']);
                $data['post_publish_date'] = $input['post_publish_date'];
                $data['post_type'] = $input['post_type'];
                $data['seo_tags'] = $input['seo_tags'];
                $data['blog_category_id'] = $input['blog_category_id'];
                $data['blog_sub_category_id'] = $input['blog_sub_category_id'];

                if($input['post_publish_date'] == date('Y-m-d')){
                    $data['is_published'] = 1;
                }else{
                    $data['is_published'] = 0;
                }

                Blog::create($data);

                DB::commit();
                notificationMsg('success','Blog Created Successfully');
                return response()->json(['error' => [], 'redirectUrl' => route('admin.blog')]);

            } catch (Exception $e) {

                DB::rollback();
                session()->flash('error', 'Something went wrong please try after sometime');
                Log::error($e);
                report($e);
                return response()->json(['error' => 1]);

            } catch (Throwable $e) {

                DB::rollback();
                session()->flash('error', 'Something went wrong please try after sometime');
                Log::error($e);
                report($e);
                return response()->json(['error' => 1]);

            }
        }
        return response()->json(['error' => $validator->errors()]);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $blogCategorys = BlogCategory::whereNull('parent_id')->pluck('name', 'id')->all();
        return view('admin.blog.edit', compact('blog', 'blogCategorys'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $blog = Blog::find($id);
        
        $validator = Validator::make($input, [
            'image' => 'nullable|mimes:jpg,pdf|max:2048',
            'title' => 'required',
            'description' => 'required',
            'title_hindi' => 'required',
            'description_hindi' => 'required',
            'title_gujrati' => 'required',
            'description_gujrati' => 'required',
            'blog_category_id' => 'required',
            'post_type' => 'required',
            'seo_tags' => 'required',
            'post_publish_date' => 'required',
        ]);

        if ($validator->passes()) {
            DB::beginTransaction();
            try {

                $data = [];

                if ($request->hasFile('image')) {
                    $fileName = uploadImagePublic(public_path('blog/image'), $request->file('image'));
                    $image = 'blog/image/' . $fileName;
                    $data['image'] = $image;
                }

                $data['admin_id'] = auth()->user()->id;
                $data['title'] = $input['title'];
                $data['description'] = $input['description'];
                $data['title_hindi'] = $input['title_hindi'];
                $data['description_hindi'] = $input['description_hindi'];
                $data['title_gujrati'] = $input['title_gujrati'];
                $data['description_gujrati'] = $input['description_gujrati'];
                $data['slug'] = makeSlug($input['title']);
                $data['post_publish_date'] = $input['post_publish_date'];
                $data['post_type'] = $input['post_type'];
                $data['seo_tags'] = $input['seo_tags'];
                $data['blog_category_id'] = $input['blog_category_id'];
                $data['blog_sub_category_id'] = $input['blog_sub_category_id'];

                if($input['post_publish_date'] == date('Y-m-d')){
                    $data['is_published'] = 1;
                }else{
                    $data['is_published'] = 0;
                }

                $blog->update($data);

                DB::commit();
                notificationMsg('info','Blog Updated Successfully');
                return response()->json(['error' => [], 'redirectUrl' => route('admin.blog')]);

            } catch (Exception $e) {

                DB::rollback();
                session()->flash('error', 'Something went wrong please try after sometime');
                Log::error($e);
                report($e);
                return response()->json(['error' => 1]);

            } catch (Throwable $e) {

                DB::rollback();
                session()->flash('error', 'Something went wrong please try after sometime');
                Log::error($e);
                report($e);
                return response()->json(['error' => 1]);

            }
        }
        return response()->json(['error' => $validator->errors()]);
    }

    public function delete($id)
    {
        Blog::find($id)->delete();
        notificationMsg('error','Blog Deleted Successfully');
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.show', compact('blog')); 
    }

    public function blogSubCategory(Request $request)
    {
        $subCategoryies = BlogCategory::where('parent_id', $request->category_id)->get();
        $view = view('admin.blog.subCategoryOption', compact('subCategoryies'))->render();
        return response()->json(['view' => $view]);
    }
}
