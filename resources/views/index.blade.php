<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{{ $infos['myName'] ?? config('app.name') }} {{ $infos['myLastName'] ?? '' }}</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta content="Mahboobulrahman Sabiry CV Website" name="description">
		<meta content="Sabiry" name="author">

		<!-- App favicon -->
		<link rel="shortcut icon" href="{{ asset('img/logo.png') }}">

		<link href="{{ asset('front_assets/horizontal/plugins/filter/magnific-popup.css') }}" rel="stylesheet" type="text/css">
		<link href="plugins/animated/headline.css" rel="stylesheet" type="text/css">

		<!-- App css -->
		<link href="{{ asset('front_assets/horizontal/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('front_assets/horizontal/css/icons.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('front_assets/horizontal/css/style.css') }}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-navbar">
			<div class="container">
				<a class="navbar-brand" href="{{ route('index') }}">
					<!-- <i class="uil uil-cell text-primary"></i> -->
					<img class="rounded-circle" src="{{ asset('img/logo.png') }}" width="20">
					{{ config('app.name') }}
				</a> 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!--end navbar-toggler-->

				<div class="collapse navbar-collapse" id="nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="btn btn-blue btn-sm px-4" href="#" id="lnkPrint">
								<i class="'uil uil-print mr-1 font-16"></i>Print
							</a>
						</li>
					</ul>
				</div>
				<!--end collapse-->
			</div>
			<!--end container-->
		</nav>
		<!--end nav-->

		<div class="main-wraper">
			<!-- Profile Section -->
			<section class="section bg-profile" id="profile_ripple">
				<div class="zoo-profile">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-print-6 align-self-center mb-3 mb-lg-0">
								<div class="zoo-profile-main row">
									<div class="zoo-profile-main-pic">
										<a href="{{ asset('img/Sabiry.jpg') }}" target="_blank">
											<img src="{{ asset('img/Sabiry.jpg') }}" alt="{{ $infos['myName'] ?? '' }}" class="rounded-circle" width="120">
										</a>
										 
										<span class="zoo-user-message">
											<i class="uil uil-comment-dots"></i>
										</span>
									</div>
									<!--end zoo-profile-main-pic-->

									<div class="zoo-profile_user-detail">
										<h5 class="zoo-user-name">{{ $infos['myName'] ?? '' }} {{ $infos['myLastName'] ?? '' }}</h5>
										<p class="cd-headline loading-bar">
											<span class="cd-words-wrapper">
												<b class="is-visible">UI/UX Designer</b> 
												<b>Angular Developer</b> 
												<b>React Native Developer</b>
											</span>
										</p>
									</div>
									<!--end zoo-profile_user-detail-->
								</div>
								<!--end profile-main-pic-->
							</div>
							<!--end col-->

							<div class="col-sm-4 col-print-4 ml-auto">
								<ul class="list-unstyled personal-detail">
									<li>
										<i class="'uil uil-phone-volume mr-2"></i> 
										<b>Phone </b>: {{ $infos['myPhone'] ?? '' }}
									</li>
									<li class="mt-2">
										<i class="uil uil-envelope mt-2 mr-2"></i> 
										<b>Email </b>: {{ $infos['myEmail'] ?? '' }}
									</li>
									<li class="mt-2">
										<i class="uil uil-map-marker mt-2 mr-2"></i> 
										<b>Address </b>: {{ $infos['myAddress'] ?? '' }}
									</li>
								</ul>
								<!--end personal-detail-->

								<!-- Social Accounts -->
								<ul class="list-inline social-icon mb-0">
									<li class="list-inline-item">
										<a href="{{ $infos['myFacebook'] ?? '' }}" target="_blank" class="bg-blue" title="My Facebook Account">
											<i class="uil uil-facebook-f"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="{{ $infos['myTwitter'] ?? '' }}" target="_blank" class="bg-secondary" title="My Twitter Account">
											<i class="uil uil-twitter"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="{{ $infos['myLinkedIn'] ?? '' }}" target="_blank" class="bg-info" title="My LinkedIn Account">
											<i class="uil uil-linkedin"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="{{ $infos['myInstagram'] ?? '' }}" target="_blank" class="bg-danger" title="My Instagram Account">
											<i class="uil uil-instagram"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="{{ $infos['myGithub'] ?? '' }}" target="_blank" class="bg-white text-dark" title="My Github Account">
											<i class="uil uil-github"></i>
										</a>
									</li>
								</ul>
								<!--/==/ End of Social Accounts -->
							</div>
							<!--end col-->
						</div>
						<!--end row-->
					</div>
					<!--end container-->
				</div>
				<!--end zoo-profile-->
			</section>
			<!--/==/ End of Profile Section-->

			<!-- About Section -->
			<section class="section-md">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h4 class="header-title mb-3">About us !</h4>
						</div>
						<!--end col-->

						<div class="col-sm-6 col-print-6">
							<h4 class="text-primary font-weight-bold">I'm {{ $infos['myName'] ?? '' }} {{ $infos['myLastName'] ?? '' }}</h4>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>

							<button type="button" class="btn btn-sm btn-soft-primary">Download CV</button>
						</div>
						<!--end col-->

						<div class="col-sm-5 col-print-5 offset-lg-1 align-self-center">
							<p>
								<span class="personal-detail-title">Name</span> 
								<span class="personal-detail-info">{{ $infos['myName'] ?? '' }} {{ $infos['myLastName'] ?? '' }}</span>
							</p>
							<p>
								<span class="personal-detail-title">Date of birth</span> 
								<span class="personal-detail-info">{{ $infos['myDob'] ?? '' }}</span>
							</p>
							<p>
								<span class="personal-detail-title">Spoken Langages</span> 
								<span class="personal-detail-info">{{ $infos['myLangs'] ?? '' }}</span>
							</p>

							<p>
								<span class="personal-detail-title">Nationality</span> 
								<span class="personal-detail-info">{{ $infos['myNationality'] ?? '' }}</span>
							</p>

							<p>
								<span class="personal-detail-title">Interest</span> 
								<span class="personal-detail-info">{{ $infos['myInterests'] ?? '' }}</span>
							</p>
						</div>
						<!--end col-->
					</div>
					<!--end row-->
				</div>
				<!--end container-->
			</section>
			<!--End of About Section-->

			<!-- Education & Skills Section -->
			<section class="section-md">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h4 class="header-title mb-3">Education & Skills</h4>
						</div>
						<!--end col-->

						<div class="col-sm-6 col-print-6">
							<div class="row">
								<div class="col-sm-6 col-print-6">
									<div class="resume-icon">
										<i class="uil uil-graduation-hat"></i>
										<h5 class="mt-n2">Education</h5>
									</div>
									<!--end resume-icon-->
									<div class="timeline">
										@foreach($education as $edu)
											<div class="time-item mt-3">
												<div class="item-info">
													<div class="font-14">{{ $edu->start_date }} - {{ $edu->end_date }}</div>
													<h5 class="my-1 text-dark">{{ $edu->name }}</h5>
													<p>{{ $edu->field }} at {{ $edu->place }}</p>
												</div>
											</div>
										@endforeach
										<!--end time-item-->
									</div>
									<!--end timeline-->
								</div>
								<!--end col-->

								<div class="col-sm-6 col-print-6">
									<div class="resume-icon">
										<i class="uil uil-suitcase-alt"></i>
										<h5 class="mt-n2">Experience</h5>
									</div>
									<!--end resume-icon-->
									<div class="timeline">
										@foreach($experience as $exp)
											<div class="time-item mt-3">
												<div class="item-info">
													<div class="font-14">{{ $exp->start_date }} - {{ $exp->end_date }}</div>
													<h5 class="my-1 text-dark">{{ $exp->name }}</h5>
													<p>{{ $exp->company }}</p>
												</div>
											</div>
										@endforeach
										<!--end time-item-->
									</div>
									<!--end timeline-->
								</div>
								<!--end col-->
							</div>
							<!--end row-->
						</div>
						<!--end col-->

						<div class="col-sm-6 col-print-6 align-self-center">
							<div class="skills mt-4">
								@foreach($skills as $skill)
									<div class="skill-box">
										<h4 class="skill-title">{{ $skill->name }}</h4>
										<div class="progress-line">
											<span data-percent="{{ $skill->percent }}" style="width: {{ $skill->percent }}%;">
												<span class="percent-tooltip">{{ $skill->percent }}%</span>
											</span>
										</div>
									</div>
								@endforeach
								<!--end skill-box-->
							</div>
							<!--end skill-->
						</div>
						<!--end col-->
					</div>
					<!--end row-->
				</div>
				<!--end container-->
			</section>
			<!--end section-->

			<!-- Completed Projects Section -->
			<section class="bg-funfact section-md">
				<div class="container">
					<div class="row justify-content-center" id="counter">
						<div class="col-sm-4 digit-counter">
							<div class="media">
								<i class="uil uil-cell text-warning mr-2 align-self-center"></i>
								<div class="media-body align-self-center">
									<h3 class="mb-1">
										<span class="counter-value" data-count="10">{{ $infos['myProjects'] ?? '' }}</span>+
									</h3>
									<h5 class="counter-name mt-0">Complated Projects</h5>
								</div>
							</div>
							<!--end media-->
						</div>
						<!--end col-->

						<div class="col-sm-4 digit-counter">
							<div class="media">
								<i class="uil uil-smile text-success mr-2 align-self-center"></i>
								<div class="media-body align-self-center">
									<h3 class="mb-1">
										<span class="counter-value" data-count="{{ $infos['happyClients'] ?? '' }}">{{ $infos['happyClients'] ?? '' }}</span>
									</h3>
									<h5 class="counter-name mt-0">Happy Clients</h5>
								</div>
							</div>
							<!--end media-->
						</div>
						<!--end col-->

						<div class="col-sm-4 digit-counter">
							<div class="media">
								<i class="uil uil-trophy text-pink mr-2 align-self-center"></i>
								<div class="media-body align-self-center">
									<h3 class="mb-1">
										<span class="counter-value" data-count="{{ $infos['myAwards'] ?? '' }}">{{ $infos['myAwards'] ?? '' }}</span>
									</h3>
									<h5 class="counter-name mt-0">Awards Received</h5>
								</div>
							</div>
							<!--end media-->
						</div>
						<!--end col-->
					</div>
					<!--end row-->
				</div>
				<!--end container-->
			</section>
			<!--/==/ End of Completed Projects Section -->

			<!-- My Works & Review Section -->
			<section class="section-md my-work">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h4 class="header-title mb-3">My Works & Review</h4>
						</div>
						<!--end col-->

						<div class="col-sm-6 col-print-6 align-self-center">
							<div class="p-4">
								<div class="text-center">
									<h2><i class="uil uil-feedback text-primary"></i></h2>
								</div>
								<!--end /div-->
								<div id="carouselExampleFade2" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										@foreach($clients as $client)
											<div class="carousel-item active">
												<div class="text-center">
													<p class="px-4">{{ $client->client_says }}</p>
													<div>
														<img src="{{ $client->photoPath }}" alt="" class="rounded-circle thumb-md mb-2">
														<p class="mb-0 text-primary">
															<b>{{ $client->client_name }}</b>
														</p>
														<small class="text-muted">{{ $client->position }}</small>
													</div>
												</div>
											</div>
										@endforeach
										<!--end carousel-item-->
									</div>
									<!--end carousel-inner-->
								</div>
								<!--end carousel-->
							</div>
							<!--end /div-->
						</div>
						<!--end col-->

						<div class="col-sm-6">
							<div class="row">
								<div class="col-12">
									<div class="row">
										<ul class="col container-filter categories-filter mb-4" id="filter">
											<li>
												<a class="categories active" data-filter="*">All</a>
											</li>
											<li>
												<a class="categories" data-filter=".design">UI/UX Design</a>
											</li>
											<li>
												<a class="categories" data-filter=".frontend">Frontend</a>
											</li>
											<li>
												<a class="categories" data-filter=".backend">Backend</a>
											</li>
										</ul>
										<!--end col-->
									</div>
									<!-- End portfolio  -->

									<div class="row container-grid nf-col-3 projects-wrapper">
										<div class="col-md-4 col-6 p-0 nf-item design">
											<div class="item-box">
												<a class="cbox-gallary1 mfp-image" href="{{ asset('front_assets/horizontal/images/portfolio/1.jpg') }}" title="Apple">
													<img class="item-container" src="{{ asset('front_assets/horizontal/images/portfolio/1.jpg') }}" alt="7">
													<div class="item-mask">
														<div class="item-caption">
															<h5 class="text-white">Apple</h5>
															<p class="text-white">UI/UX Design</p>
														</div>
													</div>
												</a>
											</div>
											<!--end item-box-->
										</div>
										<!--end col-->

										<div class="col-md-4 col-6 p-0 nf-item backend">
											<div class="item-box">
												<a class="cbox-gallary1 mfp-image" href="{{ asset('front_assets/horizontal/images/portfolio/2.jpg') }}" title="Samsung">
													<img class="item-container mfp-fade" src="{{ asset('front_assets/horizontal/images/portfolio/2.jpg') }}" alt="2">
													<div class="item-mask">
														<div class="item-caption">
															<h5 class="text-light">Samsung</h5>
															<p class="text-light">Android</p>
														</div>
													</div>
												</a>
											</div>
											<!--end item-box-->
										</div>
										<!--end col-->

										<div class="col-md-4 col-6 p-0 nf-item design frontend">
											<div class="item-box">
												<a class="cbox-gallary1 mfp-image" href="{{ asset('front_assets/horizontal/images/portfolio/3.jpg') }}" title="Facebook">
													<img class="item-container" src="{{ asset('front_assets/horizontal/images/portfolio/3.jpg') }}" alt="4">
													<div class="item-mask">
														<div class="item-caption">
															<h5 class="text-light">Facebook</h5>
															<p class="text-light">Frontend</p>
														</div>
													</div>
												</a>
											</div>
											<!--end item-box-->
										</div>
										<!--end col-->

										<div class="col-md-4 col-6 p-0 nf-item design frontend">
											<div class="item-box">
												<a class="cbox-gallary1 mfp-image" href="{{ asset('front_assets/horizontal/images/portfolio/5.jpg') }}" title="WhatsApp">
													<img class="item-container" src="{{ asset('front_assets/horizontal/images/portfolio/5.jpg') }}" alt="5">
													<div class="item-mask">
														<div class="item-caption">
															<h5 class="text-light">WhatsApp</h5>
															<p class="text-light">Graphic Design</p>
														</div>
													</div>
												</a>
											</div>
											<!--end item-box-->
										</div>
										<!--end col-->

										<div class="col-md-4 col-6 p-0 nf-item design">
											<div class="item-box">
												<a class="cbox-gallary1 mfp-image" href="{{ asset('front_assets/horizontal/images/portfolio/6.jpg') }}" title="Nokia">
													<img class="item-container" src="{{ asset('front_assets/horizontal/images/portfolio/6.jpg') }}" alt="6">
													<div class="item-mask">
														<div class="item-caption">
															<h5 class="text-light">Nokia</h5>
															<p class="text-light">Web Design</p>
														</div>
													</div>
												</a>
											</div>
											<!--end item-box-->
										</div>
										<!--end col-->

										<div class="col-md-4 col-6 p-0 nf-item backend frontend">
											<div class="item-box">
												<a class="cbox-gallary1 mfp-image" href="{{ asset('front_assets/horizontal/images/portfolio/4.jpg') }}" title="Oppo">
													<img class="item-container" src="{{ asset('front_assets/horizontal/images/portfolio/4.jpg') }}" alt="1">
													<div class="item-mask">
														<div class="item-caption">
															<h5 class="text-light">Oppo</h5>
															<p class="text-light">Backend</p>
														</div>
													</div>
												</a>
											</div>
											<!--end item-box-->
										</div>
										<!--end col-->
									</div>
									<!--end row-->
								</div>
								<!--end col-->
							</div>
							<!--end row-->
						</div>
						<!--end col-->
					</div>
					<!--end row-->
				</div>
				<!--end container-->
			</section>
			<!--/==/ End of My Works & Review Section -->

			<!-- My Clients Section -->
			<section class="section-md my-clients">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-md-2 col-6">
							<img src="{{ asset('front_assets/horizontal/images/brand/1.png') }}" alt="" class="img-fluid">
						</div>
						<!--end col-->
						<div class="col-md-2 col-6">
							<img src="{{ asset('front_assets/horizontal/images/brand/2.png') }}" alt="" class="img-fluid">
						</div>
						<!--end col-->
						<div class="col-md-2 col-6">
							<img src="{{ asset('front_assets/horizontal/images/brand/3.png') }}" alt="" class="img-fluid">
						</div>
						<!--end col-->
						<div class="col-md-2 col-6">
							<img src="{{ asset('front_assets/horizontal/images/brand/4.png') }}" alt="" class="img-fluid">
						</div>
						<!--end col-->
						<div class="col-md-2 col-6">
							<img src="{{ asset('front_assets/horizontal/images/brand/5.png') }}" alt="" class="img-fluid">
						</div>
						<!--end col-->
					</div>
					<!--end row-->
				</div>
				<!--end container-->
			</section>
			<!--/==/ End of My Clients Section -->

			<!-- Contact Me Section -->
			<section class="section-md contact-form">
				<div class="container">
					<div class="row">
						<div class="col-12 mb-3">
							<h4 class="header-title mb-3">Contact Me</h4>
						</div>
						<!--end col-->
						<div class="col-sm-4">
							<div class="contact-info">
								<div class="icon">
									<i class="uil uil-phone-volume"></i>
								</div>
								<div class="content">
									<h5>Free Call To Me:</h5>
									<span>{{ $infos['myPhone'] ?? '' }}</span>
								</div>
							</div>
							<!--end contact-info-->

							<div class="contact-info">
								<div class="icon">
									<i class="uil uil-envelope"></i>
								</div>
								<div class="content">
									<h5>Mail Me:</h5>
									<span>{{ $infos['myEmail'] ?? '' }}</span>
								</div>
							</div>
							<!--end contact-info-->

							<div class="contact-info">
								<div class="icon">
									<i class="uil uil-map-marker"></i>
								</div>
								<div class="content">
									<h5>Find Me:</h5>
									<span>{{ $infos['myAddress'] ?? '' }}</span>
								</div>
							</div>
							<!--end contact-info-->
						</div>
						<!--end col-->

						<div class="col-sm-8">
							<div class="contact-form">
								<div id="message"></div>

								<form method="post" action="{{ route('contact.me') }}" name="contact-form" id="contact-form">
									@csrf
									<div class="row">
										<div class="form-group col-md-6">
											<label>Name</label> 
											<input type="text" name="name" class="form-control" id="name">

											@error('name')
												<div class="text-danger small">{{ $message }}</div>
											@enderror
										</div>
										<!--end col-->

										<div class="form-group col-md-6">
											<label>Email address</label> 
											<input type="email" name="email" class="form-control" id="email">

											@error('email')
												<div class="text-danger small">{{ $message }}</div>
											@enderror
										</div>
										<!--end col-->

										<div class="form-group col-md-12">
											<label>Message</label> 
											<textarea rows="4" name="message" class="form-control" id="comments"></textarea>

											@error('message')
												<div class="text-danger small">{{ $message }}</div>
											@enderror
										</div>
										<!--end col-->

										<div class="form-group col-md-12">
											<input type="submit" value="Submit now" name="submit" id="submit" class="btn btn-primary px-5 py-2">
											<div id="simple-msg"></div>
										</div>
										<!--end col-->
									</div>
									<!--end row-->
								</form>
								<!--end form-->
							</div>
							<!--end contact-form-->
						</div>
						<!--end col-->
					</div>
					<!--end row-->
				</div>
				<!--end container-->
			</section>
			<!--/==/ End of Contact Me Section -->

			<!-- Thank You Section -->
			<section class="section-md thanks-text">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h3 class="text-center">Thank you !</h3>
						</div>
						<!--end col-->
					</div>
					<!--end row-->
				</div>
				<!--end container-->
			</section>
			<!--/==/ End of Thank You Section -->

			<!-- Footer -->
			<footer class="footer-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="copyright mb-0 py-4">© 2020. By {{ $infos['myName'] ?? '' }} {{ $infos['myLastName'] ?? '' }}</p>
						</div>
						<!--end col-->
					</div>
					<!--end row-->
				</div>
				<!--end container-->
			</footer>
			<!--/==/ End of Footer -->
		</div>
		<!--end main-wraper-->

		<!-- jQuery  -->
		<script src="{{ asset('front_assets/horizontal/js/jquery.min.js') }}"></script>
		<script src="{{ asset('front_assets/horizontal/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('front_assets/horizontal/plugins/ripple/jquery.ripples.js') }}"></script>
		<script src="{{ asset('front_assets/horizontal/plugins/counter/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('front_assets/horizontal/plugins/counter/waypoints.min.js') }}"></script>
		<script src="{{ asset('front_assets/horizontal/plugins/filter/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('front_assets/horizontal/plugins/filter/masonry.pkgd.min.js') }}"></script>
		<script src="{{ asset('front_assets/horizontal/plugins/filter/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('front_assets/horizontal/plugins/animated/headline.js') }}"></script>
		<!-- App js -->
		<script src="{{ asset('front_assets/horizontal/js/app.js') }}"></script>

		<script>
		    $(document).ready(function (){

		        $('#contact-form').on('submit', function (e){
		            e.preventDefault();

		            $.ajax({
		                type: "POST",
		                url: "/contact-me",
		                data: $('#contact-form').serialize(),
		                success: function (response){

		                    $('#message').hide()

		                    console.log(response)

		                    $('#name').val('')
		                    $('#email').val('')
		                    $('#subject').val('')
		                    $('#message').val('')

		                    alert("Your message successfully sent, please wait for our response.")
		                    // alert("Your message successfully sent, please wait for our response.")
		                },
		                error: function (error) {
		                    console.log(error)
		                    $('#message').show()
		                }
		            });
		        });
		    });
		</script>
	</body>
</html>
