<?php

session_start();
require "dbconnect.php";

$userid = $_SESSION['UserID'];

if(empty($_POST['timelist'])) {
  header("location: ../account.php?error=emptytimes");
  exit();
}
else {
  $times = "";
  foreach($_POST['timelist'] as $time) {
    $times .= "-";
    $times .= (string)$time;
  }

  $times = substr($times, 1);

  $sql = "UPDATE users SET times = '$times' WHERE userid = '$userid';";
  if(mysqli_query($conn, $sql)){
    header("location: ../schedule.php");
    exit();
  }
  else {
    header("location: ../account.php?error=sqlerror");
    exit();
  }
}
?>
