<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
//$mail = new PHPMailer(true);

if(isset($_POST['event'])){
	$headers = 'From: <test@test.com>' . "\r\n" .
'Reply-To: <test@test.com>';
	mail('<posik.web.m@gmail.com>', 'the subject', 'the message', $headers,
  'webmaster@just-prep.com');

}
// try {
//     //Recipients
//     $mail->setFrom('from@just-prep.com', 'Mailer');
//     $mail->addAddress('posik.web.m@gmail.com');     // Add a recipient
//     $mail->addReplyTo('info@just-prep.com', 'Information');
//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Sending from just-prep';
//     $mail->Body    = $_POST['data'];
//     $mail->send();
//     echo 'Sending status:true'.$_POST['data'];
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }