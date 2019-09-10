<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel=icon href=img/favicon.png>
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top">
	<div class="container">
		<a href="index.php"><img src="img/logo.png"></a>
		<button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="index.php" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="#about" class="nav-link">About</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Services <i class="fas fa-angle-down fa-sm"></i></a>
					<div class="dropdown-menu text-center">
						<a class="dropdown-item nav-link" href="webdesign.php">Web Design</a>
						<a class="dropdown-item nav-link" href="#">Maintenance</a>
						<a class="dropdown-item nav-link" href="#">SEO</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Portfolio</a>
				</li>
				<li class="nav-item">
					<a href="#contact" class="nav-link">Contact</a>
				</li>
				<li class="nav-item">
					<a href="http://account.markmansour.co.uk" class="btn ml-md-1 mt-1">Log In</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
