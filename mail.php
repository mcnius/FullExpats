<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php/phpmailer/Exception.php';
require 'php/phpmailer/PHPMailer.php';
require 'php/phpmailer/SMTP.php';

if( $_POST['name'] != '' && $_POST['email'] != '' && $_POST['message'] != '' ){
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    try {
        //Server settings
        //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail.fullexpatservicesamsterdam.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'info@fullexpatservicesamsterdam.com';                 // SMTP username
        $mail->Password = '+SvRho)R742r';                           // SMTP password
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('info@fullexpatservicesamsterdam.com', 'Full expat services');
        $mail->addAddress('expatservices@outlook.com', 'Full expat services');     // Add a recipient
        //$mail->addAddress('adonis_jose@outlook.com', 'Full expat services');     // Add a recipient



        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'New contact from website';
        $mail->Body    = 'You have received a new message: <br> <b>Name:</b> ' . $_POST['name'] . '<br><b>Email:</b> ' . $_POST['email'] . '<br><b>Phone:</b> ' . $_POST['phone'] . '<br><b>Message:</b> ' . $_POST['message'];

        $mail->send();

        echo 'Ok';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}

?>