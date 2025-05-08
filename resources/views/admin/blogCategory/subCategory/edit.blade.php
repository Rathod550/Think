@extends($adminTheme)

@section('title', 'Blog Category Sub Edit')

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
						  			<h5 class="card-title">{{ $blogCategory->name ?? '' }} | Category Sub Create</h5>
								</div>
								<div class="col-md-6">
									<a href="{{ route('admin.blog.category.sub', [$blogCategory->id]) }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
								</div>
							</div>

							{!! Form::model($blogCategorySub, ['route' => ['admin.blog.category.sub.update', $blogCategorySub->id], 'method' => 'PUT', 'files' => true]) !!}
							    @include('admin.blogCategory.subCategory.form')
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