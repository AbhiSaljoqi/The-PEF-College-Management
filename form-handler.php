<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'abhisaljoqi@gmail.com';

$email_subject = 'New Form Sunmission';

$email_body = "User Name: $name.\n".
                "User Name: $visitor_email.\n"
                "Subject: $subject.\n"
                "User Name: $message.\n"


$to = 'abhisaljoqi@gmail.com';

$headers = "From $email_from \r\n";

$headers . = "Reply-To: $visitor_email \r\n":


email($to, $email_subject, $email_body,$headers);

$headers . ="Reply-To: $visitor_email /r/n"';

header("Location: contact")

?>