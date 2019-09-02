<?php
//End the session
session_start();
require "dbconnect.php";

session_destroy();
session_unset();
//Return the user to the home page
header("location: ../../index.php");
?>
