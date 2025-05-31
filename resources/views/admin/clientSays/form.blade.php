<div class="row">
    <div class="col-md-6">            
        <div class="form-group">
            <label>Upload Image: <span class="text-danger">*</span></label><br>
            {{ Form::file('image', ['class' => 'form-control']) }}
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        
    </div>
</div>
<div class="row">
    <div class="col-md-4 mt-3">
        <div class="form-group">
            <label>Name: <span class="text-danger">*</span></label><br>
            {{ Form::text('name',old('name'), ['class' => 'form-control', 'placeholder' => 'Name']) }}
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-4 mt-3">
        <div class="form-group">
            <label>Name Hindi: <span class="text-danger">*</span></label><br>
            {{ Form::text('name_hindi',old('name_hindi'), ['class' => 'form-control', 'placeholder' => 'Name Hindi']) }}
            @error('name_hindi')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-4 mt-3">
        <div class="form-group">
            <label>Name Gujrati: <span class="text-danger">*</span></label><br>
            {{ Form::text('name_gujrati',old('name_gujrati'), ['class' => 'form-control', 'placeholder' => 'Name Gujrati']) }}
            @error('name_gujrati')
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