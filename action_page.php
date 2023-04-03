<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "moamenm@kean.edu";
  $subject = "New message from your website";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "There was a problem sending your message. Please try again later.";
  }
}
?>