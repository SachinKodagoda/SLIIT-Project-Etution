<?php require APPROOT . '/views/visitor/mailer/Exception.php'; ?>
<?php require APPROOT . '/views/visitor/mailer/PHPMailer.php'; ?>
<?php require APPROOT . '/views/visitor/mailer/SMTP.php'; ?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

// try {
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     $mail->Username = 'wizard.of.digital.art@gmail.com';
//     $mail->Password = 'dankotuwa123';
//     $mail->SMTPSecure = 'ssl';
//     $mail->Port = 465;

//     //Sender
//     $mail->setFrom('duminda.g.k@gmail.com');
//     $mail->addReplyTo('duminda.g.k@gmail.com');
//     //Recipients
//     $mail->addAddress('wizard.of.digital.art@gmail.com');

//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

if (isset($_POST['submit'])) {
    $subject = $_POST['mailer_subject'];
    $email = $_POST['mailer_email'];
    $message = $_POST['mailer_message'];
    $name = $_POST['mailer_name'];
    $Usr = 'wizard.of.digital.art@gmail.com';
    $Pass = 'dankotuwa123';
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $Usr;
        $mail->Password = $Pass;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        //Sender
        $mail->setFrom($email, $name);
        $mail->addReplyTo($email);
        //Recipients
        $mail->addAddress($Usr);

        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->send();
        header('location: ' . URLROOT . '/' . 'visitor/success_mailer');
    } catch (Exception $e) {
        header('location: ' . URLROOT . '/' . 'visitor/fail_mailer');
    }
}
