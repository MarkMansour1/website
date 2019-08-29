<?php

//Database details
$server = "localhost";
$user = "u671780733_mark";
$pass = "kbhL0ZPs";
$db = "u671780733_mmdb";

//Connection statement
$conn = mysqli_connect($server, $user, $pass, $db);

//Connects to the database
if ($conn -> connect_error) {
  die("Database connection failed: " . $conn -> connect_error);
}

?>
