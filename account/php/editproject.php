<?php

session_start();
require "dbconnect.php";

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$deadline = $_POST['deadline'];
$client = $_POST['client'];
$fee = $_POST['fee'];

if(strlen($deadline) == 0){
  $deadline = date('Y-m-d', strToTime("+1 year"));
}

$sql = "UPDATE projects SET
Title = '$title',
Description = '$description',
Deadline = '$deadline',
Fee = '$fee',
ClientID = '$client'
WHERE projectid = '$id'";

if(mysqli_query($conn, $sql)){
  header("location: ../view.php?type=project&id=$id");
  exit();
}
else {
  header("location: ../view.php?type=project&id=$id&error=sqlerror");
  exit();
}

?>
