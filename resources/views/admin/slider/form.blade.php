<div class="row">
    <div class="col-md-6">            
        <div class="form-group">
            <label>Image: <span class="text-danger">*</span></label><br>
            {{ Form::File('image', ['class' => 'form-control', 'placeholder' => 'Image', 'id' => 'formFile']) }}
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Title: <span class="text-danger">*</span></label><br>
            {{ Form::text('title',old('title'), ['class' => 'form-control', 'placeholder' => 'Title']) }}
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-6">
        <div class="form-group">
            <label>Description: <span class="text-danger">*</span></label><br>
            {{ Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => 'Description', 'rows' => 3]) }}
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Font Color: </label><br>
            {{ Form::color('font_color', old('font_color'), ['class' => 'form-control form-control-color']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <center><button type="submit" class="btn btn-success btn-sm mt-3">Save</button></center>
    </div>
</div>