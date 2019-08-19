<?php
$name = $_POST['name'] ;
$email = $_POST['email'] ;
$text = $_POST['text'] ;
$msg =
"Name: " . $name . "\r\n" .
"Email: " . $email . "\r\n" .
"Message: " . $text;

if (empty($name) || empty($email) || empty($text)) {
  header("Location: ../index.php?error=emptyfields#contact");
}
else {
	mail("contact@markmansour.co.uk", "Contact Form Submission", $msg);
	header("Location: ../index.php#contact");
}
?>
