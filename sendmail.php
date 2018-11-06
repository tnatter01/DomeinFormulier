<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
include("config.php");

    $body = $_POST['summernote'];
    $onderwerp = $_POST["Onderwerp"];
    $email = $_POST['Email'];
    $id = $_POST["Id"];

    if(isset($_POST["Status"])){
    $sql = "UPDATE aanvragen SET status='Beantwoord' where aanvraag_id=\"$id\";";
    echo $sql;
    mysqli_query($conn, $sql);
    }

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
    $mail->Subject = $onderwerp;
    $mail->Body = $body;
    $mail->AddAddress($email);

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo '<script>alert("Uw aanvraag is verstuurd")</script>';
    }

?>

