<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $title = "Clients";
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
  $week = $_SESSION['Week'];
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

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h4 mb-0 text-gray-800"></h1>
          <a href="new.php?type=client" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-users fa-sm text-white-50 mr-1"></i> New Client </a>
        </div>

        <!-- Client Table -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Client List</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM clients WHERE clientid > 1";
                  $clients = mysqli_query($conn, $sql);
                  while($client =  mysqli_fetch_array($clients)){
                    $id = $client['ClientID'];
                    echo '
                    <tr>
                      <td>'.sprintf('%04u', $id).'</td>
                      <td>'.$client['FirstName'].'</td>
                      <td>'.$client['LastName'].'</td>
                      <td>'.$client['Email'].'</td>
                      <td>'.$client['Phone'].'</td>
                      <td>'.$client['Company'].'</td>
                      <td><a href="view.php?type=client&id='.$id.'" class="nav-link p-0"><i class="fas fa-edit"></i> Edit</a></td>
                    </tr>
                    ';
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- End Client Table -->

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
