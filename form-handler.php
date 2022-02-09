<?php
$name = $_POST['name'];
$visitor_number = $_POST['number'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@https://umeshstha.github.io/aurorafoundation/index.html';
$email_subject = 'New form Submission';
$email_body = "User Name: $name.\n".
              "User Number: $visitor_number.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";
$to = "aurorafoundationf@gmail.com";
$header = "From: $email_from \r\n";
$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");
?>
