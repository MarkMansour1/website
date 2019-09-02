<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $title = "Login";
  echo '<title>Mark Mansour - '.$title.'</title>';
  include_once("extra/head.php");
  ?>
</head>

<body id="page-top">
<?php
session_start();
include_once("php/dbconnect.php");

if(isset($_SESSION['UserID'])){
  header("location: index.php");
}
?>

<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <div class="container-fluid">
          <img src="../img/logo.png" style="height: 3rem"></img>
        </div>
      </nav>

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <div class="container login">
          <div class="form">
            <div class="form-toggle"></div>
            <div class="form-panel one">
              <div class="form-header">
                <h1>Log In</h1>
              </div>
              <div class="form-content">
                <form action="php/login.php" method="post">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <?php
                    //Refills in the email field for the user if they make a mistake with their password
                    if(isset($_GET['email'])) echo '<input type="email" id="email" name="email" required="required" value="'.$_GET['email'].'"/>';
                    else echo '<input type="email" id="email" name="email" required="required"/>';
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password"/>
                  </div>
                  <div class="form-group">
                    <label class="form-remember">
                      <input type="checkbox"/>Remember Me
                    </label><a class="form-recovery" href="#">Forgot Password?</a>
                  </div>
                  <div class="form-group">
                    <button type="submit">Log In</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="form-panel two">
              <div class="form-header">
                <h1>Sign Up</h1>
              </div>
              <div class="form-content">
                <form action="php/signup.php" method="post">
                  <input type="hidden" name="project" value="true"/>
                  <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname"/>
                  </div>
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname"/>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required="required"/>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required="required"/>
                  </div>
                  <div class="form-group">
                    <label for="passwordrepeat">Repeat Password</label>
                    <input type="password" id="passwordrepeat" name="passwordrepeat" required="required"/>
                  </div>
                  <div class="form-group">
                    <button type="submit">Sign Up</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- End page content -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>&copy; Copyright Mark Mansour <?php echo date('Y') ?></span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php include_once("extra/scripts.php"); ?>

</body>
</html>
