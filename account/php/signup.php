<?php

require "dbconnect.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordRepeat = $_POST['passwordrepeat'];

//If the email or password is empty, display an error message
if(empty($email) || empty($password) || empty($passwordRepeat)){
  header("location: ../login.php?error=emptyfields&email=".$email);
  exit();
}
//If the passwords don't match, display an error message
else if($password !== $passwordRepeat){
  header("location: ../login.php?error=passwordmatch&email=".$email);
  exit();
}
else {
  //Retrieves any users in the database with the same email
  $sql = "SELECT email FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
  //If there is at least one result, make the user pick a new email
  if(mysqli_num_rows($result) > 0){
    header("location: ../login.php?error=emailtaken");
    exit();
  }
  else {
    //Hash the users password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    //Insert the user into the database
    $sql = "INSERT INTO users (FirstName, LastName, Email, Password) VALUES ('$firstname', '$lastname', '$email', '$hashedPassword')";

    if(mysqli_query($conn, $sql)){
      //Return to the signup page and display a success messaage
      header("location: ../login.php?success");
      exit();
    }
    else {
      header("location: ../login.php?error=sqlerror");
      exit();
    }
  }
}
?>
