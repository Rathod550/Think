<div class="row">
    <div class="col-md-4">            
        <div class="form-group">
            <label>Upload Image: <span class="text-danger">*</span></label><br>
            {{ Form::file('image', ['class' => 'form-control']) }}
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-4">            
        <div class="form-group">
            <label>Formate: <span class="text-danger">*</span></label><br>
            {{ Form::select('formate', ['' => 'Select Formate', 0 => 'Center', 1 => 'Left'], old('formate', $slider->formate ?? ''), ['class' => 'form-control form-select']) }}
            @error('formate')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
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
            {{ Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => 'Enter description', 'rows' => 2]) }}
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <center><button type="submit" class="btn btn-success btn-sm mt-3 save-btn">Save</button></center>
    </div>
</div>