<?php

use PHPMailer\PHPMailer\PHPMailer;

require '../../vendor/autoload.php';

$mail = new PHPMailer();

$mail->isSMTP();

$mail->Host = MAIL_HOST;

$mail->SMTPAuth = true;

$mail->Username = GOOGLE_USERNAME;

$mail->Password = GOOGLE_APP_PASSWORD;

$mail->SMTPSecure = MAIL_SMTPSECURE;

$mail->Port = MAIL_PORT;
