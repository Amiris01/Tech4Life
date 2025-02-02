<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>SP4Life About Us</title>

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="{{ url('plugins/icofont/icofont.min.css') }}">
    <!-- Themify Css -->
    <link rel="stylesheet" href="{{ url('plugins/themify/css/themify-icons.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ url('plugins/animate-css/animate.css') }}">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="{{ url('plugins/magnific-popup/dist/magnific-popup.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ url('plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/slick-carousel/slick/slick-theme.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>

<body>

<!-- Section Menu Start -->
<!-- Header Start -->
<nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
	<div class="container-fluid">
		<a class="navbar-brand" href={{('welcome')}}>
			<h2 class="text-white text-capitalize"></i>SP4<span class="text-color">Life</span></h2>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid"
			aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-view-list"></span>
		</button>
		<div class="collapse text-center navbar-collapse" id="navbarsid">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{('/')}}">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item"><a class="nav-link" href="{{('aboutus')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{('sport')}}">Sports</a></li>
                <li class="nav-item"><a class="nav-link" href="{{('court')}}">Courts</a></li>
				<li class="nav-item"><a class="nav-link" href="{{('booking')}}">Booking</a></li>
				<li class="nav-item"><a class="nav-link" href="{{('contactus')}}">Contact</a></li>
			</ul>
            @if (!Auth::check())
			<div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
				<a class="navbar-brand" href="{{route('register')}}">
					<h3><span class="text-white text-capitalize">REGISTER</span></h3>
				</a>
				<a class="navbar-brand" href="{{route('login')}}">
					<h3><span class="text-color">Login</span></h3>
				</a>
			</div>
            @endif
            @if (Auth::check())
            <div class="btn-group-left">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><h3><span class="text-white text-capitalize">{{ Auth::user()->name }}</span></h3></a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{('dashboard')}}">Dashboard</a></li>
            <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
            <li><form method="POST" action="{{ route('logout') }}">
                @csrf
             <button type="submit" class="btn-primary" style="margin-left: 25px; background-color: #201c1c; border:none;">Logout</button>
            </form></li>
        </ul>
            </li>
            </div>
            @endif
		</div>
	</div>
</nav>


    <!-- Header Close -->

    <div class="main-wrapper ">
        <section class="page-title bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="{{('/')}}"
                                    class="text-sm letter-spacing text-white text-uppercase font-weight-bold">Home</a>
                            </li>
                            <li class="list-inline-item"><span class="text-white">|</span></li>
                            <li class="list-inline-item"><a href="#"
                                    class="text-color text-uppercase text-sm letter-spacing">About us</a></li>
                        </ul>
                        <h1 class="text-lg text-white mt-2">What we are</h1>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section About start -->
        <section class="section about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <img src="images/badminton.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-3 mt-lg-4 col-md-6">
                        <img src="images/squash.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-item position-relative mt-5 mt-lg-0">
                            <span class="h5 text-lg text-muted">Est:2022</span>
                            <h2 class="mt-1 mb-3">Having <span class="text-color">5 years</span> of experience in
                                services</h2>

                            <p class="mb-4">We offer the best application to our clients with our system that can
                                help users to make task easier. Our system
                                will provide the best booking experience for the users.
                            </p>

                            <a href="{{('booking')}}" class="btn btn-main">Booking<i
                                    class="ti-angle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section About End -->

        <!-- Why choose us Start -->
        <section class="section why">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-title">
                            <div class="divider mb-3"></div>
                            <h2>Why Choose us</h2>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-lg-4 col-md-6">
                        <div class="card p-4 text-center mb-4 border-0 bg-black-50 rounded-0 ">
                            <h3 class="mt-3 text-white">No more google forms</h3>
                            <p class="mt-3 mb-4 text-white">User can easily book a venue using our system.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card p-4 text-center border-0 mb-4 rounded-0">
                            <h3 class="mt-3">Manage booking</h3>
                            <p class="mt-3 mb-4">Booking for future time can be made and booking can be canceled
                                through system.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card p-4 text-center border-0 mb-4 rounded-0 bg-black-50">
                            <h3 class="mt-3 text-white">Permit System</h3>
                            <p class="mt-3 mb-4 text-white">Permit will be given after booking has been made and become
                                void after it has expired. Permit
                                need to be shown at the venue to authorize the facility.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why choose us End -->



        <!-- Section Gallery Start -->
        <section class="gallery">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-title">
                            <div class="divider mb-3"></div>
                            <h2>Our gallery</h2>
                            <p>We offer venue that is available for every students in UTM.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row no-gutters portfolio-gallery">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="images/gallery/gallery-01.jpg" class="popup-gallery">
                            <img src="images/gallery/gallery-01.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="images/gallery/gallery-02.jpg" class="popup-gallery">
                            <img src="images/gallery/gallery-02.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="images/gallery/gallery-03.jpg" class="popup-gallery">
                            <img src="images/gallery/gallery-03.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="images/gallery/gallery-04.jpg" class="popup-gallery">
                            <img src="images/gallery/gallery-04.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="images/gallery/gallery-05.jpg" class="popup-gallery">
                            <img src="images/gallery/gallery-05.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="images/gallery/gallery-06.jpg" class="popup-gallery">
                            <img src="images/gallery/gallery-06.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="images/gallery/gallery-07.jpg" class="popup-gallery">
                            <img src="images/gallery/gallery-07.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="images/gallery/gallery-08.jpg" class="popup-gallery">
                            <img src="images/gallery/gallery-08.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Gallery END -->


<!-- Section Footer Start -->
<!-- footer Start -->
<footer class="footer bg-black-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 mb-5 mb-lg-0">
				<h2 class="text-white mb-4">SP4LIFE</h2>
                <p>SP4Life is a state-of-the-art sport court booking system designed to make it easy for players to reserve courts in UTM. Whether you're looking to play basketball, tennis, or any other sport, SP4Life has you covered. With its user-friendly interface and intuitive navigation, you can easily find available courts in just a few clicks. Experience the convenience and ease of SP4Life, and book your court today!</p>
			</div>

			<div class="col-lg-5 col-md-5 mb-5 mb-lg-0">
				<div class="footer-widget">
					<h4 class="mb-4 text-white letter-spacing text-uppercase">Quick Links</h4>
					<ul class="list-unstyled footer-menu lh-40 mb-0">
						<li><a href="{{('aboutus')}}"><i class="ti-angle-double-right mr-2"></i>About Us</a></li>
						<li><a href="{{('sport')}}"><i class="ti-angle-double-right mr-2"></i>Sport</a></li>
						<li><a href="{{('booking')}}"><i class="ti-angle-double-right mr-2"></i>Booking</a></li>
						<li><a href="{{('contactus')}}"><i class="ti-angle-double-right mr-2"></i>Contact us</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row align-items-center mt-5 px-3 bg-black mx-1">
			<div class="col-lg-4">
				<p class="text-white mt-3">SP4Life © 2022</p>
			</div>
			<div class="col-lg-6 ml-auto text-right">
				<ul class="list-inline mb-0 footer-socials">
					<li class="list-inline-item"><a href="https://github.com/ShahRenin/Tech4Life"><i class="ti-github"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- Section Footer End -->
    </div>

    <!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="{{ url('plugins/jquery/jquery.js') }}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ url('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ url('plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!--  Magnific Popup-->
    <script src="{{ url('plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <!-- Form Validator -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="{{ url('plugins/google-map/gmap.js') }}"></script>

    <script src="{{ url('js/script.js') }}"></script>

</body>

</html>
