@extends($adminTheme)

@section('title', 'Trafic Email Edit')

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
						  			<h5 class="card-title">Trafic Email Edit</h5>
								</div>
								<div class="col-md-6">
									<a href="{{ route('admin.trafic.email') }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
								</div>
							</div>

							{!! Form::model($traficEmail, ['route' => ['admin.trafic.email.update', $traficEmail->id], 'method' => 'PUT', 'files' => true]) !!}
							    @include('admin.traficEmail.form')
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