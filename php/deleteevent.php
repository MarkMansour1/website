<?php

session_start();
require "dbconnect.php";

//Retrieve values from form
$id = $_POST['id'];

$sql = "DELETE FROM  events WHERE eventid = '$id'";

//Updates the details in the database
if(mysqli_query($conn, $sql)){
  header("location: ../index.php");
  exit();
}
else {
  header("location: ../editevent.php?error=sqlerror");
  exit();
}

?>
