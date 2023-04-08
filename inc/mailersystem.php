<?php
if(isset($_POST['submit']) == "submit"){
// lootytkdcoecbquz
// 0932061675mark

    require '../vendors/phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    // $mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'klintoiyas@gmail.com';                 // SMTP username
    $mail->Password = 'moahfsqrxwtfnvow';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to


    $mail->setFrom("klintoiyas@gmail.com", 'My E-PORTFOLIO MAILER');
    $mail->addAddress("carbamark@gmail.com");     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'PRIORITY: NEW INQUIRY';
    $mail->Body    = "Sender: ".$_POST['sendEmail']."<br>Complete Name: ".$_POST['sendName']."<br><br>Message: ".$_POST['message'];

    if(!$mail->send()) {
        echo 'Failed';
    } else {
        echo 'Sent';
    }
}
?>
