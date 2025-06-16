@extends($adminTheme)

@section('title', 'Blog Category')

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
						  			<h5 class="card-title">Blog Category</h5>
								</div>
								<div class="col-md-6">
									@if(auth()->user()->can('User Blog Category Create'))
										<a href="{{ route('admin.blog.create') }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="fa fa-plus" aria-hidden="true"></i></a>
									@endif
								</div>
							</div>

							<!-- Table with stripped rows -->
							<div class="table-responsive">
								<table class="table table-bordered data-table table-striped">
							        <thead>
							            <tr>
							                <th width="10%">No</th>
							                <th width="30%">Name</th>
							                <th width="20%">Image</th>
							                <th width="20%">Status</th>
							                <th width="20%">Action</th>
							            </tr>
							        </thead>
							        <tbody>

							        </tbody>
							    </table>
							</div>
							<!-- End Table with stripped rows -->
						</div>
					</div>
				</div>
			</div>
	    </section>
  	</main>
@endsection

@section('script')
	<script type="text/javascript">
		
	</script>
@endsection