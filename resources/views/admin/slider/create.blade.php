@extends($adminTheme)

@section('title', 'Slider Create')

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
						  			<h5 class="card-title">Sliders Create</h5>
								</div>
								<div class="col-md-6">
									<a href="{{ route('admin.slider') }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="ri-arrow-left-fill"></i></a>
								</div>
							</div>

							{!! Form::open(['route' => 'admin.slider.store', 'method' => 'post', 'files' => 'true']) !!}
			                    @include('admin.slider.form')
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