<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mark Mansour</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fixed.css">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">
<?php
session_start();
include_once("php/dbconnect.php");
?>

<div id="home">

	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

		<a href="index.php" class="navbar-brand"><img src="img/logo.png"></a>

		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="#home" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="#course" class="nav-link">Course</a>
				</li>
				<li class="nav-item">
					<a href="#features" class="nav-link">Features</a>
				</li>
				<li class="nav-item">
					<a href="#resources" class="nav-link">Resources</a>
				</li>
				<li class="nav-item">
					<a href="#clients" class="nav-link">Clients</a>
				</li>
				<li class="nav-item">
					<a href="#contact" class="nav-link">Contact</a>
				</li>
				<?php
				if(isset($_SESSION['UserID'])){
					echo '
					<li class="nav-item">
						<a href="schedule.php" class="nav-link">My Account</a>
					</li>
					<li class="nav-item">
						<a href="php/logout.php" class="nav-link">Log Out</a>
					</li>
					';
				}
				else {
					echo '
					<li class="nav-item">
						<a href="login.php" class="nav-link">Log In</a>
					</li>
					';
				}
				?>
			</ul>
		</div>
	</nav>

	<div class="landing">
		<div class="home-wrap">
			<div class="home-inner"></div>
		</div>
	</div>

	<div class="caption text-center">
		<?php
		if(isset($_SESSION['UserID'])){
			echo '
			<h1>Welcome back, '.$_SESSION['FirstName'].'</h1>
			<h3>Good to see you again</h3>
			<a href="#course" class="btn btn-outline-light btn-lg">Get Started</a>
			';
		}
		else {
			echo '
			<h1>Welcome</h1>
			<h3>Custom web development</h3>
			<a href="#course" class="btn btn-outline-light btn-lg">Get Started</a>
			';
		}
		?>
	</div>

</div>
<!-- end home -->

<div id="course" class="offset">
	<div class="col-12 narrow text-center">
		<h1>Nuno theme advanced bootstrap course</h1>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<a href="#" class="btn btn-secondary btn-md">Button Text</a>
	</div>
</div>
<!-- end course -->

<div id="features" class="offset">
	<div class="jumbotron">
		<div class="narrow text-center">

			<div class="col-12">
				<h3 class="heading">Features</h3>
				<div class="heading-underline"></div>
			</div>

			<div class="row text-center">

				<div class="col-md-4">
					<div class="feature">
						<i class="fas fa-play-circle fa-4x" data-fa-transform="shrink-3 up-5"></i>
						<h3>Custom Animation</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="feature">
						<i class="fas fa-sliders-h fa-4x" data-fa-transform="shrink-4.5 up-4.5"></i>
						<h3>Content Slider</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="col-md-4">
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
<!-- end features -->

<div id="resources" class="offset">
	<div class="fixed-background">

		<div class="row dark text-center">

			<div class="col-12">
				<h3 class="heading">Built with care</h3>
				<div class="heading-underline"></div>
			</div>

			<div class="col-md-4">
				<h3>HTML 5</h3>
				<div class="feature">
					<i class="fas fa-code fa-3x"></i>
				</div>
				<p class="lead">Built with the latest, HTML 5</p>
			</div>

			<div class="col-md-4">
				<h3>BOOTSTRAP 4</h3>
				<div class="feature">
					<i class="fas fa-bold fa-3x"></i>
				</div>
				<p class="lead">Built with the latest, BOOTSTRAP 4</p>
			</div>

			<div class="col-md-4">
				<h3>CSS 3</h3>
				<div class="feature">
					<i class="fab fa-css3 fa-3x"></i>
				</div>
				<p class="lead">Built with the latest, CSS 3</p>
			</div>

		</div>

		<div class="fixed-wrap">
			<div class="fixed"></div>
		</div>

	</div>
</div>
<!-- end resources -->

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

	<div class="col-12 narrow text-center">
		<p class="lead">Want to learn more?</p>
		<a href="#" class="btn btn-secondary btn-md">Button Text</a>
	</div>

</div>
<!-- end clients -->

<div id="contact" class="offset">
	<footer>
		<?php include("footer.php");?>
	</footer>
</div>
<!-- end contact -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>

</body>
</html>
