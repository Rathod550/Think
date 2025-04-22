@extends($adminTheme)

@section('title', 'Profile')

@section('style')

@endsection

@section('content')
	<main id="main" class="main">
	    <section class="section">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
						  			<h5 class="card-title">Profile</h5>
								</div>
								<hr>
							</div>
							<div class="row">
								<div class="col-md-4">
									@if(!empty($user->profile) && $user->profile)
									    <center style="margin-top:30px; "> <img src="{{ asset('storage/' . $user->profile) }}" class="rounded-circle" width="150" height="150" />
		                                    <h4 class="card-title">{{ auth()->user()->name }} ({{ auth()->user()->getRoleNames()->first() ?? 'No Role Assigned' }})</h4>
		                                </center>
									@else
										<center style="margin-top:30px; "> <img src="{{ asset('adminTheme/assets/img/profile-img.jpg') }}" class="rounded-circle" width="150" />
		                                    <h4 class="card-title">{{ auth()->user()->name }} ({{ auth()->user()->getRoleNames()->first() ?? 'No Role Assigned' }})</h4>
		                                </center>
									@endif

								</div>
								<div class="col-md-8">
									{!! Form::model($user, ['route' => ['admin.profile.update', $user->id], 'method' => 'PUT', 'files' => true]) !!}
										<div class="row">
											<div class="col-md-11">
												<div class="form-group">
										            <label>Name: <span class="text-danger">*</span></label><br>
										            {{ Form::text('name', old('name') , ['class' => 'form-control', 'placeholder' => 'Name']) }}
										            @error('name')
										                <span class="text-danger">{{ $message }}</span>
										            @enderror
										        </div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-11">
												<div class="form-group">
										            <label>Email: <span class="text-danger">*</span></label><br>
										            {{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email']) }}
										            @error('email')
										                <span class="text-danger">{{ $message }}</span>
										            @enderror
										        </div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-11">
												<div class="form-group">
										            <label>Password: </label><br>
										            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
										            @error('password')
										                <span class="text-danger">{{ $message }}</span>
										            @enderror
										        </div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-11">
												<div class="form-group">
												    <label>Upload Profile:</label><br>
												    {{ Form::file('profile', ['class' => 'form-control']) }}
												    @error('profile')
												        <span class="text-danger">{{ $message }}</span>
												    @enderror
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-11">
												<div class="form-group">
												    <center><button type="submit" class="btn btn-success mt-2">Save</button></center>
												</div>
											</div>
										</div>
									{!! Form::close() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </section>

  	</main>
@endsection

@section('script')
	
@endsection