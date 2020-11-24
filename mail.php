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
{
	$to      = 'posik.web.m@gmail.com';
	$subject = 'Mail from just-prep';
	$message = $_POST['data'];
	$headers = 'From: webmaster@example.com' . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	if(mail($to, $subject, $message, $headers)){
		echo "true";
	} else {
		echo "false\n".error_get_last()['message'];
	}
}