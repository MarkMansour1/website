<?php

//Database details
$server = "localhost";
$user = "root";
$pass = "";
$db = "timetable";

//Connection statement
$conn = mysqli_connect($server, $user, $pass, $db);

//Connects to the database
if ($conn -> connect_error) {
  die("Database connection failed: " . $conn -> connect_error);
}

?>
