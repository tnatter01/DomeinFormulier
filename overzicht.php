<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<?php

include("config.php");

$result = mysqli_query($conn,"SELECT * FROM aanvragen");

echo "<h1>Domeinaanvragen</h1><br>";

echo "<table class=\"table table-hover table-dark\">
    <thead>
    <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Domeinnaam</th>
        <th scope=\"col\">Hosting Pakket</th>
        <th scope=\"col\">Mailing pakket</th>
        <th scope=\"col\">Voornaam</th>
        <th scope=\"col\">Achternaam</th>
        <th scope=\"col\">Adres</th>
        <th scope=\"col\">Postcode</th>
        <th scope=\"col\">Woonplaats</th>
        <th scope=\"col\">Bedrijfsnaam</th>
        <th scope=\"col\">Telefoon</th>
        <th scope=\"col\">Mobiel</th>
        <th scope=\"col\">Email adres</th>
        <th scope=\"col\">KvK nummer</th>
        <th scope=\"col\">Opmerking</th>
    </tr>
    </thead>
    <tbody>";



while($row = mysqli_fetch_array($result))
{

    echo "<tr>";
    echo "<td>" . $row['aanvraag_id'] . "</td>";
    echo "<td>" . $row['domeinnaam'] . $row['domeinext'] . "</td>";
    echo "<td>" . $row['hosting'] . "</td>";
    echo "<td>" . $row['maling'] . "</td>";
    echo "<td>" . $row['voornaam'] . "</td>";
    echo "<td>" . $row['achternaam'] . "</td>";
    echo "<td>" . $row['adres'] . "</td>";
    echo "<td>" . $row['postcode'] . "</td>";
    echo "<td>" . $row['woonplaats'] . "</td>";
    echo "<td>" . $row['bedrijfsnaam'] . "</td>";
    echo "<td>" . $row['telefoon'] . "</td>";
    echo "<td>" . $row['mobiel'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['kvk'] . "</td>";
    echo "<td>" . $row['opmerking'] . "</td>";
    echo "</tr>";

}
echo "</tbody>
</table>";


mysqli_close($conn);
?>

