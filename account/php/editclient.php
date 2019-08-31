<?php

session_start();
require "dbconnect.php";

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$company = $_POST['company'];

$sql = "UPDATE clients SET
FirstName = '$firstname',
LastName = '$lastname',
Phone = '$phone',
Email = '$email',
Company = '$company'
WHERE clientid = '$id'";

if(mysqli_query($conn, $sql)){
  header("location: ../view.php?type=client&id=$id");
  exit();
}
else {
  header("location: ../view.php?error=sqlerror");
  exit();
}

?>
