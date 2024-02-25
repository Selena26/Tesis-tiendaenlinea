<?php

// Incluir la clase PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Crear una instancia de PHPMailer
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
    $mail->addAddress('appatino@espe.edu.ec');

    // Contenido del correo
    $mail->isHTML(true); // Establecer formato HTML
    $mail->Subject = 'Hemos recibido tu pedido';

    // Contenido HTML del mensaje
    $mensaje = '
    
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                background-color: rgba(102, 102, 102, 0.1);
            }
    
           
    
            .text-light {
                color: #fff;
            }
    
            .bg-primary {
                background-color: #7f54b3;
            }
    
            .custom-row {
                display: flex;
                margin-top: 1rem;
                margin-bottom: 1rem;
            }
    
            .align-items-center {
                align-items: center;
            }
    
            .justify-content-center {
                justify-content: center;
            }
    
            .col {
                text-align: center;
            }
    
            .text-muted {
                color: #6c757d;
            }
    
            .text-primary {
                color: #7f54b3;
            }
    
            .table {
                color: #666;
                border-collapse: collapse;
                width: 100%;
            }
    
            .table th,
            .table td {
                border: 1px solid #dee2e6;
                padding: 0.75rem;
                vertical-align: top;
            }
    
            .table thead th {
                vertical-align: bottom;
                border-bottom: 2px solid #dee2e6;
            }
    
            .table tbody+tbody {
                border-top: 2px solid #dee2e6;
            }
    
            .table-sm th,
            .table-sm td {
                padding: 0.3rem;
            }
    
            .text-right {
                text-align: right;
            }
    
            .border {
                border: 1px solid #dee2e6 !important;
            }
    
            .m-1 {
                margin: 0.25rem !important;
            }
    
            .p-3 {
                padding: 1rem !important;
            }
    
            .mb-4 {
                margin-bottom: 1rem !important;
            }
    
            .text-secondary {
                color: #6c757d;
            }
    
            .text-danger {
                color: #dc3545;
            }
    
            .text-success {
                color: #28a745;
            }
    
            .text-center {
                text-align: center !important;
            }
        </style>
    </head>
    
    <body>
        <div class="container" style="margin: 20px;">
            <div class="row custom-row">
                <div class="col text-light bg-primary align-items-center justify-content-center"
                    style="width: 100%; height: 50px; font-size: 20px;">
                    Gracias por tu pedido
                </div>
            </div>
            <div class="row custom-row">
                <div class="col" style="color: #500050; width: 100%;">
                    <p style="text-align: left;">Hola Joan, </p>
                    <p style="text-align: left;">Gracias por tu pedido. Está en espera hasta que confirmemos que se ha
                        recibido el pago.</p>
                </div>
            </div>
            <div class="row custom-row">
                <div class="col" style="color: #7f54b3;">
                    <h3>[Pedido #690] (febrero 24, 2024)</h3>
                </div>
    
            </div>
            <div class="">
                <div class="container">
                    <table class="table border">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ACER Aspire Laptop</td>
                                <td>2</td>
                                <td>$1.238,00</td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Subtotal:</strong> </td>
                                <td>$1.238,00</td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Envío:</strong></td>
                                <td>Free shipping</td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Métodos de pago:</strong> </td>
                                <td>Transferencia bancaria directa</td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Total:</strong></td>
                                <td>$1.238,00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row custom-row">
                <div class="col" style="color: #666;">
                    <p><strong>Cédula|DNI|Pasaporte:</strong> 2300287246</p>
                </div>
            </div>
            <style>
                .custom-row {
        display: flex;
    }
    
    .column {
        flex: 1;
        margin: 0.5rem;
    }
    
            </style>
            <div class="custom-row">
                <div class="column">
                    <h3 style="color: #666;">Dirección de facturación</h3>
                    <div class="m-1 p-3 border">
                        <p>Joan Cevallos</p>
                        <p>Coop. Gran Colombia</p>
                        <p>Santo Domingo de los Tsáchilas</p>
                        <p><a href="" class="text-primary">+593997451067</a></p>
                        <p><a href="jfcevallos7@espe.edu.ec" class="text-primary">jfcevallos7@espe.edu.ec</a></p>
                    </div>
                </div>
                <div class="column">
                    <h3 style="color: #666 ;">Dirección de envío</h3>
                    <div class="m-1 p-3 border">
                        <p>Joan Cevallos</p>
                        <p>Coop. Gran Colombia</p>
                        <p>Santo Domingo de los Tsáchilas</p>
                    </div>
                </div>
            </div>
            
            <div class="row custom-row">
                <div class="col">
                    <p style="color: #500050;">Esperamos poder cumplir pronto tu pedido.</p>
                </div>
            </div>
        </div>
    </body>
    
    </html>

    
    ';

    $mail->msgHTML($mensaje);

    // Enviar el correo
    $mail->send();
    echo 'El correo ha sido enviado correctamente.';
} catch (Exception $e) {
    echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
}
