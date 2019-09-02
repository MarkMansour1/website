<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <div class="my-4 d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 mx-3 text-gray-800"><?php echo $title; ?></h1>
  </div>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

    <!-- Nav Item - Alerts -->
    <?php
    $sql = "SELECT * FROM projects WHERE complete = 0";
    $projects = mysqli_query($conn, $sql);
    ?>
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-tasks fa-fw"></i>
        <!-- Counter - Alerts -->
        <?php
        $num = mysqli_num_rows($projects);
        if($num > 0){
          echo '<span class="badge badge-danger badge-counter">'.$num.'</span>';
        }
        ?>
      </a>
      <!-- Dropdown - Projects -->
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">
          Incomplete Projects
        </h6>
        <?php
        while($project = mysqli_fetch_array($projects)){
          echo '
          <a class="dropdown-item d-flex align-items-center" href="view.php?type=project&id='.$project['ProjectID'].'">
            <div class="mr-3">
              <div class="icon-circle bg-primary">
                <i class="fas fa-file-alt text-white"></i>
              </div>
            </div>
            <div>
              <div class="small text-gray-500">Due '.date('d/m/Y', strToTime($project['Deadline'])).'</div>
              <span>'.$project['Title'].'</span>
            </div>
          </a>
          ';
        }
        ?>
        <a class="dropdown-item text-center small text-gray-500" href="projects.php">Show All Projects</a>
      </div>
    </li>

    <!-- Nav Item - Alerts -->
    <?php
    $tomorrow = date("Y-m-d", strtotime("+1 day"));
    $twodays = date("Y-m-d", strtotime("+2 day"));
    $nextweek = date('Y-m-d', strtotime("+7 day"));
    $sql = "SELECT * FROM projects WHERE complete = 0 AND deadline < '$tomorrow'";
    $dayprojects = mysqli_query($conn, $sql);
    $sql = "SELECT * FROM projects WHERE complete = 0 AND deadline BETWEEN '$tomorrow' AND '$nextweek'";
    $weekprojects = mysqli_query($conn, $sql);
    ?>
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <!-- Counter - Alerts -->
        <?php
        $num = mysqli_num_rows($dayprojects) + mysqli_num_rows($weekprojects);
        if($num > 0){
          echo '<span class="badge badge-danger badge-counter">'.$num.'</span>';
        }
        ?>
      </a>
      <!-- Dropdown - Alerts -->
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">
          Alerts
        </h6>
        <?php
        while($project = mysqli_fetch_array($dayprojects)){
          echo '
          <a class="dropdown-item d-flex align-items-center" href="view.php?type=project&id='.$project['ProjectID'].'">
            <div class="mr-3">
              <div class="icon-circle bg-danger">
                <i class="fas fa-exclamation-triangle text-white"></i>
              </div>
            </div>
            <div>
              <div class="small text-gray-500">Due '.date('d/m/Y', strToTime($project['Deadline'])).'</div>
              <span>'.$project['Title'].'</span>
            </div>
          </a>
          ';
        }
        while($project = mysqli_fetch_array($weekprojects)){
          echo '
          <a class="dropdown-item d-flex align-items-center" href="view.php?type=project&id='.$project['ProjectID'].'">
            <div class="mr-3">
              <div class="icon-circle bg-warning">
                <i class="fas fa-exclamation-triangle text-white"></i>
              </div>
            </div>
            <div>
              <div class="small text-gray-500">Due '.date('d/m/Y', strToTime($project['Deadline'])).'</div>
              <span>'.$project['Title'].'</span>
            </div>
          </a>
          ';
        }
        ?>
        <a class="dropdown-item text-center small text-gray-500" href="">No more alerts</a>
      </div>
    </li>


    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['FirstName'].' '.$_SESSION['LastName'] ?></span>
        <img class="img-profile rounded-circle" src="../img/favicon.png">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="index.php">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Account
        </a>
        <!-- <a class="dropdown-item" href="settings.php">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          Settings
        </a> -->
        <a class="dropdown-item" href="projects.php">
          <i class="fas fa-tasks fa-sm fa-fw mr-2 text-gray-400"></i>
          Projects
        </a>
        <a class="dropdown-item" href="clients.php">
          <i class="fas fa-users fa-sm fa-fw mr-2 text-gray-400"></i>
          Clients
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="php/logout.php">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>

  </ul>

</nav>
