<div class="row">
    <div class="col-md-12">            
        <div class="form-group">
            <label>Upload Image: <span class="text-danger">*</span></label><br>
            {{ Form::file('image', ['class' => 'form-control']) }}
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label>Title: <span class="text-danger">*</span></label><br>
            {{ Form::text('title',old('title'), ['class' => 'form-control', 'placeholder' => 'Title']) }}
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label>Description: <span class="text-danger">*</span></label><br>
            {{ Form::textarea('description', old('description'), ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Enter description', 'rows' => 2]) }}
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label>Title Hindi: <span class="text-danger">*</span></label><br>
            {{ Form::text('title_hindi',old('title_hindi'), ['class' => 'form-control', 'placeholder' => 'Title Hindi']) }}
            @error('title_hindi')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label>Description Hindi: <span class="text-danger">*</span></label><br>
            {{ Form::textarea('description_hindi', old('description_hindi'), ['class' => 'form-control', 'placeholder' => 'Description Hindi', 'rows' => 2]) }}
            @error('description_hindi')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label>Title Gujrati: <span class="text-danger">*</span></label><br>
            {{ Form::text('title_gujrati',old('title_gujrati'), ['class' => 'form-control', 'placeholder' => 'Title Gujrati']) }}
            @error('title_gujrati')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label>Description Gujrati: <span class="text-danger">*</span></label><br>
            {{ Form::textarea('description_gujrati', old('description_gujrati'), ['class' => 'form-control', 'placeholder' => 'Description Gujrati', 'rows' => 2]) }}
            @error('description_gujrati')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mt-3">
        <div class="form-group">
            <label>Category: <span class="text-danger">*</span></label><br>
            {{ Form::select('category_id', ['' => 'Select Category']+$blogCategorys, old('formate', $slider->formate ?? ''), ['class' => 'form-control form-select']) }}
            @error('category_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>   
    </div>
    <div class="col-md-6 mt-3">
        <div class="form-group">
            <label>Sub Category: <span class="text-danger">*</span></label><br>
            {{ Form::select('sub_category_id', ['' => 'Select Sub Category']+$blogCategorys, old('formate', $slider->formate ?? ''), ['class' => 'form-control form-select']) }}
            @error('sub_category_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>   
    </div>
</div>
<div class="row">
    <div class="col-md-6 mt-3">
        <div class="form-group">
            <label>Post Publish Date: <span class="text-danger">*</span></label><br>
            <input type="datetime-local" name="post_publish_date" value="" class="form-control" />
            @error('post_publish_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>   
    </div>
    <div class="col-md-6 mt-3">
        <div class="form-group">
            <label>Post Type: <span class="text-danger">*</span></label><br>
            {{ Form::select('post_type', ['' => 'Select Sub Category', 0 => 'Regular', 1 => 'Good'], old('formate', $slider->formate ?? ''), ['class' => 'form-control form-select']) }}
            @error('post_type')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>   
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <label for="tagsInput" class="form-label">Seo Tags: <span class="text-danger">*</span></label>
        <input name='seo_tags' id="tagsInput" class="form-control" placeholder="Type and press enter" />
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <center><button type="submit" class="btn btn-success btn-sm mt-3 save-btn">Save</button></center>
    </div>
</div>