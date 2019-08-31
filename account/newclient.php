<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $title = "New Client";
  echo '<title>Mark Mansour - '.$title.'</title>';
  include_once("head.php");
  ?>
</head>

<body id="page-top">
<?php
session_start();
include_once("php/dbconnect.php");

if(isset($_SESSION['UserID'])){
  $userid = $_SESSION['UserID'];
  $week = $_SESSION['Week'];
}
?>

<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <?php include_once("sidebar.php"); ?>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Begin topbar -->
      <?php include_once("topbar.php"); ?>
      <!-- end topbar -->

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- begin form -->
        <div class="form">
          <div class="form-panel">
            <div class="form-header">
              <h1>Add Client</h1>
            </div>
            <div class="form-content">
              <form action="php/addclient.php" method="post">
                <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input type="text" id="firstname" name="firstname" required="required"/>
                </div>
                <div class="form-group">
                  <label for="lastname">Last Name</label>
                  <input type="text" id="lastname" name="lastname"/>
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" name="phone"/>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email"/>
                </div>
                <div class="form-group">
                  <label for="company">Company</label>
                  <input type="text" id="company" name="company"/>
                </div>
                <div class="form-group">
                  <button type="submit">Add Client</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end form -->

      </div>
      <!-- end page content -->

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

<?php include_once("scripts.php"); ?>


</body>
</html>
