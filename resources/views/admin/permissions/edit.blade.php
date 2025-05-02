@extends($adminTheme)

@section('title', 'Roles  Permissions Edit')

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
						  			<h5 class="card-title">Roles Permissions Edit</h5>
								</div>
								<div class="col-md-6">
									<a href="{{ route('admin.roles') }}" type="button" class="btn btn-success btn-sm mt-3" style="float: right;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
								</div>
							</div>

							{!! Form::model($role, ['route' => ['admin.roles.permission.update', $role->id], 'method' => 'PUT', 'files' => true]) !!}
							    <div class="row">
                                    <?php $group_name = ''; ?>
                                    @foreach($permission as $value)
                                        @if($group_name != $value->group_name)
                                            <hr>
                                            <div class="col-md-12 mb-1 mt-1">
                                                <u><strong>{{ $value->group_name }}</strong></u>
                                            </div>
                                        @endif
                                        <div class="col-md-3 mb-1">
                                            <fieldset>
                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" id="checkbox_{{ $value->id }}" value="{{ $value->name }}" name="checkbox[]" {{ in_array($value->name, $rolePermission) ? 'checked' : '' }}>
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <label for="checkbox_{{ $value->id }}"><strong>{{ $value->name }}</strong></label>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <?php $group_name = $value->group_name; ?>
                                    @endforeach
	                            </div>
	                            <div class="col-md-12 text-center mt-5">
	                            	<button type="submit" class="btn btn-icon btn-success btn-sm save-btn">Save</button>
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