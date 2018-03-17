<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HTML Template</title>

	{{--  {{asset('main/css/bootstrap.min.css')}}  --}}
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('maintheme/css/bootstrap.min.css')}}" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{asset('maintheme/css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('maintheme/css/owl.theme.default.css')}}" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="{{asset('maintheme/css/magnific-popup.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('maintheme/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('maintheme/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image:url('{{asset('maintheme/img/tech_bg_image.jpg')}}');">			
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="#">
							<img class="logo" src="{{asset('maintheme/img/logo.png')}}" alt="logo">
							<img class="logo-alt" src="{{asset('maintheme/img/logo-alt.png')}}" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">Under Construction</h1>
							<p class="white-text">We are Very Sorry To inform You that Our Website Is Under Construction.
							</p>							
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="#"><img src="{{asset('maintheme/img/logo-alt.png')}}" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2017. All Rights Reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
						<p>Image By <a href="https://www.freepik.com/free-photos-vectors/background">Background vector created by Kjpargeter - Freepik.com</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="{{asset('maintheme/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('maintheme/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('maintheme/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('maintheme/js/jquery.magnific-popup.js')}}"></script>
	<script type="text/javascript" src="{{asset('maintheme/js/main.js')}}"></script>

</body>

</html>
