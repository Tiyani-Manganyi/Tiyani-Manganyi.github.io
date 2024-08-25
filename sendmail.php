<?php 
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submitContact'])) {

    $date = $_POST['date'];
    $fullname = $_POST['full_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'kbmagoda2024@gmail.com';               //SMTP username
        $mail->Password   = 'peltdvnfivfbyyiz';  
                              //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption

        $mail->Port       = 465;                                    //TCP port to connect to

        //Recipients
        $mail->setFrom('kbmagoda2024@gmail.com', 'Funda of Wed IT');
        $mail->addAddress('kbmagoda2024@gmail.com', 'Funda of Web IT');     //Add a recipient

        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = 'New enquiry - From TMANPLUS Web Developer';
        $mail->Body    = '<h3 sytle="border:2px solid red">Hello, you got a new enquiry</h3>
                           <h4>Subject: '.$subject.'</h4>
                          <h4>Date and Time of the email sent: '.$date.'</h4>
                          <h4>Full Name: '.$fullname.'</h4>
                          <h4>Email: '.$email.'</h4>
                          <h4>Message: '.$message.'</h4>'
                         
                          ;

        //Send Email
        if ($mail->send()) {
          //  $_SESSION['status'] = "Thank you for contacting us - Team Funda of Web IT";
            header("Location: index.php");
            exit(0);
        } else {
          //  $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            header("Location: contact.php");
            exit(0);
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    header('Location: index.php');
    exit(0);
}
?>
