@extends($adminTheme)

@section('title', 'Blog Category Sub')

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
						  			<h5 class="card-title">{{ $blogCategory->name ?? '' }} | Category Sub</h5>
								</div>
								<div class="col-md-6">
									<a href="{{ route('admin.blog.category') }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right; margin-left: 10px;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
									@if(auth()->user()->can('User Blog Category Sub Create'))
										<a href="{{ route('admin.blog.category.sub.create', [$blogCategory->id]) }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="fa fa-plus" aria-hidden="true"></i></a>
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
							                <th width="20%">Status</th>
							                <th width="20%">Action</th>
							            </tr>
							        </thead>
							        <tbody>
							        	@if(!empty($blogCategorySubs) && $blogCategorySubs->count() > 0)
							        		@foreach($blogCategorySubs as $key => $value)
						        				<tr>
								        			<td>{{ ++$key }}</td>
								        			<td>{{ $value->name ?? '' }}</td>
								        			<td>
								        				@if(auth()->user()->can('User Blog Category Sub Status'))
									        				<select class="form-control form-select blog-category-status" data-id="{{ $value->id }}" data-route="{{ route('admin.set.blog.category.sub.status') }}">
						                                        <option value="1" @if($value->status == 1) selected @endif>Yes</option>
						                                        <option value="0" @if($value->status == 0) selected @endif>No</option>
						                                    </select>
								        				@else
								        					{{ $value->status == 1 ? 'Yes' : 'No' }}
								        				@endif
								        			</td>
								        			<td>
								        				@if(!auth()->user()->can('User Blog Category Sub Edit') && !auth()->user()->can('User Blog Category Sub Delete'))
								        					<span class="text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Access denied</span>
								        				@else
								        					@if((auth()->user()->can('User Blog Category Sub Edit')))
									        					<a href="{{ route('admin.blog.category.sub.edit', [$value->parent_id,$value->id]) }}" class="edit btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
								        					@endif
								        					@if((auth()->user()->can('User Blog Category Sub Delete')))
									        					<a href="{{ route('admin.blog.category.delete', [$value->id]) }}" class="edit btn btn-danger btn-sm delete-btn" data-route='{{ route('admin.blog.category.delete', [$value->id]) }}'><i class="fa fa-trash" aria-hidden="true"></i></a>
								        					@endif
								        				@endif
								        			</td>
						        				</tr>
							        		@endforeach
							        	@else
							        		<tr>
							        			<td colspan="4">
							        				<center>No Data Found</center>
							        			</td>
							        		</tr>
							        	@endif
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
	<script src="{{ asset('adminTheme/pageLevel/js/blogCategory/blogCategory.js') }}"></script>
@endsection