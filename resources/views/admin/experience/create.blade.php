@extends('layouts.admin.master')

@section('title', config('app.name') . ' ~ Add My Experience')

@section('content')
	<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h5 class="txt-dark">Add My Experience</h5>
		</div>
		<!-- Breadcrumb -->
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<ol class="breadcrumb">
				<li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
				<li><a href="{{ route('admin.experience.index') }}">My Experiences</a></li>
				<li class="active"><span>Add My Experience</span></li>
			</ol>
		</div>
		<!-- /Breadcrumb -->
	</div>
	<!-- /Title -->

	<!-- Row -->
	<div class="row">
		<!-- Add My Experience -->
		<div class="col-md-6">
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-left">
						<h6 class="panel-title txt-dark">Add My Experience</h6>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="form-wrap">
									<form method="post" action="{{ route('admin.experience.store') }}">
										@csrf
										<!-- Key -->
										<div class="form-group @error('key') has-error @enderror">
											<label class="control-label mb-10" for="key">Key</label>

											<div class="input-group">
												<div class="input-group-addon">
													<i class="icon-key"></i>
												</div>

												<input class="form-control" name="key" id="key" value="{{ old('key') }}" placeholder="Enter Key" required>
											</div>

											@error('key')
												<div class="text-danger small">{{ $message }}</div>
											@enderror
										</div>
										<!--/==/ End of Key -->

										<!-- Value -->
										<div class="form-group @error('value') has-error @enderror">
											<label class="control-label mb-10" for="value">Value</label>

											<div class="input-group">
												<div class="input-group-addon">
													<i class="icon-note"></i>
												</div>

												<textarea class="form-control" name="value" id="value" placeholder="Enter Value">{{ old('value') }}</textarea>
											</div>

											@error('value')
												<div class="text-danger small">{{ $message }}</div>
											@enderror
										</div>
										<!--/==/ End of Value -->

										<button type="submit" class="btn btn-success mr-10">Save</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/==/ End of Add Education -->
	</div>
	<!-- /Row -->
@endsection
