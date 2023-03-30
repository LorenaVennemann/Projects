<?php
if($_POST["submit"]) {
    $recipient="jil.vennemann@gmail.com";
    $subject="Message from ".$_POST["name"];
    $sender=$_POST["email"];
    $message=$_POST["msg"];

    $mailBody="Name: $name\nEmail: $sender\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $name <$sender>");

    echo '<p>Thank you for contacting me, '.$_POST["name"].'! I will get back to you shortly.</p>';
}
?>