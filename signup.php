<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel=icon href=img/favicon.png>
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
header("location: index.php");

session_start();
include_once("php/dbconnect.php");
?>

<div id="home">

	<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
		<a href="index.php" class="navbar-brand"><img src="img/logo.png"></a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<?php
				if(isset($_SESSION['UserID'])){
					header("location: index.php");
					exit();
				}
				else {
					echo '
					<li class="nav-item">
						<a href="login.php" class="nav-link">Go Back</a>
					</li>
					';
				}
				?>
			</ul>
		</div>
	</nav>

	<div class="landing">
		<div class="home-wrap">
			<div class="home-inner signupbg"></div>
		</div>
	</div>

	<div class="login signup text-center">
		<h1>Sign Up</h1>

		<?php
		if(isset($_GET['success'])){
      echo '<p class="error" style="color: green">Signup Successful</p>';
    }
    if(isset($_GET['error'])){
      $error = $_GET['error'];
      if($error == "emptyfields"){
        echo '<p class="error">Please fill in all the required fields</p>';
      }
      else if($error == "passwordmatch"){
        echo '<p class="error">Passwords do not match</p>';
      }
      else if($error == "emailtaken"){
        echo '<p class="error">Email already in use</p>';
      }
      else if($error == "sqlerror"){
        echo '<p class="error">SQL Error</p>';
      }
    }
		?>

		<form action="php/signup.php" method="post">
      <input type="text" name="firstname" placeholder="First Name"><br>
      <input type="text" name="lastname" placeholder="Last Name"><br>
      <?php
      //Refills the email in for the user if they make a mistake with their password
      if(isset($_GET['email'])){
        echo '<input type="email" name="email" placeholder="Email" value="'.$_GET['email'].'"><br>';
      }
      else {
        echo '<input type="email" name="email" placeholder="Email"><br>';
      }
      ?>
      <input type="password" name="password" placeholder="Password"><br>
      <input type="password" name="passwordrepeat" placeholder="Repeat Password"><br>
      <button type="submit" class="btn btn-outline-light btn-lg">Sign Up</button>
      <p>Already have an account? <a href="login.php">Log In</a></p>
    </form>

	</div>

	<div class="">

	</div>

</div>
<!-- end home -->

<!-- Begin footer -->
<footer>
	<?php include("extra/footer.php");?>
</footer>
<!-- end footer -->

<!-- Back to top button -->
<!-- <a href="#home" class="top"><i class="fas fa-2x fa-chevron-circle-up"></i></i></a> -->

<?php include_once("extra/scripts.php") ?>

</body>
</html>
