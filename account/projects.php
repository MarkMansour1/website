<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $title = "Projects";
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

        <!-- Project Table -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Project List</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Client Name</th>
                    <th>Company</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT projects.*, clients.FirstName, clients.LastName, clients.Company FROM projects INNER JOIN clients ON projects.ClientID = clients.ClientID";
                  $projects = mysqli_query($conn, $sql);
                  while($project =  mysqli_fetch_array($projects)){
                    $id = $project['ProjectID'];
                    echo '
                    <tr>
                      <td>'.sprintf('%04u', $id).'</td>
                      <td>'.$project['Title'].'</td>
                      <td>'.$project['Description'].'</td>
                      <td>'.date('d-m-Y', strtotime($project['Date'])).'</td>
                      <td>'.$project['FirstName'].' '.$project['LastName'].'</td>
                      <td>'.$project['Company'].'</td>';
                      echo ($project['Complete'] == 1) ? '<td>Complete</td>' : '<td>Incomplete</td>';
                      echo '<td><a href="?edit='.$id.'">edit</a></td>
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
