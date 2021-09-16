<?php
// Conecto mi form / name / con el server a traves de los name
$monto = $_POST["solicitar"];
$nombre = $_POST['nombre-solicitante'];
$apellido = $_POST["apellido-solicitante"];
$mail = $_POST['email-solicitante'];
$dni = $_POST['dni-solicitante'];
$sexo = $_POST['sexo-solicitante'];

// Como funciona con el server
$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

// Como me a llegar el cuerpo del mail a mi, o sea lo que la gente escribió en el form
$mensaje = "Esta solicitud fue enviado por " . $nombre . . $apellido .",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "El monto es: ". $monto ." \r\n";
$mensaje .= "DNI: " . $dni . " \r\n";
$mensaje .= "Sexo: " . $sexo . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'sebastiancaporaso@gmail.com'; // El mail a donde van a llegar los mensajes
$asunto = 'Solicitud de prestamo/Credi-Marta';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:index.html');

?>