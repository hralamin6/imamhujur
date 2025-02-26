<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="JobBoard - HTML Template" />
	<meta property="og:title" content="JobBoard - HTML Template" />
	<meta property="og:description" content="JobBoard - HTML Template" />
	<meta property="og:image" content="JobBoard - HTML Template" />
	<meta name="format-detection" content="telephone=no">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
	<link rel="icon" href="{{ asset('frontend') }}/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/images/favicon.png" />
	
	<title>JobBoard - HTML Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">

	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="{{ secure_asset('backend') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/style.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/skin/skin-1.css">
	<link rel="stylesheet" href="plugins/datepicker/css/bootstrap-datetimepicker.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/revolution/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/revolution/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/revolution/revolution/css/navigation.css">

    @stack('css')
    @livewireStyles
<!-- JAVASCRIPT FILES ========================================= -->

<script src="{{ asset('frontend') }}/js/jquery.min.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/wow/wow.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/bootstrap/js/popper.min.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/bootstrap/js/bootstrap.min.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/bootstrap-select/bootstrap-select.min.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/magnific-popup/magnific-popup.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/counter/waypoints-min.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/counter/counterup.min.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/imagesloaded/imagesloaded.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/masonry/masonry-3.1.4.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/masonry/masonry.filter.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/owl-carousel/owl.carousel.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/rangeslider/rangeslider.js"  defer></script>
<script src="{{ asset('frontend') }}/js/custom.js" defer></script>
<script src="{{ asset('frontend') }}/js/dz.carousel.js" defer></script>
<script src='{{ asset('frontend') }}/js/recaptcha/api.js' defer></script>
<script src="{{ asset('frontend') }}/js/dz.ajax.js" defer></script>
<script src="{{ asset('frontend') }}/plugins/paroller/skrollr.min.js" defer></script>
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script src="{{ mix('js/app.js') }}"></script>

</head>
<body id="bg">
{{-- <div id="loading-area"></div> --}}
<div class="page-wraper">
	<!-- header -->
    <header class="site-header mo-left header fullwidth">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="{{ route('home') }}"><img src="{{ asset('frontend') }}/images/logo.png" class="logo" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
						@auth
						<div class="extra-cell">
							<a href="{{ route('imam.details') }}" class="site-button"><i class="fa fa-user"></i> Edit Biodata</a>
						</div>
						@else
						<div class="extra-cell">
							<a href="{{ url('/register') }}" class="site-button"><i class="fa fa-user"></i> Sign Up</a>
							<a href="{{ url('/login') }}" class="site-button"><i class="fa fa-lock"></i> login</a>
						</div>

						@endauth
                    </div>
                    <!-- Quik search -->
                    <div class="dez-quik-search bg-primary">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="flaticon-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
							<li class="active">
								<a href="javascript:void(0)">Home <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="index-2.html" class="dez-page">Home 1</a></li>
									<li><a href="index-3.html" class="dez-page">Home 2</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)">For Candidates <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="browse-job.html" class="dez-page">Browse Job</a></li>
									<li><a href="companies.html" class="dez-page">companies</a></li>
									<li><a href="job-detail.html" class="dez-page">Job Detail</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)">For Employers <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="browse-candidates.html" class="dez-page">Browse Candidates</a></li>
									<li><a href="submit-resume.html" class="dez-page">Submit Resume</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)">Pages <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="about-us.html" class="dez-page">About Us</a></li>
									<li><a href="coming-soon.html" class="dez-page">Coming Soon</a></li>
									<li><a href="error-404.html" class="dez-page">Error 404</a></li>
									<li><a href="#" class="dez-page">Portfolio</a>
										<ul class="sub-menu">
											<li><a href="portfolio-grid-2.html" class="dez-page">Portfolio Grid 2 </a></li>
											<li><a href="portfolio-grid-3.html" class="dez-page">Portfolio Grid 3 </a></li>
											<li><a href="portfolio-grid-4.html" class="dez-page">Portfolio Grid 4 </a></li>
										</ul>
									</li>
									<li><a href="login.html" class="dez-page">Login</a></li>
									<li><a href="register.html" class="dez-page">Register</a></li>
									<li><a href="contact.html" class="dez-page">Contact Us</a></li>
								</ul>
							</li>
								@auth
								<li class="{{Request::routeIs('imam.details')?'active':''}}"><a href="{{ route('imam.details') }}">Edit Biodata</a></li>
								@else
								<li><a href="{{ url('/login') }}">login</a></li>
								<li><a href="{{ url('/register') }}">Sign Up</a></li>
								@endauth
		
							</ul>			
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    {{ $slot }}
    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
					<div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
                            <img src="{{ asset('frontend') }}/images/logo-white.png" width="180" class="m-b15" alt=""/>
							<p class="text-capitalize m-b20">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the..</p>
                            <div class="subscribe-form m-b20">
								<form class="dzSubscribe" action="http://job-board.w3itexperts.com/xhtml/script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="dzEmail" required="required"  class="form-control" placeholder="Your Email Id" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button radius-xl">Subscribe</button>
										</span> 
									</div>
								</form>
							</div>
							<ul class="list-inline m-a0">
								<li><a href="#" class="site-button white facebook circle "><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="site-button white google-plus circle "><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="site-button white linkedin circle "><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="site-button white instagram circle "><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="site-button white twitter circle "><i class="fa fa-twitter"></i></a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-xl-5 col-lg-5 col-md-8 col-sm-8 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Frequently Asked Questions</h5>
                            <ul class="list-2 list-line">
                                <li><a href="#">Privacy & Seurty</a></li>
                                <li><a href="#">Terms of Serice</a></li>
                                <li><a href="#">Communications</a></li>
                                <li><a href="#">Referral Terms</a></li>
                                <li><a href="#">Lending Licnses</a></li>
								<li><a href="#">Support</a></li>
                                <li><a href="#">How It Works</a></li>
                                <li><a href="#">For Employers</a></li>
                                <li><a href="#">Underwriting</a></li>
                                <li><a href="#">Contact Us</a></li>
								<li><a href="#">Lending Licnses</a></li>
								<li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Find Jobs</h5>
                            <ul class="list-2 w10 list-line">
                                <li><a href="#">US Jobs</a></li>
                                <li><a href="#">Canada Jobs</a></li>
                                <li><a href="#">UK Jobs</a></li>
                                <li><a href="#">Emplois en Fnce</a></li>
                                <li><a href="#">Jobs in Deuts</a></li>
								<li><a href="#">Vacatures China</a></li>
                            </ul>
                        </div>
                    </div>
				</div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
               <div class="row">
                    <div class="col-lg-12 text-center"><span><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>

@stack('js')
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<x-livewire-alert::scripts />
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>

</body>

</html>