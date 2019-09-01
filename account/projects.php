<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $title = "Projects";
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
          <h1 class="h4 mb-0 text-gray-800">Featured Projects</h1>
          <a href="new.php?type=project" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-tasks fa-sm text-white-50"></i> New Project </a>
        </div>

        <!-- Begin featured projects -->
        <div class="row">
          <?php
          $sql = "SELECT projects.*, clients.FirstName, clients.LastName, clients.Company FROM projects INNER JOIN clients ON projects.ClientID = clients.ClientID WHERE complete = 0 ORDER BY deadline LIMIT 3";
          $projects = mysqli_query($conn, $sql);
          while($project =  mysqli_fetch_array($projects)){
            $id = $project['ProjectID'];
            echo '
            <div class="col-xl-4 col-md-6">
              <div class="card shadow mb-4 border-left-primary">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h5 class="m-0 font-weight-bold text-primary">'.$project['Title'].' - '.sprintf('%04u', $id).'</h5>
                  <a href="view.php?type=project&id='.$id.'" class="nav-link p-0"><i class="fas fa-edit"></i> Edit</a>
                </div>
                <div class="card-body">
                  <strong>Description:</strong> '.$project['Description'].'
                  <strong>Notes:</strong> '.$project['Notes'].'
                  <strong>Client:</strong> '.$project['FirstName'].' '.$project['LastName'].'
                  <strong>Company:</strong> '.$project['Company'].'
                  <div class="text-center mt-3">
                    Deadline: '.date('d-m-Y', strtotime($project['Deadline'])).'
                  </div>
                </div>
              </div>
            </div>
            ';
          }
          ?>
        </div>
        <!-- End featured projects -->

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
                    <th>Start Date</th>
                    <th>Deadline</th>
                    <th>Client Name</th>
                    <th>Company</th>
                    <th>Status</th>
                    <th>Edit</th>
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
                      <td style="width: 40%">'.$project['Description'].'</td>
                      <td>'.date('d-m-Y', strtotime($project['StartDate'])).'</td>
                      <td>'.date('d-m-Y', strtotime($project['Deadline'])).'</td>
                      <td>'.$project['FirstName'].' '.$project['LastName'].'</td>
                      <td>'.$project['Company'].'</td>';
                      echo ($project['Complete'] == 1) ? '<td>Complete</td>' : '<td>Incomplete</td>';
                      echo '<td><a href="view.php?type=project&id='.$id.'" class="nav-link p-0"><i class="fas fa-edit"></i> Edit</a></td>
                    </tr>';
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- End Project Table -->

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

<?php include_once("extra/scripts.php"); ?>

</body>
</html>
