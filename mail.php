<?php
$to      = 'trescins@gmail.com';
$subject = 'Mail ze strony internetowej';
$email   = $_POST['email_adress'];
$message = $_POST['message'];
$headers = 'From: ' $email;
$headers = "Content-Type: text/html; charset=utf.8\r\n";

mail($to, $subject, $message, $headers);
?>
