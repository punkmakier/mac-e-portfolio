<?php
if(isset($_POST['submit'])){
// lootytkdcoecbquz
// 0932061675mark

    require '../vendors/phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    // $mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'klintoiyas@gmail.com';                 // SMTP username
    $mail->Password = 'lootytkdcoecbquz';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('klintoiyas@gmail.com', 'My E-Portfolio Mailer');
    $mail->addAddress($_POST['sendEmail'], 'Sender');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'New Entry';
    $mail->Body    = $_POST['message'];

    if(!$mail->send()) {
        echo 'Failed';
    } else {
        echo 'Sent';
    }
}
?>
