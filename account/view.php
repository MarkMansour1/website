<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  if(isset($_GET['type'])){
    if($_GET['type'] == "project"){
      $title = "Project ".sprintf('%04u', $_GET['id']);
    }
    else if($_GET['type'] == "client"){
      $title = "Client ".sprintf('%04u', $_GET['id']);
    }
    else if($_GET['type'] == "contract"){
      $title = "Project ".sprintf('%04u', $_GET['id']);
    }
  }
  else {
    $title = "View";
  }
  echo '<title>Mark Mansour - '.$title.'</title>';
  include_once("extra/head.php");
  ?>
</head>

<body id="page-top">
<?php
session_start();
include_once("php/dbconnect.php");

if(isset($_SESSION['UserID'])){
  $userid = $_SESSION['UserID'];
}

if(isset($_GET['id'])){
  $id = $_GET['id'];
}
?>

<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <?php include_once("extra/sidebar.php"); ?>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Begin topbar -->
      <?php include_once("extra/topbar.php"); ?>
      <!-- end topbar -->

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <?php
        if($_GET['type'] == "project"){
          include_once("extra/viewproject.php");
        }
        else if($_GET['type'] == "client"){
          include_once("extra/viewclient.php");
        }
        else if($_GET['type'] == "contract"){
          include_once("extra/viewcontract.php");
        }
        ?>

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

<?php include_once("extra/scripts.php"); ?>


</body>
</html>
