<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
require 'C:\xampp\composer\vendor\autoload.php';

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(FALSE);

function sendVerificationEmail($email, $token) {
  global $mail;

  /* SMTP parameters. */
    /* Tells PHPMailer to use SMTP. */
    $mail->isSMTP();

    /* SMTP server address. */
    $mail->Host = 'smtp.gmail.com';

    /* Use SMTP authentication. */
    $mail->SMTPAuth = TRUE;

    /* Set the encryption system. */
    $mail->SMTPSecure = 'tls';

    /* SMTP authentication username. */
    $mail->Username = 'noreply.muss@gmail.com';

    /* SMTP authentication password. */
    $mail->Password = 'noreply.muss**';

    /* Set the SMTP port. */
    $mail->Port = 587;

   /* Set the mail sender. */
   $mail->setFrom('noreply.muss@gmail.com', 'Muss');

   /* Add a recipient. */
   $mail->addAddress($email, 'User');

   /* Set the subject. */
   $mail->Subject = 'Verify account - Muss';

   /* Set the mail message body. */
   $mail->isHTML(TRUE);
   $mail->Body =
   '<!DOCTYPE html>
   <html lang="en">

   <body>
       <p>Welcome to Muss! Please verify your account below:</p>
       <a href="http://localhost/muss/funciones_forms/fun_verify_email.php?token=' . $token . '">Verify Account</a>
   </body>

   </html>';

   /* Finally send the mail. */
   $mail->send();
}
