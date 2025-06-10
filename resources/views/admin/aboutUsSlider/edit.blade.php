@extends($adminTheme)

@section('title', 'About Us Slider Edit')

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
						  			<h5 class="card-title">About Us Slider Edit</h5>
								</div>
								<div class="col-md-6">
									<a href="{{ route('admin.aboutUs.slider') }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
								</div>
							</div>

							{!! Form::model($slider, ['route' => ['admin.aboutUs.slider.update', $slider->id], 'method' => 'PUT', 'files' => true]) !!}
							    @include('admin.aboutUsSlider.form')
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