<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mark Mansour</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel=icon href=img/favicon.png>
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

<?php
session_start();
?>

<!-- begin home -->
<div id="home">

	<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">

		<a href="#home" class="navbar-brand"><img src="img/logo.png"></a>

		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
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
					<a href="#clients" class="nav-link">Clients</a>
				</li>
				<li class="nav-item">
					<a href="#contact" class="nav-link">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="landing">
		<div class="home-wrap">
			<div class="home-inner"></div>
		</div>
	</div>

	<div class="caption">
		<h1>Mark Mansour</h1>
		<h3>Web Developer</h3>
		<a href="#about" class="btn btn-outline-light btn-lg">Learn More</a>
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

			</div>

		</div>
	</div>
</div>
<!-- end services -->

<!-- begin clients -->
<div id="clients" class="offset">
	<div class="jumbotron">

		<div class="col-12 text-center">
			<h3 class="heading">Clients</h3>
			<div class="heading-underline"></div>
		</div>

		<div class="row">

			<div class="col-md-6 clients">
				<div class="row">
					<div class="col-md-4">
						<img src="img/client1.png">
					</div>
					<div class="col-md-8">
						<blockquote>
							<i class="fas fa-quote-left" data-fa-transform="down-5"></i>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							<hr class="clients-hr">
							<cite>&#8212; Eric, Small business owner</cite>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="col-md-6 clients">
				<div class="row">
					<div class="col-md-4">
						<img src="img/client2.png">
					</div>
					<div class="col-md-8">
						<blockquote>
							<i class="fas fa-quote-left" data-fa-transform="down-5"></i>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							<hr class="clients-hr">
							<cite>&#8212; Rachel, Professional photographer</cite>
						</blockquote>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

<!-- end clients -->

<!-- begin contact -->
<div id="contact" class="offset">

	<div class="contactform">

		<div class="col-12 text-center">
			<h3 class="heading">Get In Touch</h3>
			<div class="heading-underline"></div>
		</div>

		<form action="php/sendmail.php" method="post">

			<div class="row">

				<div class="col-md-6">
					<div class="formgroup">
						<label>Your Name *</label>
						<input type="text" class="form-control" name="name">
					</div>
				</div>

				<div class="col-md-6">
					<div class="formgroup">
						<label>Email *</label>
						<input type="text" class="form-control" name="email">
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="formgroup">
						<label>Message/Details *</label>
						<textarea class="form-control" name="text" rows="8" cols="80"></textarea>
					</div>
				</div>
			</div>

			<div class="text-center">
				<input class="btn btn-outline-light btn-lg" type="submit" value="Send">
			</div>

		</form>
	</div>

</div>
<!-- end contact -->

<!-- Begin footer -->
<footer>
	<div class="row justify-content-center">

	  <div class="col-md-5 footertext">
	    <a href="#home"><img src="img/logo_light.png"></a>
	    <p>Web Developer</p>
	  </div>

	  <div class="col-md-4 text-right footertext">
	    <br>
	    <strong>Contact Info</strong>
	    <p>+44 77699 73211<br>contact@markmansour.co.uk</p>
	    <a href="https://www.twitter.com/_markmansour" target="_blank"><i class="fab fa-twitter-square"></i></a>
	    <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
	    <a href="https://www.instagram.com/mark__mansour" target="_blank"><i class="fab fa-instagram"></i></a>
	  </div>

	  <hr class="socket">
	  <p>&copy; Copyright Mark Mansour <?php echo date('Y') ?></p>

	</div>
</footer>
<!-- end footer -->

<!-- Back to top button -->
<!-- <a href="#home" class="top"><i class="fas fa-2x fa-chevron-circle-up"></i></i></a> -->

<script src="js/jquery/jquery.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>

</body>
</html>
