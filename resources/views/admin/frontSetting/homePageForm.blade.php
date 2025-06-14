<form method="POST" action="{{ route('admin.front.setting.update') }}">
	@csrf
	<input type="hidden" name="form_type" value="go_to_blogs">
	<center><h4><b>Go To Blogs Section</b></h4></center>
	<br>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['go-to-blogs-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[go-to-blogs-title]" class="form-control" value="{{ $homefrontSetting['go-to-blogs-title']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['go-to-blogs-button-text']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[go-to-blogs-button-text]" class="form-control" value="{{ $homefrontSetting['go-to-blogs-button-text']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-md-12">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['go-to-blogs-description']['name'] }} :</b></label>
				<textarea class="form-control" name="homeFrontSetting[go-to-blogs-description]">{{ $homefrontSetting['go-to-blogs-description']['value_english'] }} </textarea>
			</div>
		</div>
	</div>
	<center><button type="submit" class="btn btn-success btn-sm save-btn mt-3">Submit</button></center>
</form>

<hr>

<form class="mt-3" method="POST" action="{{ route('admin.front.setting.update') }}">
	@csrf
	<input type="hidden" name="form_type" value="why_choose_us">
	<center><h4><b>Why Choose Us Section</b></h4></center>
	<br>
	<div class="row">
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label><b>{{ $homefrontSetting['why-choose-us-title']['name'] }} :</b></label>
						<input type="text" name="homeFrontSetting[why-choose-us-title]" class="form-control" value="{{ $homefrontSetting['why-choose-us-title']['value_english'] }}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mt-3">
					<div class="form-group">
						<label><b>{{ $homefrontSetting['why-choose-us-description']['name'] }} :</b></label>
						<textarea class="form-control" name="homeFrontSetting[why-choose-us-description]">{{ $homefrontSetting['why-choose-us-description']['value_english'] }} </textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label><b>{{ $homefrontSetting['our-mission-title']['name'] }} :</b></label>
						<input type="text" name="homeFrontSetting[our-mission-title]" class="form-control" value="{{ $homefrontSetting['our-mission-title']['value_english'] }}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mt-3">
					<div class="form-group">
						<label><b>{{ $homefrontSetting['our-mission-description']['name'] }} :</b></label>
						<textarea class="form-control" name="homeFrontSetting[our-mission-description]">{{ $homefrontSetting['our-mission-description']['value_english'] }} </textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label><b>{{ $homefrontSetting['what-you-get-title']['name'] }} :</b></label>
						<input type="text" name="homeFrontSetting[what-you-get-title]" class="form-control" value="{{ $homefrontSetting['what-you-get-title']['value_english'] }}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mt-3">
					<div class="form-group">
						<label><b>{{ $homefrontSetting['what-you-get-description']['name'] }} :</b></label>
						<textarea class="form-control" name="homeFrontSetting[what-you-get-description]">{{ $homefrontSetting['what-you-get-description']['value_english'] }} </textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<center><button type="submit" class="btn btn-success btn-sm save-btn mt-3">Submit</button></center>
</form>

<hr>

<form method="POST" action="{{ route('admin.front.setting.update') }}">
	@csrf
	<input type="hidden" name="form_type" value="slogan_section">
	<center><h4><b>Slogan Section</b></h4></center>
	<br>
	<div class="row mt-2">
		<div class="col-md-12">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['slogan-text']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[slogan-text]" class="form-control" value="{{ $homefrontSetting['slogan-text']['value_english'] }}">
			</div>
		</div>
	</div>
	<center><button type="submit" class="btn btn-success btn-sm save-btn mt-3">Submit</button></center>
</form>

<hr>

<form method="POST" action="{{ route('admin.front.setting.update') }}">
	@csrf
	<input type="hidden" name="form_type" value="slogan_section">
	<center><h4><b>Information section</b></h4></center>
	<br>
	<div class="row mt-2">
		<div class="col-md-3">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['information-section-1-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[information-section-1-title]" class="form-control" value="{{ $homefrontSetting['information-section-1-title']['value_english'] }}">
			</div>
			<div class="form-group mt-3">
				<label><b>{{ $homefrontSetting['information-section-1-description']['name'] }} :</b></label>
				<textarea class="form-control" name="homeFrontSetting[information-section-1-description]">{{ $homefrontSetting['information-section-1-description']['value_english'] }} </textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['information-section-2-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[information-section-2-title]" class="form-control" value="{{ $homefrontSetting['information-section-2-title']['value_english'] }}">
			</div>
			<div class="form-group mt-3">
				<label><b>{{ $homefrontSetting['information-section-2-description']['name'] }} :</b></label>
				<textarea class="form-control" name="homeFrontSetting[information-section-2-description]">{{ $homefrontSetting['information-section-2-description']['value_english'] }} </textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['information-section-3-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[information-section-3-title]" class="form-control" value="{{ $homefrontSetting['information-section-3-title']['value_english'] }}">
			</div>
			<div class="form-group mt-3">
				<label><b>{{ $homefrontSetting['information-section-3-description']['name'] }} :</b></label>
				<textarea class="form-control" name="homeFrontSetting[information-section-3-description]">{{ $homefrontSetting['information-section-3-description']['value_english'] }} </textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['information-section-4-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[information-section-4-title]" class="form-control" value="{{ $homefrontSetting['information-section-4-title']['value_english'] }}">
			</div>
			<div class="form-group mt-3">
				<label><b>{{ $homefrontSetting['information-section-4-description']['name'] }} :</b></label>
				<textarea class="form-control" name="homeFrontSetting[information-section-4-description]">{{ $homefrontSetting['information-section-4-description']['value_english'] }} </textarea>
			</div>
		</div>
	</div>
	<center><button type="submit" class="btn btn-success btn-sm save-btn mt-3">Submit</button></center>
</form>

<hr>

<form method="POST" action="{{ route('admin.front.setting.update') }}">
	@csrf
	<input type="hidden" name="form_type" value="go_to_blogs">
	<center><h4><b>Our Skill Section</b></h4></center>
	<br>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['progress-bar-1-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[progress-bar-1-title]" class="form-control" value="{{ $homefrontSetting['progress-bar-1-title']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['progress-bar-1-percentage']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[progress-bar-1-percentage]" class="form-control" value="{{ $homefrontSetting['progress-bar-1-percentage']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['progress-bar-2-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[progress-bar-2-title]" class="form-control" value="{{ $homefrontSetting['progress-bar-2-title']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['progress-bar-2-percentage']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[progress-bar-2-percentage]" class="form-control" value="{{ $homefrontSetting['progress-bar-2-percentage']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['progress-bar-3-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[progress-bar-3-title]" class="form-control" value="{{ $homefrontSetting['progress-bar-3-title']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['progress-bar-3-percentage']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[progress-bar-3-percentage]" class="form-control" value="{{ $homefrontSetting['progress-bar-3-percentage']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['progress-bar-4-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[progress-bar-4-title]" class="form-control" value="{{ $homefrontSetting['progress-bar-4-title']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['progress-bar-4-percentage']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[progress-bar-4-percentage]" class="form-control" value="{{ $homefrontSetting['progress-bar-4-percentage']['value_english'] }}">
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['progress-bar-5-title']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[progress-bar-5-title]" class="form-control" value="{{ $homefrontSetting['progress-bar-5-title']['value_english'] }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label><b>{{ $homefrontSetting['progress-bar-5-percentage']['name'] }} :</b></label>
				<input type="text" name="homeFrontSetting[progress-bar-5-percentage]" class="form-control" value="{{ $homefrontSetting['progress-bar-5-percentage']['value_english'] }}">
			</div>
		</div>
	</div>
	<center><button type="submit" class="btn btn-success btn-sm save-btn mt-3">Submit</button></center>
</form>