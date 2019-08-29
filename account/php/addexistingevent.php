<?php

session_start();
require "dbconnect.php";

$week = $_POST['week'];
$day = $_POST['day'];
$time = $_POST['time'];
if(isset($_POST['recurring'])){
  $recurring = 1;
}
else {
  $recurring = 0;
}
if(isset($_POST['repeated'])){
  $repeated = 1;
}
else {
  $repeated = 0;
}

if(empty($_POST['id'])){
  header("location: ../addevent.php?error=emptyevent&week=$week&day=$day&time=$time");
  exit();
}
else {
  $userid = $_SESSION['UserID'];
  $eventid = $_POST['id'];

  $sql = "SELECT * FROM events WHERE eventid = '$eventid'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  $name = $row['Name'];
  $colour = $row['Colour'];

  $sql = "INSERT INTO events (UserID, Name, Colour, Week, Day, Time, Recurring, Repeated)
  VALUES ('$userid', '$name', '$colour', '$week', '$day', '$time', '$recurring', '$repeated')";
  if(mysqli_query($conn, $sql)){
    header("location: ../schedule.php?week=$week");
    exit();
  }
  else {
    header("location: ../addevent.php?error=sqlerror&week=$week&day=$day&time=$time");
    exit();
  }
}

?>
