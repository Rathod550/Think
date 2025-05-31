@extends($adminTheme)

@section('title', 'Client Says')

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
						  			<h5 class="card-title">Client Says</h5>
								</div>
								<div class="col-md-6">
									@if(auth()->user()->can('Client Says Create'))
										<a href="{{ route('admin.client.says.create') }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="fa fa-plus" aria-hidden="true"></i></a>
									@endif
								</div>
							</div>

							<!-- Table with stripped rows -->
							<div class="table-responsive">
								<table class="table table-bordered data-table table-striped">
							        <thead>
							            <tr>
							                <th>No</th>
							                <th>Image</th>
							                <th>Name</th>
							                <th>Action</th>
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
		        ajax: "{{ route('admin.client.says') }}",
		        columns: [
		            {
			            data: null,
			            name: 'id',
			            render: (data, type, row, meta) => meta.row + meta.settings._iDisplayStart + 1,
			            orderable: false,
			            searchable: false
			        },
		            {data: 'image', name: 'image'},
		            {data: 'name', name: 'name'},
		            {data: 'action', name: 'action', orderable: false, searchable: false},
		        ]
		    });
		});
	</script>

@endsection