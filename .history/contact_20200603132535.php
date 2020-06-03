<?php
$name = $_POST['name'];
$email = $_POST['Email'];
$message = $_POST['Message'];
$subject = $_POST['Subject'];



else {
    mail("antoinnestewart@yahoo.com", $subject, $message, "From: $name <$email>");

    echo "<script type = 'text/javascript'> alert ('Your message has been sent successfully'); 
    window.history.log(-1);
    </script>";
}
header("Location: index.html");
?>