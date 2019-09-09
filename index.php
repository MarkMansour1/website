<!DOCTYPE html>
<?php
$title = "Mark Mansour";
include("head.php")
?>

<!-- begin home -->
<div id="home" class="home">
	<div class="caption">
		<h1>Website Title</h1>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
		<a href="#services" class="btn-outline-light">Get Started</a>
	</div>
</div>
<!-- end home -->

<!-- begin about -->
<div id="about" class="about alt">
	<div class="head">
		<h2>About Us</h2>
		<hr>
	</div>
	<div class="container body text-center">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<a href="#contact" class="btn-outline">get in touch</a>
	</div>
</div>
<!-- end about -->

<!-- begin services -->
<div id="services" class="services">
	<div class="head">
		<h2>Services</h2>
		<hr>
	</div>
	<div class="container body text-center">
		<div class="card-columns">
			<div class="card">
				<a href="webdesign.php">
					<h4>Web Design</h4>
					<img src="img/laptop.png">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</a>
				<a href="webdesign.php" class="link">Learn More <i class="fas fa-arrow-right fa-sm"></i></a>
			</div>
			<div class="card">
				<a href="#">
					<h4>Maintenance</h4>
					<img src="img/maintenance.png">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</a>
				<a href="#" class="link">Learn More <i class="fas fa-arrow-right fa-sm"></i></a>
			</div>
			<div class="card">
				<a href="#">
					<h4>SEO</h4>
					<img src="img/stats.png">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</a>
				<a href="#" class="link">Learn More <i class="fas fa-arrow-right fa-sm"></i></a>
			</div>
		</div>
	</div>
</div>
<!-- end services -->

<?php include("footer.php") ?>
