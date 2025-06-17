<div class="row">
    <div class="col-md-12">            
        <div class="form-group">
            <label>Upload Image: <span class="text-danger">*</span></label><br>
            {{ Form::file('image', ['class' => 'form-control']) }}
            <span class="text-danger error-text image_err"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label>Title: <span class="text-danger">*</span></label><br>
            {{ Form::text('title',old('title'), ['class' => 'form-control', 'placeholder' => 'Title']) }}
            <span class="text-danger error-text title_err"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label>Description: <span class="text-danger">*</span></label><br>
            {{ Form::textarea('description', old('description'), ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Enter description', 'rows' => 2]) }}
            <span class="text-danger error-text description_err"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label>Title Hindi: <span class="text-danger">*</span></label><br>
            {{ Form::text('title_hindi',old('title_hindi'), ['class' => 'form-control', 'placeholder' => 'Title Hindi']) }}
            <span class="text-danger error-text title_hindi_err"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label>Description Hindi: <span class="text-danger">*</span></label><br>
            {{ Form::textarea('description_hindi', old('description_hindi'), ['class' => 'form-control', 'id' => 'description_hindi', 'placeholder' => 'Description Hindi', 'rows' => 2]) }}
            <span class="text-danger error-text description_hindi_err"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label>Title Gujrati: <span class="text-danger">*</span></label><br>
            {{ Form::text('title_gujrati',old('title_gujrati'), ['class' => 'form-control', 'placeholder' => 'Title Gujrati']) }}
            <span class="text-danger error-text title_gujrati_err"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label>Description Gujrati: <span class="text-danger">*</span></label><br>
            {{ Form::textarea('description_gujrati', old('description_gujrati'), ['class' => 'form-control', 'id' => 'description_gujrati', 'placeholder' => 'Description Gujrati', 'rows' => 2]) }}
            <span class="text-danger error-text description_gujrati_err"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mt-3">
        <div class="form-group">
            <label>Category: <span class="text-danger">*</span></label><br>
            {{ Form::select('category_id', ['' => 'Select Category']+$blogCategorys,'', ['class' => 'form-control form-select category', 'data-route' => route('admin.blog.sub-category.get')]) }}
            <span class="text-danger error-text category_id_err"></span>
        </div>   
    </div>
    <div class="col-md-6 mt-3">
        <div class="form-group">
            <label>Sub Category:</label><br>
            {{ Form::select('sub_category_id', ['' => 'Select Sub Category'], '', ['class' => 'form-control form-select subcategory']) }}
            @error('sub_category_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>   
    </div>
</div>
<div class="row">
    <div class="col-md-6 mt-3">
        <div class="form-group">
            <label>Post Publish Date: </label><br>
            <input type="date" name="post_publish_date" value="" class="form-control" />
            <span class="text-danger error-text post_publish_date_err"></span>
        </div>   
    </div>
    <div class="col-md-6 mt-3">
        <div class="form-group">
            <label>Post Type: <span class="text-danger">*</span></label><br>
            {{ Form::select('post_type', ['' => 'Select Sub Category', 0 => 'Regular', 1 => 'Good'], old('formate', $slider->formate ?? ''), ['class' => 'form-control form-select']) }}
            <span class="text-danger error-text post_type_err"></span>
        </div>   
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <label for="tagsInput" class="form-label">Seo Tags: <span class="text-danger">*</span></label>
        <input name='seo_tags' id="tagsInput" class="form-control" placeholder="Type and press enter" />
        <span class="text-danger error-text seo_tags_err"></span>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <center><button type="button" class="btn btn-success btn-sm mt-3 save-blog-btn">Save</button></center>
    </div>
</div>