<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
include 'PHPMailer/class.phpmailer.php';
include 'PHPMailer/class.smtp.php';

$mail = new PHPMailer;                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication
    $mail->Username = 'mail@countryyellowpages.net';                 // SMTP username
    $mail->Password = 'kWY=pRbY2';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@countryyellowpages.net', 'CYP Website');
    $mail->addAddress($to);     // Add a recipient
    // $mail->addAddress('info@countryyellowpages.com', 'Joe User');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addBCC('engchris95@gmail.com', 'Christopher Okokon');
    $mail->addBCC('saviourjohnson92@gmail.com', 'Saviour Johnson');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = '<br/>' .$body;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $success = $mail->send();


} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
