<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/wamp64/www/site/vendor/autoload.php';
require 'C:/wamp64/www/site/vendor/phpmailer/phpmailer/src/Exception.php';
require 'C:/wamp64/www/site/vendor/phpmailer/phpmailer/src/PHPMailer.php';
 require 'C:/wamp64/www/site/vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer();
 /*
$mail-> IsSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->SMTPSecure='tls';
$mail->Port= 587;

$mail->Username="hammioui.idriss@gmail.com";
$mail->Password="h;*/
$mail->From = 'hammioui.idriss@gmail.com';
$mail->addAddress('hammioui.idriss@gmail.com');
$mail->isHTML(false);
$mail->Subject= 'Message FROM Portfolio';
$mail->Body = 'helo';
$mail->send();

if($mail->send()) {
	echo "email sent";
}else {echo 'Mailer error: ' . $mail->ErrorInfo;
	echo "e";
	
}
?>