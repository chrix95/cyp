<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
include 'PHPMailer/class.phpmailer.php';
include 'PHPMailer/class.smtp.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'localhost';  // Specify main and backup SMTP servers
    $mail->Username = 'root';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@countryyellowpages.com', 'CYP Mailer');
    $mail->addAddress('info@countryyellowpages.com');     // Add a recipient
    // $mail->addAddress('info@countryyellowpages.com', 'Joe User');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addBCC('engchris95@gmail.com');
    $mail->addBCC('saviourjohnson92@gmail.com');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $success = $mail->send();


} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
