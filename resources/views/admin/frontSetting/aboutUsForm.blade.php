<form method="POST" action="{{ route('admin.front.setting.update') }}">
	@csrf
	<input type="hidden" name="form_type" value="go_to_blogs">
	<center><h4><b>Slider Title Section</b></h4></center>
	<br>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['slider-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[slider-title]" class="form-control" value="{{ $aboutUsfrontSetting['slider-title']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-md-12">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['slider-description']['name'] }} :</b></label>
				<textarea class="form-control" name="homeFrontSetting[slider-description]">{{ $aboutUsfrontSetting['slider-description']['value_english'] }} </textarea>
			</div>
		</div>
	</div>
	<center><button type="submit" class="btn btn-success btn-sm save-btn mt-3">Submit</button></center>
</form>

<hr>

<form method="POST" action="{{ route('admin.front.setting.update') }}">
	@csrf
	<input type="hidden" name="form_type" value="go_to_blogs">
	<center><h4><b>Counter Section</b></h4></center>
	<br>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['counter-number-one-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[counter-number-one-title]" class="form-control" value="{{ $aboutUsfrontSetting['counter-number-one-title']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['counter-number-one']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[counter-number-one]" class="form-control" value="{{ $aboutUsfrontSetting['counter-number-one']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['counter-number-two-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[counter-number-two-title]" class="form-control" value="{{ $aboutUsfrontSetting['counter-number-two-title']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['counter-number-two']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[counter-number-two]" class="form-control" value="{{ $aboutUsfrontSetting['counter-number-two']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['counter-number-three-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[counter-number-three-title]" class="form-control" value="{{ $aboutUsfrontSetting['counter-number-three-title']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['counter-number-three']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[counter-number-three]" class="form-control" value="{{ $aboutUsfrontSetting['counter-number-three']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['counter-number-four-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[counter-number-four-title]" class="form-control" value="{{ $aboutUsfrontSetting['counter-number-four-title']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['counter-number-four']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[counter-number-four]" class="form-control" value="{{ $aboutUsfrontSetting['counter-number-four']['value_english'] }}">
			</div>
		</div>
	</div>
	<center><button type="submit" class="btn btn-success btn-sm save-btn mt-3">Submit</button></center>
</form>

<hr>

<form method="POST" action="{{ route('admin.front.setting.update') }}">
	@csrf
	<input type="hidden" name="form_type" value="go_to_blogs">
	<center><h4><b>Go To Blogs Section</b></h4></center>
	<br>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['go-to-blogs-title-about']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[go-to-blogs-title-about]" class="form-control" value="{{ $aboutUsfrontSetting['go-to-blogs-title-about']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['go-to-blogs-title-about-description']['name'] }} :</b></label>
				<textarea class="form-control" name="homeFrontSetting[go-to-blogs-title-about-description]">{{ $aboutUsfrontSetting['go-to-blogs-title-about-description']['value_english'] }} </textarea>
			</div>
		</div>
	</div>
	<center><button type="submit" class="btn btn-success btn-sm save-btn mt-3">Submit</button></center>
</form>

<hr>

<form method="POST" action="{{ route('admin.front.setting.update') }}">
	@csrf
	<input type="hidden" name="form_type" value="go_to_blogs">
	<center><h4><b>Our Team Title Section</b></h4></center>
	<br>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['our-team-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[our-team-title]" class="form-control" value="{{ $aboutUsfrontSetting['our-team-title']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="form-group">
				<label><b>{{ $aboutUsfrontSetting['our-team-description']['name'] }} :</b></label>
				<textarea class="form-control" name="homeFrontSetting[our-team-description]">{{ $aboutUsfrontSetting['our-team-description']['value_english'] }} </textarea>
			</div>
		</div>
	</div>
	<center><button type="submit" class="btn btn-success btn-sm save-btn mt-3">Submit</button></center>
</form>