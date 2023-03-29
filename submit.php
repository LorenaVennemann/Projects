<?php
// Überprüfen, ob das Formular abgeschickt wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Daten aus dem Formular abrufen
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["msg"];

  // E-Mail-Nachricht zusammenstellen
  $to = "ihre-email@ihre-domain.com";
  $subject = "Neue Kontaktnachricht von $name";
  $body = "Name: $name\n\nE-Mail: $email\n\nNachricht:\n$message";

  // E-Mail-Nachricht senden
  if (mail($to, $subject, $body)) {
    // Bestätigungsnachricht ausgeben
    echo "Vielen Dank für Ihre Nachricht!";
  } else {
    // Fehlermeldung ausgeben, wenn die E-Mail nicht gesendet werden konnte
    echo "Es ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut.";
  }
}
?>