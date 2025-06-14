<form method="POST" action="{{ route('admin.front.setting.update') }}">
	@csrf
	<input type="hidden" name="form_type" value="go_to_blogs">
	<center><h4><b>Contact Us Section</b></h4></center>
	<br>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $contactUsfrontSetting['our-headquarters']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[our-headquarters]" class="form-control" value="{{ $contactUsfrontSetting['our-headquarters']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $contactUsfrontSetting['our-headquarters-content']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[our-headquarters-content]" class="form-control" value="{{ $contactUsfrontSetting['our-headquarters-content']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $contactUsfrontSetting['speak-to-us']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[speak-to-us]" class="form-control" value="{{ $contactUsfrontSetting['speak-to-us']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $contactUsfrontSetting['speak-to-us-content']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[speak-to-us-content]" class="form-control" value="{{ $contactUsfrontSetting['speak-to-us-content']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $contactUsfrontSetting['make-a-video-call']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[make-a-video-call]" class="form-control" value="{{ $contactUsfrontSetting['make-a-video-call']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $contactUsfrontSetting['make-a-video-call-content']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[make-a-video-call-content]" class="form-control" value="{{ $contactUsfrontSetting['make-a-video-call-content']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $contactUsfrontSetting['follow-on-twitter']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[follow-on-twitter]" class="form-control" value="{{ $contactUsfrontSetting['follow-on-twitter']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $contactUsfrontSetting['follow-on-twitter-content']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[follow-on-twitter-content]" class="form-control" value="{{ $contactUsfrontSetting['follow-on-twitter-content']['value_english'] }}">
			</div>
		</div>
	</div>
	<center><button type="submit" class="btn btn-success btn-sm save-btn mt-3">Submit</button></center>
</form>