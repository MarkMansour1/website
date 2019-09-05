<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mark Mansour</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel=icon href=img/favicon.png>
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

	<?php
	session_start();
	?>

	<div class="bground"></div>

	<nav class="navbar navbar-dark navbar-expand-lg fixed-top">
		<a href="#home" class="navbar-brand">
			<img src="img/logo_light_grey.png">
		</a>
		<button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="#home" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="#about" class="nav-link">About</a>
				</li>
				<li class="nav-item">
					<a href="#services" class="nav-link">Services</a>
				</li>
				<li class="nav-item">
					<a href="#contact" class="nav-link">Contact</a>
				</li>
				<li class="nav-item">
					<a href="http://account.markmansour.co.uk" class="loginbtn">Log In</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- begin home -->
	<div id="home">

		<div class="landing">
			<div class="caption">
				<h1>Mark Mansour</h1>
				<h3>Web Developer</h3>
				<a href="#about" class="btn btn-outline-light btn-lg">Learn More</a>
			</div>
		</div>

	</div>
	<!-- end home -->

	<!-- begin small -->
	<div class="offset">
		<div class="col-12 narrow text-center">
			<h1>Lorem ipsum dolor sit amet</h1>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<a href="#contact" class="btn btn-secondary btn-md">Get in touch</a>
		</div>
	</div>
	<!-- end small -->

	<!-- begin about -->
	<div id="about" class="offset">
		<div class="jumbotron about">
			<div class="narrow">

				<div class="col-12 text-center">
					<h3 class="heading">About Me</h3>
					<div class="heading-underline"></div>
				</div>

				<div class="row aboutinfo">

					<div class="col-md-12 col-lg-6">
						<img src="img/skills.png">
					</div>

					<div class="col-md-12 col-lg-6">

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

					</div>

				</div>

			</div>
		</div>
	</div>
	<!-- end about -->

	<!-- begin services -->
	<div id="services" class="offset">
		<div class="jumbotron bg-white">
			<div class="narrow text-center">
				<div class="col-12">
					<h3 class="heading">Services</h3>
					<div class="heading-underline"></div>
				</div>
				<div class="row text-center">
					<div class="col-md-6 col-lg-4">
						<div class="feature">
							<i class="fas fa-play-circle fa-4x" data-fa-transform="shrink-3 up-5"></i>
							<h3>Custom Animation</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="feature">
							<i class="fas fa-sliders-h fa-4x" data-fa-transform="shrink-4.5 up-4.5"></i>
							<h3>Content Slider</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="feature">
							<i class="fab fa-wpforms fa-4x" data-fa-transform="shrink-4 up-5"></i>
							<h3>Contact Form</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="feature">
							<i class="fab fa-wpforms fa-4x" data-fa-transform="shrink-4 up-5"></i>
							<h3>Contact Form</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="feature">
							<i class="fas fa-play-circle fa-4x" data-fa-transform="shrink-3 up-5"></i>
							<h3>Custom Animation</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="feature">
							<i class="fas fa-sliders-h fa-4x" data-fa-transform="shrink-4.5 up-4.5"></i>
							<h3>Content Slider</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end services -->

	<!-- begin contact -->
	<div id="contact" class="offset">
		<div class="contactform">
			<div class="container">
				<div class="text-center">
					<h1 class="h2">Get In Touch</h1>
					<hr>
				</div>
				<form action="php/sendmail.php" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="formgroup">
								<label><i class="fas fa-fw fa-user mr-2"></i>Your Name</label>
								<input type="text" class="form-control" name="name" required="required">
							</div>
						</div>
						<div class="col-md-6">
							<div class="formgroup">
								<label><i class="fas fa-fw fa-envelope mr-2"></i>Email</label>
								<input type="email" class="form-control" name="email" required="required">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="formgroup">
								<label><i class="fas fa-fw fa-inbox mr-2"></i>Message/Details</label>
								<textarea class="form-control" name="text" rows="8" cols="80" required="required"></textarea>
							</div>
						</div>
					</div>
					<div class="text-center">
						<input class="btn btn-outline-light btn-lg" type="submit" value="Send">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end contact -->

	<!-- Footer -->
	<footer>
		<div class="container text-center text-md-left">
			<div class="row">

				<div class="col-md-3">
					<h6>Mark Mansour</h6>
					<hr>
					<p class="footer-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>

				<div class="col-md-3">
					<h6>Services</h6>
					<hr>
					<p><a href="#">Web Development</a></p>
					<p><a href="#">About</a></p>
					<p><a href="#">Services</a></p>
					<p><a href="#">Contact</a></p>
				</div>
				<div class="col-md-3">
					<h6>Pages</h6>
					<hr>
					<p><i class="fas fa-fw fa-home mr-2"></i><a href="#home">Home</a></p>
					<p><i class="fas fa-fw fa-user mr-2"></i><a href="#about">About</a></p>
					<p><i class="fas fa-fw fa-envelope mr-2"></i><a href="#services">Services</a></p>
					<p><i class="far fa-fw fa-address-book mr-2"></i><a href="#contact">Contact</a></p>
				</div>
				<div class="col-md-3">
					<h6>Contact</h6>
					<hr>
					<p><i class="fas fa-fw fa-envelope mr-2"></i>contact@markmansour.co.uk</p>
					<p><i class="fas fa-fw fa-phone mr-2"></i>+44 77699 73211</p>
					<p><i class="fab fa-fw fa-twitter mr-2"></i><a href="https://www.twitter.com/_markmansour" target="_blank">Twitter</a></p>
					<p><i class="fab fa-fw fa-instagram mr-2"></i><a href="https://www.instagram.com/mark__mansour" target="_blank">Instagram</a></p>
				</div>

			</div>
		</div>
		<hr class="socket">
		<div class="text-center copyright">
			<p>&copy; Copyright Mark Mansour <?php echo date('Y') ?></p>
		</div>
		<div class="bar1"></div>
		<div class="bar2"></div>
		<div class="bar3"></div>
	</footer>
	<!-- Footer -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#home">
	  <i class="fas fa-angle-up"></i>
	</a>

	<script src="js/jquery/jquery.min.js"></script>
	<script src="js/jquery-easing/jquery.easing.min.js"></script>
	<script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
	<script src="js/script.js"></script>

	</body>
</html>
