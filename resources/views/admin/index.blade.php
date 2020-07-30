@extends('layouts.admin.master')

@section('title', config('app.name') . ' ~ Dashboard')

@section('content')
	<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h5 class="txt-dark">Dashboard</h5>
		</div>
		<!-- Breadcrumb -->
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<ol class="breadcrumb">
				<li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
				<li class="active"><span>Dashboard</span></li>
			</ol>
		</div>
		<!-- /Breadcrumb -->
	</div>
	<!-- /Title -->
@endsection

@section('extraJs')
	<script src="{{ asset('backend_assets/light_dist/js/dashboard-data.js') }}"></script>
@endsection
