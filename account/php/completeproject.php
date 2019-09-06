<?php

session_start();
require "dbconnect.php";

$id = $_GET['id'];

if($_GET['type'] == "complete"){
  $sql = "UPDATE projects SET Complete = 1 WHERE projectid = '$id'";
}
else {
  $sql = "UPDATE projects SET Complete = 0 WHERE projectid = '$id'";
}

if(mysqli_query($conn, $sql)){
  header("location: ../view.php?type=project&id=$id");
  exit();
}
else {
  header("location: ../view.php?type=project&id=$id&error=sqlerror");
  exit();
}

?>
