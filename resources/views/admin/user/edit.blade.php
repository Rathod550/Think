@extends($adminTheme)

@section('title', 'Users Edit')

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
								<div class="col-md-6">
						  			<h5 class="card-title">Users Edit</h5>
								</div>
								<div class="col-md-6">
									<a href="{{ route('admin.users') }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="ri-arrow-left-fill"></i></a>
								</div>
							</div>

							{!! Form::model($user, ['route' => ['admin.user.update', $user->id], 'method' => 'PUT', 'files' => true]) !!}
							    @include('admin.user.form')
							{!! Form::close() !!}

						</div>
					</div>

				</div>
			</div>
	    </section>

  	</main>
@endsection

@section('script')
	
@endsection