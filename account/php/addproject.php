<?php

session_start();
require "dbconnect.php";

$title = $_POST['title'];
$description = $_POST['description'];
$startdate = date("Y-m-d");
$deadline = $_POST['deadline'];
$clientid = $_POST['client'];

$sql = "INSERT INTO projects (ClientID, Title, Description, StartDate, Deadline)
VALUES ('$clientid', '$title', '$description', '$startdate', '$deadline')";
if(mysqli_query($conn, $sql)){
  header("location: ../projects.php");
  exit();
}
else {
  header("location: ../newproject.php?error=sqlerror");
  exit();
}

?>
