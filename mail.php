<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_POST['event']))
try {
    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('posik.web.m@gmail.com', 'Joe User');     // Add a recipient
    $mail->addReplyTo('info@example.com', 'Information');
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Sending from just-prep';
    $mail->Body    = $_POST['data'];
    $mail->send();
    echo 'Sending status:true'.$_POST['data'];
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}