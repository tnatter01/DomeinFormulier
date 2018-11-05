<?php
include("config.php");

$UID = (int)$_GET['ID'];
$query = mysqli_query($conn, "SELECT * FROM aanvragen WHERE aanvraag_id = '$UID'");

if (mysqli_num_rows($query) >= 1) {
    while ($row = mysqli_fetch_array($query)) {
        $domeinen = $row['domeinen'];
        $hosting = $row['hosting'];
        $mailing = $row['maling'];
        $voornaam = $row['voornaam'];
        $achternaam = $row['achternaam'];
        $bedrijfsnaam = $row['bedrijfsnaam'];
        $adres = $row['adres'];
        $postcode = $row['postcode'];
        $woonplaats = $row['woonplaats'];
        $telefoon = $row['telefoon'];
        $mobiel = $row['mobiel'];
        $email = $row['email'];
        $kvk = $row['kvk'];
        $opmerking = $row['opmerking'];
    }
    ?>
    <form action="update.php" method="post">
        <input type="hidden" name="ID" value="<?= $UID; ?>">
        Domein: <input type="text" name="ud_email" value="<?= $email; ?>"><br>
        Hosting: <input type="text" name="ud_EmployeeName" value="<?= $EmployeeName ?>"><br>
        Mailing: <input type="text" name="ud_dob" value="<?= $DOB ?>"><br>
        Age: <input type="text" name="ud_Age" value="<?= $Age ?>"><br>
        <input type="Submit">
    </form>
    <?php
} else {
    echo 'No entry found. <a href="javascript:history.back()">Go back</a>';
}
?>
</body>
</html>