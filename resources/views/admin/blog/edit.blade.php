@extends($adminTheme)

@section('title', 'Blog Edit')

@section('style')
	<style>
	    /* Hide CKEditor insecure warning banner */
	    .cke_notification_warning {
	        display: none !important;
	    }
	</style>
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
						  			<h5 class="card-title">Blog Edit</h5>
								</div>
								<div class="col-md-6">
									<a href="{{ route('admin.blog') }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
								</div>
							</div>

							{!! Form::model($blog, ['route' => ['admin.blog.update', $blog->id], 'method' => 'PUT', 'files' => true]) !!}
							    @include('admin.blog.form')
							{!! Form::close() !!}

						</div>
					</div>

				</div>
			</div>
	    </section>

  	</main>
@endsection

@section('script')
	<script>
		var subCategoryId = "{{ $blog->blog_sub_category_id ?? '' }}";
	</script>
	<script src="{{ asset('adminTheme/pageLevel/js/blog/blog.js') }}"></script>
@endsection