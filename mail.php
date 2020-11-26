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

include 'source/gmp.php';
if(isset($_POST['event'])){
	$data = $_POST['data'];
	$mail->isSMTP();                                            
	$mail->Host       = 'smtp.gmail.com';                    
	$mail->SMTPAuth   = true;                                   
	$mail->Username   = 'justprepcenter@gmail.com';                     
	$mail->Password   = $gmp;                               
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
	$mail->Port       = 587;                   
	try {
	    //Recipients
	    $mail->setFrom('justprepcenter@gmail.com', 'Just Prep');
	    $mail->addAddress('justprepcenter@gmail.com');
	    $mail->isHTML(true);                                  
	    $mail->Subject = 'Sending from just-prep';
	    $mail->Body    = $data;
	    $mail->send();
	    echo "true";
	} catch (Exception $e) {
	    echo "false";
	}
}