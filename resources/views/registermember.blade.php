<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Membership Registration</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{url('plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- Icofont Css -->
  <link rel="stylesheet" href="{{url('plugins/icofont/icofont.min.css')}}">
  <!-- Themify Css -->
  <link rel="stylesheet" href="{{url('plugins/themify/css/themify-icons.css')}}">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{url('plugins/animate-css/animate.css')}}">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="{{url('plugins/magnific-popup/dist/magnific-popup.css')}}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{url('plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{url('plugins/slick-carousel/slick/slick-theme.css')}}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>
<body>
<!-- Header Close -->

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
            <li><a class="dropdown-item" href="{{('logout')}}">Logout</a></li>
        </ul>
            </li>
            </div>
            @endif
		</div>
	</div>
</nav>

<!-- Registration Page Section Start -->
<!--Registration Start -->
<footer class="footer bg-black-50">
	<div class="container">
		<div class="profile-content">
            <div class="request-form">
               <h4 class="text-light">Membership Registration Page</h4>
               <br>

               <!-- First Name, Middle name and Last Name Section starts.-->
               <form class = "needs-validation" novalidate>
                <div class = "form-row">
                  <div class = "col-md-4 mb-3">
                    <label class="text-light" for = "name01"> Full name </label>
                    <input type = "text" class = "form-control" id = "name01" placeholder = "Full Name"required>
                    <div class = "valid-tooltip">
                      Sounds great!
                    </div>
                  </div>
                  </div>
                </form>
                <!-- Section for First Name, Middle name and Last Name Section ends.-->

              <!-- Gender Selection Option Section starts.-->
              <form>
                <div>
                    <label class="text-light">
                        Gender:
                    </label>
                    <div class = "form-check form-check-inline">
                        <input class = "form-check-input" type = "radio" name = "Gender" id="Gender1" value="Male" checked>
                        <label class = "form-check-label text-light" for = "Gender1"> Male </label>
                      </div>

                      <div class = "form-check form-check-inline">
                        <input class = "form-check-input" type = "radio" name = "Gender" id = "Gender2" value="Female">
                        <label class = "form-check-label text-light" for = "Gender2"> Female </label>
                      </div>

                    </div>
                </div>
               </form>
               <!-- Gender Selection Option Section ends.-->

               <!-- Visitor Username, City, State, Zipcode, Phone number, Password and Re-type Password Section starts.-->
               <form class="needs-validation" novalidate>
                <div class = "form-row">
                  <div class ="col-md-6 mb-3">
                    <label class="text-light" for = "Address"> Address </label>
                    <input type = "text" class = "form-control" id = "Address" placeholder = "Address" required>
                    <div class = "invalid-feedback">
                      Please provide a valid Address.
                    </div>
                  </div>

                  <div class = "form-row">
                    <div class ="col-md-4 mb-3">
                      <label class="text-light" for = "City"> City </label>
                      <input type = "text" class = "form-control" id = "City" placeholder = "City" required>
                      <div class = "invalid-feedback">
                        Please provide a valid City.
                      </div>
                    </div>

                    <div class = "col-md-3 mb-3">
                      <label for = "state" class="text-light"> State </label>
                      <input type = "text" class = "form-control" id= "state" placeholder = "State" required>
                      <div class = "invalid-feedback">
                        Please provide a valid State.
                      </div>
                    </div>

                    <div class = "col-md-3 mb-3">
                      <label for = "zip" class="text-light"> Zipcode </label>
                      <input type = "text" class = "form-control" id = zip" placeholder = "Zipcode" required>
                      <div class = "invalid-feedback">
                        Please provide a valid Zipcode.
                      </div>
                    </div>

                  <div class = "form-row">
                      <div class ="col-md-3 mb-3">
                          <label for = "phonenum" class="text-light"> Phone No. </label>
                          <input type = "text" class = "form-control" id = "phonenum" placeholder = " Phone No." required>
                          <div class = "invalid-feedback">
                            Please provide a valid phone number.
                          </div>
                      </div>
               </form>
               <!-- Visitor Username, City, State, Zipcode, Phone number, Password and Re-type Password Section ends.-->

                <!-- Final Section for the registration page starts.-->
                <div class="form-group">
                  <div class="form-row">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label text-light" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <div>
                  <button class="btn btn-primary" type="submit">Submit form</button>
                  <button class="btn btn-primary" type="return">Return</button>
                </div>
                </div>
              </form>
              <!-- Final Section for the registration page ends.-->

              <script>
              // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function() {
                'use strict';
                window.addEventListener('load', function() {
                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.getElementsByClassName('needs-validation');
                  // Loop over them and prevent submission
                  var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                    }, false);
                  });
                }, false);
              })();
              </script>
            </div>
        </div>
<!-- Section Dashboard End -->

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

   <!--
    Essential Scripts
    =====================================-->


   <!-- Main jQuery -->
   <script src="{{url('plugins/jquery/jquery.js')}}"></script>
   <!-- Bootstrap 4.3.1 -->
   <script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
   <!-- Slick Slider -->
   <script src="{{url('plugins/slick-carousel/slick/slick.min.js')}}"></script>
   <!--  Magnific Popup-->
   <script src="{{url('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
   <!-- Form Validator -->
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
   <!-- Google Map -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
   <script src="{{url('plugins/google-map/gmap.js')}}"></script>

   <script src="{{url('js/script.js')}}"></script>

   </body>

   </html>
