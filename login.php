<!DOCTYPE html>
<html lang="en">
<head>
	<title>Log In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel=icon href=img/favicon.png>
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
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
						<a href="index.php" class="nav-link">Go Back</a>
					</li>
					';
				}
				?>
			</ul>
		</div>

	</nav>

	<div class="landing">
		<div class="home-wrap">
			<div class="home-inner loginbg"></div>
		</div>
	</div>

	<div class="login text-center">
		<h1>Log In</h1>

		<?php
		if(isset($_GET['error'])){
      $error = $_GET['error'];
      if($error == "emptyfields"){
        echo '<p class="error">Please fill in all the required fields</p>';
      }
      else if($error == "usernotfound"){
        echo '<p class="error">User not found</p>';
      }
      else if($error == "incorrectpassword"){
        echo '<p class="error">Incorrect Password</p>';
      }
    }
		?>

		<form action="php/login.php" method="post">
			<!-- <label for="email">Email Address</label><br> -->
      <?php
      //Refills in the email field for the user if they make a mistake with their password
      if(isset($_GET['email'])){
        echo '<input type="email" name="email" placeholder="Email" value="'.$_GET['email'].'"><br>';
      }
      else {
        echo '<input type="email" name="email" placeholder="Email"><br>';
      }
      ?>
			<!-- <label for="password">Password</label><br> -->
      <input type="password" name="password" placeholder="Password"><br>
      <button type="submit" class="btn btn-outline-light btn-lg">LOG IN</button>
      <!-- <p>Don't have an account? <a href="signup.php">Sign Up</a></p> -->
			<p><a href="index.php">Go back home</a></p>
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
