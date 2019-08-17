<?php
require "dbconnect.php";

$email = $_POST['email'];
$password = $_POST['password'];

//If the email or password is left empty, display an error message
if(empty($email) || empty($password)){
  header("location: ../login.php?error=emptyfields&email=".$email);
  exit();
}
else {
  $sql = "SELECT * FROM users WHERE email = '$email';";
  $result = mysqli_query($conn, $sql);

  //Checks if the user exists in the database
  if($row = mysqli_fetch_array($result)){
    //Checks the users password against the hashed password stored in the database
    $passwordCheck = password_verify($password, $row['Password']);
    //If the password matches, start a session and store the users details and create an array for the shopping cart
    if($passwordCheck == true){
      //Starts a session and stores the users id, email and password
      session_start();
      $_SESSION['UserID'] = $row['UserID'];
      $_SESSION['Email'] = $row['Email'];
      $_SESSION['Password'] = $row['Password'];
      $_SESSION['FirstName'] = $row['FirstName'];
      $_SESSION['LastName'] = $row['LastName'];
      $_SESSION['Week'] = $row['Week'];
      header("location: ../index.php");
    }
    else {
      header("location: ../login.php?error=incorrectpassword&email=".$email);
      exit();
    }
  }
  else {
    header("location: ../login.php?error=usernotfound&email=".$email);
    exit();
  }
}
?>
