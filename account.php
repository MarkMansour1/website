<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>My Account</title>
  <link rel=icon href=img/favicon.png>
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
<?php
session_start();
include_once("php/dbconnect.php");

if(isset($_SESSION['UserID'])){
  $userid = $_SESSION['UserID'];
  $week = $_SESSION['Week'];
}
else {
  header("location: login.php");
  exit();
}
?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
    include_once("sidebar.php")
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <br>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Account</h1>
          </div>

        </div>

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

  <!-- js -->
  <script src="js/jquery/jquery.min.js"></script>
  <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>

  <!-- Fontawesome -->
  <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>

</body>

</html>
