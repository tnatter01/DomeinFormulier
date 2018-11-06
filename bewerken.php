<?php

include("config.php");

$aanvraag_id = $_POST["id"];
$domein = $_POST["domein"];
$hosting = $_POST['hosting'];
$mailing = $_POST['mailing'];
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$bedrijfsnaam = $_POST['bedrijfsnaam'];
$adres = $_POST['adres'];
$postcode = $_POST['postcode'];
$woonplaats = $_POST['woonplaats'];
$kvk = $_POST['kvk'];
$telefoon = $_POST['telefoon'];
$mobiel = $_POST['mobiel'];
$opmerking = $_POST['opmerking'];
$status = $_POST['status'];

$sql = "UPDATE aanvragen SET domeinen='$domein', voornaam='$voornaam', achternaam='$achternaam', email='$email', bedrijfsnaam='$bedrijfsnaam', adres='$adres', postcode='$postcode', woonplaats='$woonplaats', kvk='$kvk', telefoon='$telefoon', mobiel='$mobiel', opmerking='$opmerking' where aanvraag_id='$aanvraag_id';";
mysqli_query($conn, $sql);

header("location: tickets.php");
?>

