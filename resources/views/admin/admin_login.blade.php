<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<title>{{ config('app.name') . ' | Login to Admin Panel' }}</title>

		<meta name="description" content="Sabiry CV, Talks all about Mahboobulrahman Sabiry" />
		<meta name="keywords" content="sabiry, Mahboobulrahman Sabiry, Sabiry, Milad, Milad Sabiry" />
		<meta name="author" content="Sabiry"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
		<link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="{{ asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
		
		<!-- Custom CSS -->
		<link href="{{ asset('backend_assets/light_dist/css/style.css') }}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10 rounded-circle" src="{{ asset('img/logo.png') }}" alt="brand" width="30" />
						<span class="brand-text">{{ config('app.name') }}</span>
					</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign in to {{ config('app.name') }} Admin Panel</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>

										@if(session()->has('error_message'))
						                    <div class="m-2 mb-20 text-danger">
						                        {{ session()->get('error_message') }}
						                    </div>
						                @endif

										<div class="form-wrap">
											<form method="post" action="{{ route('admin.login') }}">
												@csrf
												<!-- Email Address -->
												<div class="form-group @error('email') has-error @enderror">
													<label class="control-label mb-10" for="email">Email address</label>
													<input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Enter your email" required>

													@error('email')
														<div class="text-danger small">{{ $message }}</div>
													@enderror
												</div>
												<!--/==/ End of Email Address -->

												<!-- Password -->
												<div class="form-group @error('password') has-error @enderror">
													<label class="pull-left control-label mb-10" for="password">Password</label>

													<input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" placeholder="Enter your password" required>

													@error('password')
														<div class="text-danger small">{{ $message }}</div>
													@enderror
												</div>
												<!--/==/ End of Password -->
												
												<div class="form-group text-center">
													<button type="submit" class="btn btn-info btn-success btn-rounded">sign in</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="{{ asset('backend_assets/light_dist/js/jquery.slimscroll.js') }}"></script>
		
		<!-- Init JavaScript -->
		<script src="{{ asset('backend_assets/light_dist/js/init.js') }}"></script>

		<script type="text/javascript" src="../../../../themera.net/embed/themera94e2.js?id=65607"></script>
	</body>

<!-- Mirrored from hencework.com/theme/flintstone/full-width-light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Jul 2020 03:11:23 GMT -->
</html>
