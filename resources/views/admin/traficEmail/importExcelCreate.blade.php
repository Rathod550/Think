@extends($adminTheme)

@section('title', 'Trafic Email Import')

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
						  			<h5 class="card-title">Trafic Email Import</h5>
								</div>
								<div class="col-md-6">
									<a href="{{ route('admin.trafic.email') }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
								</div>
							</div>

							{!! Form::open(['route' => 'admin.trafic.email.excel.store', 'method' => 'post', 'files' => 'true']) !!}
			                    <label>Upload Excel: <span class="text-danger">*</span></label><br>
							    {{ Form::file('excel_file', ['class' => 'form-control']) }}
							    @if (count($errors) > 0)
									<div class="row">
									    <div class="col-md-12">
							                @foreach($errors->all() as $error)
							                	<span class="text-danger">{{ $error }}</span><br>
							                @endforeach               
									    </div>
									</div>
								@endif
							    <div class="row">
								    <div class="col-md-12">
								    	<a href="{{ asset('exampleFile/import-trafic-email-formate.ods') }}"><i class="fa fa-download" aria-hidden="true"></i> Download Sample File</a>
								        <center><button type="submit" class="btn btn-success btn-sm mt-3 save-btn">Save</button></center>
								    </div>
								</div>
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