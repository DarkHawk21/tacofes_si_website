<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../libraries/PHPMailer/src/Exception.php';
require '../libraries/PHPMailer/src/PHPMailer.php';
require '../libraries/PHPMailer/src/SMTP.php';

$json = file_get_contents('php://input');
$data = json_decode($json);

$email = isset($data->email) ? $data->email : '';
$firstName = isset($data->firstName) ? $data->firstName : '';
$lastName = isset($data->lastName) ? $data->lastName : '';
$phone = isset($data->phone) ? $data->phone : '';
$company = isset($data->company) ? $data->company : '';
$msg = isset($data->msg) ? $data->msg : '';

$mail = new PHPMailer(true);
$response = array();

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'farmaciazada.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'web@farmaciazada.com';
    $mail->Password = 'PassZada1234.-';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    // Recipients
    $mail->setFrom('web@farmaciazada.com', 'Farmacias Zada website');
    $mail->addAddress('enriquecarranza38@gmail.com');
    // $mail->addAddress('contacto@farmaciazada.com');
    $mail->addReplyTo('no-reply@farmaciazada.com', 'Email generado desde la web. No es necesaria respuesta a este correo.');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje desde la web';
    $mail->Body = '
        <!DOCTYPE html>
        <html lang="es" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width,initial-scale=1">
                <meta name="x-apple-disable-message-reformatting">
                <title></title>
                <style>
                    table, td, div, h1, p {font-family: Arial, sans-serif;}
                </style>
            </head>
            <body style="margin:0;padding:0;">
                <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
                    <tr>
                        <td align="center" style="padding:0;">
                            <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                                <tr>
                                    <td align="center" style="padding:40px 0 30px 0;background:#ffffff;">
                                        <img src="https://farmaciazada.com/src/images/logos/logo_farmacias_zada.png" alt="" width="300" style="height:auto;display:block;" />
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:36px 30px 42px 30px;">
                                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                            <tr>
                                                <td style="padding:0 0 36px 0;color:#153643;">
                                                    <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Nuevo mensaje del sitio web</h1>
                                                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                                        Correo: '.$email.' <br>
                                                        Nombre: '.$firstName.' '.$lastName.' <br>
                                                        Teléfono: '.$phone.' <br>
                                                        Empresa: '.$company.' <br>
                                                        Mensaje: <b>'.$msg.'</b>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </body>
        </html>
    ';
    $mail->send();

    $response['status'] = 200;
    $response['msg'] = "El e-mail se envió satisfactoriamente.";
} catch (Exception $e) {
    $response['status'] = 400;
    $response['msg'] = "No fue posible enviar el e-mail en este momento.";
}

echo json_encode($response);