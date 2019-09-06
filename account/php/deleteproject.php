<?php

session_start();
require "dbconnect.php";

$id = $_GET['id'];

$sql = "DELETE FROM projects WHERE ProjectID = '$id'";

if(mysqli_query($conn, $sql)){
  header("location: ../projects.php");
  exit();
}
else {
  header("location: ../view.php?type=project&id=$id");
  exit();
}

?>
