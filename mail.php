<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$data = "test text";
// if(isset($_POST['event'])){
	$headers = 'From: <webmaster@just-prep.com>' . "\r\n" .
'Reply-To: <info@just-prep.com>';
	if(mail('<posik.web.m@gmail.com>', 'the subject', 'the message', $headers)){
		echo "true";
	} else {
		echo "false:".error_get_last()['message'];
	}

// }

// try {
//     //Recipients
//     $mail->setFrom('from@just-prep.com', 'Mailer');
//     $mail->addAddress('posik.web.m@gmail.com');     // Add a recipient
//     $mail->addReplyTo('info@just-prep.com', 'Information');
//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Sending from just-prep';
//     $mail->Body    = $data;
//     $mail->send();
//     echo 'Sending status:true'.$data;
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }