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
        <div class="form-group">
            <label>Company Role: <span class="text-danger">*</span></label><br>
            {{ Form::text('company_role',old('company_role'), ['class' => 'form-control', 'placeholder' => 'Company Role']) }}
            @error('company_role')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
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
<div class="row">
    <div class="col-md-6 mt-3">
        <div class="form-group">
            <label>Facebook Link: <span class="text-danger">*</span></label><br>
            {{ Form::text('facebook_link',old('facebook_link'), ['class' => 'form-control', 'placeholder' => 'Facebook Link']) }}
            @error('facebook_link')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6 mt-3">
        <div class="form-group">
            <label>Instagram Link: <span class="text-danger">*</span></label><br>
            {{ Form::text('instagram_link',old('instagram_link'), ['class' => 'form-control', 'placeholder' => 'Instagram Link']) }}
            @error('instagram_link')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mt-3">
        <div class="form-group">
            <label>Twitter Link: <span class="text-danger">*</span></label><br>
            {{ Form::text('twitter_link',old('twitter_link'), ['class' => 'form-control', 'placeholder' => 'Twitter Link']) }}
            @error('twitter_link')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6 mt-3">
        <div class="form-group">
            <label>Linkedin Link: <span class="text-danger">*</span></label><br>
            {{ Form::text('linkedin_link',old('linkedin_link'), ['class' => 'form-control', 'placeholder' => 'Linkedin Link']) }}
            @error('linkedin_link')
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