<?php
if(!isset($_SESSION['UserID']) || $_SESSION['UserID'] != 1){
  header("location: ../index.php");
}
?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
    <img src="../img/logo_light.png" class="img-fluid">
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Back to site -->
  <li class="nav-item active">
    <a class="nav-link" href="../index.php">
      <i class="far fa-arrow-alt-circle-left"></i>
      <span>Back to site</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Account
  </div>

  <!-- Nav Item - Account -->
  <li class="nav-item">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-user"></i>
      <span>My Account</span></a>
  </li>

  <!-- Nav Item - Settings -->
  <li class="nav-item">
    <a class="nav-link" href="settings.php">
      <i class="fas fa-fw fa-cog"></i>
      <span>Settings</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Apps
  </div>

  <!-- Nav Item - Projects -->
  <li class="nav-item">
    <a class="nav-link" href="projects.php">
      <i class="fas fa-fw fa-tasks"></i>
      <span>Projects</span></a>
  </li>

  <!-- Nav Item - Clients -->
  <li class="nav-item">
    <a class="nav-link" href="clients.php">
      <i class="fas fa-fw fa-users"></i>
      <span>Clients</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="schedule.php">
      <i class="far fa-fw fa-calendar-alt"></i>
      <span>Schedule</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Documents
  </div>

  <!-- Nav Item - Web dev Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Web Dev</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <div class="collapse-divider"></div>
        <h6 class="collapse-header">Documents:</h6>
        <a class="collapse-item" href="index.php">Proposal</a>
        <a class="collapse-item" href="index.php">Contract</a>
        <a class="collapse-item" href="index.php">Questionnaire</a>
        <a class="collapse-item" href="index.php">Homework Sheet</a>
        <a class="collapse-item" href="index.php"></a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Personal Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePersonal" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Personal</span>
    </a>
    <div id="collapsePersonal" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Login Screens:</h6>
        <a class="collapse-item" href="index.php">Login</a>
        <a class="collapse-item" href="index.php">Register</a>
        <a class="collapse-item" href="index.php">Forgot Password</a>
        <div class="collapse-divider"></div>
        <h6 class="collapse-header">Other Pages:</h6>
        <a class="collapse-item" href="index.php">404 Page</a>
        <a class="collapse-item" href="index.php">Blank Page</a>
      </div>
    </div>
  </li>

</ul>
