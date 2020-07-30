@extends('layouts.admin.master')

@section('title', config('app.name') . ' ~ My Experiences')

@section('content')
	<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h5 class="txt-dark">My Experiences</h5>
		</div>
		<!-- Breadcrumb -->
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<ol class="breadcrumb">
				<li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
				<li class="active"><span>My Experiences</span></li>
			</ol>
		</div>
		<!-- /Breadcrumb -->
	</div>
	<!-- /Title -->

	<!-- Row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-left">
						<h6 class="panel-title txt-dark">My Experiences</h6>
					</div>
					<div class="pull-right">
						<a href="{{ route('admin.experience.create') }}" class="btn btn-success">Add New</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="table-wrap">
							<div class="table-responsive">
								<table id="datable_1" class="table table-hover display  pb-30" >
									<thead>
										<tr>
											<th>ID</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>Name</th>
											<th>Company</th>
											<th>Created Date</th>
											<th>Action</th>
										</tr>
									</thead>

									@if(App\Experience::all()->count() > 25)
										<tfoot>
											<tr>
												<th>ID</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Name</th>
												<th>Company</th>
												<th>Created Date</th>
												<th>Action</th>
											</tr>
										</tfoot>
									@endif

									<tbody>
										@foreach($experience as $exp)
											<tr>
												<td>{{ $exp->id }}</td>
												<td>{{ $exp->start_date ?? '' }}</td>
												<td>{{ $exp->end_date ?? '' }}</td>
												<td>{{ $exp->name ?? '' }}</td>
												<td>{{ $exp->company ?? '' }}</td>
												<td>{{ $exp->created_at->diffForHumans() }}</td>
												<td>
													<a href="{{ route('admin.experience.destroy', $exp->id) }}" onclick="event.preventDefault(); document.getElementById('#exp-delete').submit();" class="btn btn-danger btn-sm">
														<i class="fa fa-remove"></i>
													</a>

													<form method="post" action="{{ route('admin.experience.destroy', $exp->id) }}" id="exp-delete" style="display: none;">
														@csrf
														@method('DELETE')
													</form>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<!-- /Row -->
@endsection
