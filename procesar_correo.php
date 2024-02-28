<?php 

// Datos del formulario
$nombre = $_POST['Nombre'];
$correo = $_POST['Correo'];
$mensaje = $_POST['Mensaje'];

// Configuración del correo electrónico
$destinatario = 'high-code@onlinedcsolution.com';
$asunto = 'Nuevo mensaje del formulario';

// Construir el mensaje
$contenido = "Nombre: $nombre\n";
$contenido .= "Correo: $correo\n";
$contenido .= "Mensaje:\n$mensaje";

// Configuración de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP de Google
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jfcsserm@gmail.com'; 
    $mail->Password = 'snuytaepvdaptidn'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Configuración del remitente y destinatario
    $mail->setFrom('jfcsserm@gmail.com', 'Selena Rivas');
    $mail->addAddress($destinatario);

    // Contenido del correo
    $mail->isHTML(false);
    $mail->Subject = $asunto;
    $mail->Body = $contenido;

    // Enviar el correo
    $mail->send();
    echo 'Gracias por contactarnos.';
} catch (Exception $e) {
    echo 'Error al enviar el mensaje: ' . $mail->ErrorInfo;
}


