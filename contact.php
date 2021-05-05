<?php

$fname = $_POST["fname"];
$lname = $_POST["fname"];
$email = $_POST["email"];
$lname = $_POST["phone_no"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message_user = $_POST["message"];


$to = 'kisho694@gmail.com';
$subject = $subject;
$from = $email;
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="text-align: center;">Email from SYLC Website Contact Form</h1>';
$message .= '<p>First Name: <span style="font-weight: bold;">'.$fname.'</span></p>';
$message .= '<p>Last Name: <span style="font-weight: bold;">'.$lname.'</span></p>';
$message .= '<p>Email: <span style="font-weight: bold;">'.$email.'</span></p>';
$message .= '<p>Subject: <span style="font-weight: bold;">'.$subject.'</span></p>';
$message .= '<p>Message: <span style="font-weight: bold;">'.$message_user.'</span></p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    header('Location: email_sent_success.html');
} else{
    header('Location: index.html');
}

?>