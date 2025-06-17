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
            'category_id' => 'required',
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

                if(!empty($input['sub_category_id'])){
                    $data['blog_category_id'] = $input['sub_category_id'];
                }else{
                    $data['blog_category_id'] = $input['category_id'];
                }

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

    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {

    }

    public function blogSubCategory(Request $request)
    {
        $subCategoryies = BlogCategory::where('parent_id', $request->category_id)->get();
        $view = view('admin.blog.subCategoryOption', compact('subCategoryies'))->render();
        return response()->json(['view' => $view]);
    }
}
