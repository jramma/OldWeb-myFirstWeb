<?php
$name = $_POST['name'];
$phone= $_POST['phone'];
$mail = $_POST['mail'];
$tema= $_POST['tema'];
$message $_POST['message'];

$header = 'From: '. $mail . "\r\n";
$header .= "X-Mailer: PHP/". phpversion() . "\r\n";
$header .= "Mime-Version: 1-0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Enviado por: " . $name . "\r\n";
$message = "Su e-mail es: " . $mail . "\r\n";
$message = "Teléfono de contacto: " . $phone . "\r\n";
$message = ">>>>> TEMA ". $tema . "\r\n";
$message = "Mensaje: " . $_POST['message'] . "\r\n";
$message = "Enviado el: " . date('d/m/Y',time());

$para = 'xxxxxxxxxx@gmail.com';
$asunto = 'Contacto web'

mail($para,$asunto,utf8_decode($message),$header);
header("Location:index.html")

?>