<? 

$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];
$subject = $_REQUEST['Subject'];

if (empty($name) || empty($email) || empty($message)) || empty($subject) {
    echo "Please fill all the fields";
}

else {
    mail("antoinnestewart@yahoo.com", $subject, $message, "From: ")
}