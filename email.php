<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'Exception.php';

/* The main PHPMailer class. */
require 'PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'SMTP.php';


$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 3; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "warlock.sinc.cl";
$mail->Port = 465; // or 587
$mail->SMTPOptions = array(
	'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
	)
);
$mail->IsHTML(true);
$mail->Username = "contacto@ricardoeo.com";
$mail->Password = "awzqw8n17071";
/* $mail->Password = "R9A3E7O1"; */
$mail->SetFrom("contacto@ricardoeo.com");
$mail->Subject = "Mensaje de Cliente";
$mail->Body = "El mensaje es de: " . $_POST['nombre'] . " Con correo: " . $_POST['correo'] . " y mensaje: " . $_POST['mensaje'];
$mail->AddAddress("ricardoantonioecheverriaortiz@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
?>