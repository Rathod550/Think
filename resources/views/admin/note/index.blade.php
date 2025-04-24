@extends($adminTheme)

@section('title', 'Notes')

@section('style')
	<link href="{{ asset('adminTheme/pageLevel/css/note/note.css') }}" rel="stylesheet">
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
						  			<h5 class="card-title">Notes</h5>
								</div>
								<div class="col-md-6">
									@if(auth()->user()->can('User Note Create'))
										<a href="{{ route('admin.notes.create') }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="fa fa-plus" aria-hidden="true"></i></a>
									@endif
								</div>
							</div>
							<div class="row mt-3">
							    @if($notes->count() > 0)
							        @foreach($notes as $note)
							            <div class="col-12 col-md-4 mt-2">
							                <div class="note-body border p-3 rounded shadow-sm">
							                    <div class="note-header mb-2">
							                        <div class="d-flex justify-content-between align-items-start">
							                            <h6 class="mb-0">{{ $note->title }}</h6>
							                            <div class="note-actions ms-2">
							                            	@if(auth()->user()->can('User Note Edit'))
								                                <a href="{{ route('admin.notes.edit', $note->id) }}" class="me-2">
								                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								                                </a>
							                                @endif
							                                @if(auth()->user()->can('User Note Delete'))
								                                <a href="{{ route('admin.notes.delete', $note->id) }}" 
								                                   data-route="{{ route('admin.notes.delete', $note->id) }}" 
								                                   class="text-danger delete-btn">
								                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
								                                </a>
							                                @endif
							                                @if(!auth()->user()->can('User Note Edit') && !auth()->user()->can('User Note Delete'))
							                                	<span class="text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Access denied</span>
							                                @endif
							                            </div>
							                        </div>
							                    </div>
							                    <div class="note-content">
							                        {{ $note->description }}
							                    </div>
							                </div>
							            </div>
							        @endforeach
							    @else
							        <div class="col-12 text-center">
							            <h4 class="text-danger">No Notes Found</h4>
							        </div>
							    @endif
							</div>
							<div class="row">
								<div class="col-md-12">
									@if ($notes->hasPages())
									    <div class="mt-4 d-flex justify-content-center">
									        {{ $notes->links() }}
									    </div>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </section>
  	</main>
@endsection

@section('script')
	
@endsection