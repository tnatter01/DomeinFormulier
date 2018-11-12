<?php


use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
include("config.php");

if (isset($_POST['submit'])) {

    require_once("index.php");
    $domeinnamen = $_POST['domeinnaamarea'];
//    $domeinnamen = str_replace(" (Aanvraag)", "", $domeinnamen);
    $domeinnamenArray = (explode(",", $domeinnamen));
    $hosting = $_POST['hosting'];
    $mailing = $_POST['mailing'];
    $voornaam = $_POST['Voornaam'];
    $achternaam = $_POST['Achternaam'];
    $bedrijfsnaam = $_POST['Bedrijfsnaam'];
    $adres = $_POST['Adres'];
    $postcode = $_POST['Postcode'];
    $woonplaats = $_POST['Woonplaats'];
    $telefoon = $_POST['Telefoon'];
    $mobiel = $_POST['Mobiel'];
    $email = $_POST['Email'];
    $kvk = $_POST['KvK'];
    $opmerking = $_POST['Opmerking'];
    $hostingDesc = null;
    $mailingDesc = null;

    switch ($hosting) {
        case "geen-hosting":
            $hostingDesc = "Geen hosting: <br>Alleen domeinnaam, geen hosting.";
            $hosting = "Geen hosting";
            break;
        case "pakket1":
            $hostingDesc = "Pakket 1:<br>Schijfruimte: 600mb <br> Dataverkeer: 1GB <br> Kosten per jaar: &#x20AC;69,- ";
            $hosting = "Pakket 1";
            break;
        case "pakket2":
            $hostingDesc = "Pakket 2:<br>Schijfruimte: 1GB <br> Dataverkeer: 3GB <br> Kosten per jaar: &#x20AC;112,- ";
            $hosting = "Pakket 2";
            break;
        case "pakket3":
            $hostingDesc = "Pakket 3:<br>Schijfruimte: 2,5GB <br> Dataverkeer: 4GB <br> Kosten per jaar: &#x20AC;270,- ";
            $hosting = "Pakket 3";
            break;
        case "magento":
            $hostingDesc = "Magento:<br>Zo snel mogelijk contact met klant opnemen.";
            $hosting = "Magento";
            break;
        default:
            $hostingDesc = "Geen hosting gekozen, contact opnemen met klant.";
    }

    switch ($mailing) {
        case "exchange":
            $mailingDesc = "Exchange online:<br>Mailbox: 50GB <br> Kosten per maand: &#x20AC;3,40 <br> Set-up kosten";
            $mailing = "Exchange";
            break;
        case "hostingmail":
            $mailingDesc = "Hosting mail:<br>Mailbox (maximaal): 600MB <br> Set-up kosten <br> Geen extra kosten";
            $mailing = "Hosting mail";
            break;
        case "geenmail":
            $mailingDesc = "Geen mail:<br>Geen mailbox <br> Geen set-up kosten <br> Geen extra kosten";
            $mailing = "Geen mail";
            break;
        default:
            $mailingDesc = "Geen mailing gekozen, contact opnemen met klant.";
    }

    if(count($domeinnamenArray) > 1){
        $dank = "Bedankt voor het aanvragen van de domeinnamen: ". implode(", ",$domeinnamenArray) . ".";
    } else{
        $dank = "Bedankt voor het aanvragen van de domeinnaam.";
    }
/*
    foreach ($domeinnamenArray as $domein) {
        $sql = "INSERT INTO aanvragen (domeinen, hosting, maling, voornaam, achternaam, bedrijfsnaam, adres, postcode, woonplaats,
                telefoon, mobiel, email, kvk, opmerking, status) VALUES ('" . $domein . "','" . $hosting . "','" . $mailing . "','" . $voornaam .
            "','" . $achternaam . "','" . $bedrijfsnaam . "','" . $adres . "','" . $postcode . "','" . $woonplaats . "','" . $telefoon . "','" . $mobiel
            . "','" . $email . "','" . $kvk . "','" . $opmerking . "',\"Aangevraagd\");";
        mysqli_query($conn, $sql);
    }
*/

    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.office365.com";
    $mail->Port = 587;

    $mail->IsHTML(true);
    $mail->Username = $mailUsername;
    $mail->Password = $mailPassword;
    $mail->SetFrom("t.natter@nubix.nl", "Nubix Support");
    $mail->Subject = "Domeinaanvraag";
    $mail->Body = "
            <tr><td><h1>Domeinaanvraag</h1></td></tr>
            <tr>
                <td>
                    <table style=\"width:640px;border:1px solid black;table-layout: fixed;text-align:left;margin:0 auto\">
            <tr style=\"color:#000000;background:#A9A6A1;text-align:left;padding:5px 10px 5px 0px;\">
            <th colspan=\"5\">Domeinnaam</th>
            </tr>
            <tr>
                <td colspan=\"5\" style=\"text-align:left;\">$domeinnamen</td>
            </tr>
            <tr style=\"color:#000000;background:#A9A6A1;text-align:left;padding:5px 10px 5px 0px;\">
            <th colspan=\"5\">Hosting</th>
            </tr>
            <tr>
                <td colspan=\"2\">$hostingDesc</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style=\"color:#000000;background:#A9A6A1;text-align:left;padding:5px 10px 5px 0px;\">
            <th colspan=\"5\">Email</th>
            </tr>
            <tr>
                <td colspan=\"5\">$mailingDesc</td>
            </tr>
            <tr style=\"color:#000000;background:#A9A6A1;text-align:left;padding:5px 10px 5px 0px;\">
            <th colspan=\"5\">Gegevens</th>
            </tr>
            <tr>
                <td>Voornaam:</td>
                <td>$voornaam</td>
                <td></td>
                <td>Achternaam:</td>
                <td>$achternaam</td>
            </tr>
            <tr>
                <td>Adres:</td>
                <td>$adres</td>
                <td></td>
                <td>Postcode:</td>
                <td>$postcode</td>
            </tr>
            <tr>
                <td>Woonplaats:</td>
                <td>$woonplaats</td>
                <td></td>
                <td>Bedrijfsnaam:</td>
                <td>$bedrijfsnaam</td>
            </tr>
            <tr>
                <td>Telefoon:</td>
                <td>$telefoon</td>
                <td></td>
                <td>Mobiel:</td>
                <td>$mobiel</td>
            </tr>
                        <tr>
                            <td>Email adres:</td>
                            <td>$email</td>
                            <td></td>
                            <td>KvK nummer:</td>
                            <td>$kvk</td>
                        </tr>
                        <tr style=\"color:#000000;background:#A9A6A1;text-align:left;padding:5px 10px 5px 0px;\">
                            <th colspan=\"5\">Opmerking</th>
                        </tr>
                        <tr>
                            <td colspan=\"5\">$opmerking</td>
                        </tr>
            </table>";
    $mail->AddAddress($mailToNubix);

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo '<script>alert("Uw aanvraag is verstuurd")</script>';
    }
    
    $mailKlant = new PHPMailer(); // create a new object
    $mailKlant->IsSMTP(); // enable SMTP
    $mailKlant->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mailKlant->SMTPAuth = true; // authentication enabled
    $mailKlant->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mailKlant->Host = "smtp.office365.com";
    $mailKlant->Port = 587;

    $mailKlant->IsHTML(true);
    $mailKlant->Username = $mailUsername;
    $mailKlant->Password = $mailPassword;
    $mailKlant->SetFrom("t.natter@nubix.nl", "Nubix Support");
    $mailKlant->Subject = "Domeinaanvraag";
    $mailKlant->Body = "<head>
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
        }
        td{
            color: grey;
        }
    </style>
</head>
<body>
<table style=\"text-align: center;\" align=\"center\">
    <tr>
        <td>
            <img src=\"https://www.nubix.nl/web/wp-content/uploads/2018/11/logo_nubix-1.png\">
        </td>
    </tr>
    <tr>
        <td>
            <h2>Geachte heer/mevrouw $achternaam</h2>
        </td>
    </tr>
    <tr>
        <td>$dank</td>
    </tr>
    <tr>
        <td>Wij gaan de aanvraag zo spoeding mogelijk verwerken.</td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td>Mocht u nog vragen hebben neem dan contact op met onze supportafdeling:</td>
    </tr>
    <tr>
        <td>085 77 399 33</td>
    </tr>
    <tr>
        <td>support@nubix.nl</td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td>Met vriendelijke groet,</td>
    </tr>
    <tr>
        <td><b>Support Nubix B.V.</b></td>
    </tr>
    <tr>
        <td>ICT | VoIP | WEB | CRM</td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td>Twijnerstraat 22</td>
    </tr>
    <tr>
        <td>74831KL</td>
    </tr>
    <tr>
        <td>www.nubix.nl</td>
    </tr>
    <tr>
        <td>KVK 52297764 Enschede</td>
    </tr>
    <tr>
        <td>IBAN NL76RABO0111115582</td>
    </tr>
</table>
</body>
            ";
    $mailKlant->AddAddress($email);

    if (!$mailKlant->Send()) {
        echo "Mailer Error: " . $mailKlant->ErrorInfo;
    }
}
?>

