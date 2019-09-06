<?php

session_start();
require "dbconnect.php";

$id = $_GET['id'];

$sql = "DELETE FROM client WHERE ClientID = '$id'";

if(mysqli_query($conn, $sql)){
  header("location: ../clients.php");
  exit();
}
else {
  header("location: ../view.php?type=client&id=$id");
  exit();
}

?>
