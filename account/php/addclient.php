<?php

session_start();
require "dbconnect.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$company = $_POST['company'];

$sql = "INSERT INTO clients (FirstName, LastName, Phone, Email, Company)
VALUES ('$firstname', '$lastname', '$phone', '$email', '$company')";

if(mysqli_query($conn, $sql)){

  if(empty($_POST['project'])){
    header("location: ../clients.php");
    exit();
  }
  else {
    header("location: ../new.php?type=project");
    exit();
  }

}
else {
  header("location: ../newproject.php?error=sqlerror");
  exit();
}

?>
