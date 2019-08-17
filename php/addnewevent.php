<?php

session_start();
require "dbconnect.php";

//Retrieve values from form
$userid = $_SESSION['UserID'];
$name = $_POST['name'];
$colour = $_POST['colour'];
$week = $_POST['week'];
$day = $_POST['day'];
$time = $_POST['time'];
if(isset($_POST['recurring'])){
  $recurring = 1;
}
else {
  $recurring = 0;
}

//If the name or price is empty, display an error message
if(empty($name)){
  header("location: ../addevent.php?error=emptyfields&week=$week&day=$day&time=$time");
  exit();
}
else {
  //Insert the new item into the database
  $sql = "INSERT INTO events (UserID, Name, Colour, Week, Day, Time, Recurring)
  VALUES ('$userid', '$name', '$colour', '$week', '$day', '$time', '$recurring')";
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
