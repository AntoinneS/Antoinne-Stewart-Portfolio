<?php
$name = $_POST['name'];
$email = $_POST['Email'];
$message = $_POST['Message'];
$subject = $_POST['Subject'];

$email_from = 'antoinnestewart@yahoo.com';
$email_body = "Name: $name. \n".
               "User Email: $email. \n"
               "User Message "


header("Location: index.html");
?>