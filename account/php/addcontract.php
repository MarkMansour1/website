<?php

session_start();
require "dbconnect.php";

$id = $_POST['id'];
$date = date('Y-m-d');
$copyright = str_replace("'", "''", $_POST['copyright']);
$reservation = str_replace("'", "''", $_POST['reservation']);
$revisions = str_replace("'", "''", $_POST['revisions']);
$payschedule = str_replace("'", "''", $_POST['payschedule']);
$payterms = str_replace("'", "''", $_POST['payterms']);
$cancellation = str_replace("'", "''", $_POST['cancellation']);
$credits = str_replace("'", "''", $_POST['credits']);
$preliminary = str_replace("'", "''", $_POST['preliminary']);
$permissions = str_replace("'", "''", $_POST['permissions']);
$misc = str_replace("'", "''", $_POST['misc']);

$sql = "INSERT INTO contracts (ProjectID, Date, Copyright, Reservation, Revisions, PaySchedule, PayTerms, Cancellation, Credits, Preliminary, Permissions, Misc)
VALUES ('$id', '$date', '$copyright', '$reservation', '$revisions', '$payschedule', '$payterms', '$cancellation', '$credits', '$preliminary', '$permissions', '$misc')";

if(mysqli_query($conn, $sql)){
  header("location: ../view.php?type=project&id=$id");
  exit();
}
else {
  header("location: ../new.php?type=contract&id=$id&error=sqlerror");
  exit();
}

?>
