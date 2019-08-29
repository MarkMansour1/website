<!DOCTYPE html>
<html lang="en">
<head>
  <title>Schedule</title>
  <?php include_once("head.php") ?>
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
  include_once("../account/sidebar.php")
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
          <h1 class="h3 mb-0 text-gray-800">Schedule</h1>
        </div>

        <?php
        if(isset($_GET['week'])){
          $week = $_GET['week'];
        }
        else if(isset($_SESSION['Week'])){
          $week = $_SESSION['Week'];
        }
        else {
          $week = 1;
        }

        $sql = "SELECT * FROM events WHERE userid = $userid";
        $result = mysqli_query($conn, $sql);

        $events = array();
        $num = 0;
        while($row = mysqli_fetch_array($result)){
          if($row['Week'] != $week && $row['Recurring'] == 0){
            continue;
          }
          else {
            $events[$num]['EventID'] = $row['EventID'];
            $events[$num]['Name'] = $row['Name'];
            $events[$num]['Colour'] = $row['Colour'];
            $events[$num]['Week'] = $row['Week'];
            $events[$num]['Day'] = $row['Day'];
            $events[$num]['Time'] = $row['Time'];
            $events[$num]['Recurring'] = $row['Recurring'];
            $num++;
          }
        }
        ?>

        <!-- Schedule Table -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tr>
                <th>
                  <a href="schedule.php?week=<?php echo ($week - 1); $_SESSION['Week'] = $week ?>"><i class="fas fa-chevron-circle-left"></i></a>
                  <a href="schedule.php?week=1"><strong>Week <?php echo $week ?></strong></a>
                  <a href="schedule.php?week=<?php echo ($week + 1); $_SESSION['Week'] = $week ?>"><i class="fas fa-chevron-circle-right"></i></a>
                </th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
              </tr>
              <?php
              $sql = "SELECT * FROM users WHERE userid = $userid";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_array($result);
              $times = explode("-", $row['Times']);
              for($time = 1; $time < (count($times) + 1); $time++){
                  echo '
                  <tr>
                    <th>'.number_format($times[$time - 1], 2, ":", ",").'</th>';
                    $timesItems = array();
                    for($item = 0; $item < count($events); $item++){
                      if($events[$item]['Time'] == $times[$time - 1]){
                        array_push($timesItems, $item);
                      }
                    }
                    for($day = 1; $day <= 7; $day++){
                      $found = false;
                      foreach($timesItems as $ti){
                        if ($events[$ti]['Day'] == $day) {
                          echo '<td style="background-color: '.$events[$ti]['Colour'].'">'.$events[$ti]['Name'].'<br><br><br><a href="editevent.php?week='.$week.'&id='.$events[$ti]['EventID'].'&name='.$events[$ti]['Name'].'&colour='.substr($events[$ti]['Colour'], 1).'&week='.$week.'&day='.$day.'&time='.$times[$time - 1].'&recurring='.$events[$ti]['Recurring'].'">edit</a></td>';
                          $found = true;
                          break;
                        }
                      }
                      if($found == false){
                        echo '<td><a style="font-size: 50px" href="addevent.php?week='.$week.'&day='.$day.'&time='.$times[$time - 1].'">+</a></td>';
                      }
                    }
                  echo '</tr>';
              }
              ?>
            </table>
          </div>
        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Task count card -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">events this week</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($events) ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>
      <!-- /.container-fluid -->

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
