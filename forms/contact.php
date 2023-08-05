<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'altheopacheco564@gmail.com';
  $mail->Password = 'okbxittrumngqxjl';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom($_POST['email']);
  $mail->addAddress('altheopacheco564@gmail.com');
  $mail->isHTML(true);
  $mail->Subject = $_POST['subject'] . ' | ' . 'From: ' . $_POST['name'] . ' / ' . $_POST['email'];
  $mail->Body = $_POST['message'];
  $mail->send();

 

?>
