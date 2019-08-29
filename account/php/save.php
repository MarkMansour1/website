<?php
session_start();
require "dbconnect.php";

$week = $_SESSION['Week'];
$id = $_SESSION['UserID'];
$sql = "UPDATE users SET week = '$week' WHERE userid = '$id'";

mysqli_query($conn, $sql);

header("location: https://www.markmansour.co.uk/index.php");
exit();
?>
