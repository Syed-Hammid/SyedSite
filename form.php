<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $number = $_POST["number"];
}

// Send the email
$to = "syedhammid@gmail.com";
$subject = "New contact form submission";
$body = "Name: $name\nPhone Number: $number\nEmail: $email\nMessage: $message";

if (mail($to, $subject, $body)) {
  echo "Thank you for contacting us!";
} else {
  echo "There was a problem sending your message. Please try again later.";
}
?>