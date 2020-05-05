<?php

header('Location: https://parcours-lief.be');

$mailVIP = "parcours.lief@gmail.com";
$name = $_POST['name'];
$mail = $_POST['email'];
$subject = "TFE" . ' - ' . $_POST['subject'];
$msg = $_POST['message'];

ini_set("SMTP", 'smtp.marion-richez.be');

$headers = array (
    "MINE-Version" => 1.0,
    "Content-type" => "text/html; charset=iso-8859-1",
    "To" => $mailVIP,
    "From" => $mail,
    "Reply-To" => $mail,
    "Disposition-Notification-To" => $mailVIP,
    "X-Priority" => 1,
    "X-MSMail-Priority" => "High"
);

$CR_Mail = true;
$CR_Mail = @mail($mailVIP, $subject, $mail, $headers);
if ($CR_Mail === false) {
    echo "### CR_Mail=$CR_Mail - error sending email <br> \n";
} else {
    echo " *** CR_Mail=$CR_Mail - mail sent <br> \n";
}