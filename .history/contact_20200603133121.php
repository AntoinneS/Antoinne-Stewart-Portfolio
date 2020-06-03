<?php
$name = $_POST['name'];
$email = $_POST['Email'];
$message = $_POST['Message'];
$subject = $_POST['Subject'];

$email_from = 'an21@yahoo.com';
$email_body = "Name: $name. \n".
               "User Email: $email. \n".
               "User Message: $message. \n";

$to = "antoinnestewart@yahoo.com";

$headers = "From: $email_from \r\n";
$headers = "Reply-to: $email "

header("Location: index.html");
?>