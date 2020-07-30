@extends('layouts.admin.master')

@section('title', config('app.name') . ' ~ Add My Education')

@section('content')
	<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h5 class="txt-dark">Add My Education</h5>
		</div>
		<!-- Breadcrumb -->
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<ol class="breadcrumb">
				<li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
				<li><a href="{{ route('admin.education.index') }}">My Education</a></li>
				<li class="active"><span>Add My Education</span></li>
			</ol>
		</div>
		<!-- /Breadcrumb -->
	</div>
	<!-- /Title -->

	<!-- Row -->
	<div class="row">
		<!-- Add My Education -->
		<div class="col-md-6">
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-left">
						<h6 class="panel-title txt-dark">Add My Education</h6>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="form-wrap">
									<form method="post" action="{{ route('admin.education.store') }}">
										@csrf
										<!-- Start Date -->
										<div class="form-group @error('start_date') has-error @enderror">
											<label class="control-label mb-10" for="start_date">Start Date</label>

											<div class="input-group">
												<div class="input-group-addon">
													<i class="icon-clock"></i>
												</div>

												<input type="number" class="form-control" name="start_date" id="start_date" value="{{ old('start_date') }}" placeholder="Enter Start Date" required>
											</div>

											@error('start_date')
												<div class="text-danger small">{{ $message }}</div>
											@enderror
										</div>
										<!--/==/ End of Start Date -->

										<!-- End Date -->
										<div class="form-group @error('end_date') has-error @enderror">
											<label class="control-label mb-10" for="end_date">End Date</label>

											<div class="input-group">
												<div class="input-group-addon">
													<i class="icon-clock"></i>
												</div>

												<input type="text" class="form-control" name="end_date" id="end_date" value="{{ old('end_date') }}" placeholder="Enter End Date" required>
											</div>

											@error('end_date')
												<div class="text-danger small">{{ $message }}</div>
											@enderror
										</div>
										<!--/==/ End of End Date -->

										<!-- Name -->
										<div class="form-group @error('name') has-error @enderror">
											<label class="control-label mb-10" for="name">Name</label>

											<div class="input-group">
												<div class="input-group-addon">
													<i class="icon-user"></i>
												</div>

												<input class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Name" required>
											</div>

											@error('name')
												<div class="text-danger small">{{ $message }}</div>
											@enderror
										</div>
										<!--/==/ End of Name -->

										<!-- Field -->
										<div class="form-group @error('field') has-error @enderror">
											<label class="control-label mb-10" for="field">Field</label>

											<div class="input-group">
												<div class="input-group-addon">
													<i class="icon-clock"></i>
												</div>

												<input class="form-control" name="field" id="field" value="{{ old('field') }}" placeholder="Enter Field" required>
											</div>

											@error('field')
												<div class="text-danger small">{{ $message }}</div>
											@enderror
										</div>
										<!--/==/ End of Field -->

										<!-- Place -->
										<div class="form-group @error('place') has-error @enderror">
											<label class="control-label mb-10" for="place">Place</label>

											<div class="input-group">
												<div class="input-group-addon">
													<i class="icon-clock"></i>
												</div>

												<input class="form-control" name="place" id="place" value="{{ old('place') }}" placeholder="Enter Place" required>
											</div>

											@error('place')
												<div class="text-danger small">{{ $message }}</div>
											@enderror
										</div>
										<!--/==/ End of Place -->

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
