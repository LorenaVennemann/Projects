<?php
$debug = true; 

require_once "vendor/autoload.php";

try {
        // neue instanz der klasse erstellen
        $mail = new PHPMailer\PHPMailer\PHPMailer($debug);

        if ($debug) {
                // gibt einen ausführlichen log aus
                $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;
        }

        // authentifiziere dich über den smtp-login
        $mail->isSMTP();
        $mail->SMTPAuth = true;

        // login
        $mail->Host       = "smtp.gmail.com";
        $mail->Port       = "587";
        $mail->Username   = "jil.vennemann@gmail.com";
        $mail->Password   = "SabrinaVanessa8712.?";
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
        $mail->SMTPOptions = array(
            'ssl' => array(
                  'verify_peer' => false,
                  'verify_peer_name' => false,
                  'allow_self_signed' => true
            ),
            'tls' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->isHTML(true);
        $mail->Subject = utf8_encode($Subject);
        $mail->Body    = utf8_encode($Html);
        $mail->AltBody = utf8_encode($Text);

        $mail->send();

} catch (PHPMailer\PHPMailer\Exception $e) {
    echo "Message could not be sent. Mailer Error: ".$mail->ErrorInfo; 
}
?>