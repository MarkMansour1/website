<?php
//End the session
session_start();
require "dbconnect.php";

$week = $_SESSION['Week'];
$id = $_SESSION['UserID'];
$sql = "UPDATE users SET week = '$week' WHERE userid = '$id'";

mysqli_query($conn, $sql);

session_destroy();
session_unset();
//Return the user to the login page
header("location: ../login.php");
?>
