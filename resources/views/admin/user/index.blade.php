@extends($adminTheme)

@section('title', 'Users')

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
						  			<h5 class="card-title">Users</h5>
								</div>
								<div class="col-md-6">
									<a href="{{ route('admin.user.create') }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="fa fa-plus" aria-hidden="true"></i></a>
								</div>
							</div>

							<!-- Table with stripped rows -->
							<div class="table-responsive">
								<table class="table table-bordered data-table table-striped">
							        <thead>
							            <tr>
							                <th>No</th>
							                <th>Name</th>
							                <th>Email</th>
							                <th width="100px">Action</th>
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
		$(document).ready(function(){
		    var table = $('.data-table').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: "{{ route('admin.users') }}",
		        columns: [
		            {data: 'id', name: 'id'},
		            {data: 'name', name: 'name'},
		            {data: 'email', name: 'email'},
		            {data: 'action', name: 'action', orderable: false, searchable: false},
		        ]
		    });
		});
	</script>

@endsection