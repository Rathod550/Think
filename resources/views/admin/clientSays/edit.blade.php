@extends($adminTheme)

@section('title', 'Client Says Edit')

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
						  			<h5 class="card-title">Client Says Edit</h5>
								</div>
								<div class="col-md-6">
									<a href="{{ route('admin.client.says') }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
								</div>
							</div>

							{!! Form::model($clientSay, ['route' => ['admin.client.says.update', $clientSay->id], 'method' => 'PUT', 'files' => true]) !!}
							    @include('admin.clientSays.form')
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