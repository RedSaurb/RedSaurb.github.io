<?php
//chane to your email $to
$to = "saurabhkumar00077@gmail.com";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
//change header email from and reply to
$headers = 'From: Saurabh Kumar <redsaurb@outlook.com>' . "\r\n" .
           'Reply-To: redsaurb@outlook.com' . "\r\n" .
           'X-Mailer: PHP' . phpversion();
$subject = "Response from website";
$body = "You have received following details:";
$body .="\r\nVisitor Name: " . $name;
$body .="\r\nVisitor Email: " . $email;
$body .="\r\nVisitor Message: " . $message;

if (mail($to,$subject,$body,$headers)){
    echo 'We have received your submission.</br><a href="contact.html">Go Back</a>';
}   else {
    echo 'Sorry, could not process submission.</br><a href="contact.html">Go Back</a>';
}




?>