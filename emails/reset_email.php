<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
require 'C:\xampp\composer\vendor\autoload.php';

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(FALSE);

function sendResetEmail($email, $token) {
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

  $mail->setFrom('noreply.muss@gmail.com', 'Muss');

  /* Add a recipient. */
  $mail->addAddress($email, 'User');

  /* Set the subject. */
  $mail->Subject = 'Forgot password - Muss';

  /* Set the mail message body. */
  $mail->isHTML(TRUE);
  $mail->Body =
  "<!DOCTYPE html>

  <body>
    <div>
      <p>Don't worry, we'll help you reset your password, just click the link below:</p>
      <a href=http://localhost/muss/reset.php?token=" . $token . ">Reset Password</a>
    </div>
  </body>
  </html>";

  /* Finally send the mail. */
  $mail->send();
}
