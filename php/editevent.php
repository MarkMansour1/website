<?php

session_start();
require "dbconnect.php";

//Retrieve values from form
$week = $_POST['week'];
$id = $_POST['id'];
$name = $_POST['name'];
$colour = $_POST['colour'];
if(isset($_POST['recurring'])){
  $recurring = 1;
}
else {
  $recurring = 0;
}

// If the name or price is empty, display an error message
if(empty($name)){
  header("location: ../editevent.php?error=emptyfields&id=$id&name=$name&colour=".substr($colour, 1)."&week=$week&day=$day&time=$time&recurring=$recurring");
  exit();
}
else {
  $sql = "UPDATE events SET
  name = '$name',
  colour = '$colour',
  recurring = '$recurring'
  WHERE eventid = '$id'";

  //Updates the details in the database
  if(mysqli_query($conn, $sql)){
    header("location: ../schedule.php?week=$week");
    exit();
  }
  else {
    header("location: ../editevent.php?error=sqlerror");
    exit();
  }
}

?>
