<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<?php

include("config.php");

$result = mysqli_query($conn,"SELECT * FROM aanvragen");

echo "<h1>Domeinaanvragen</h1><br>";

echo "<table class=\"table table-striped table-hover table-dark text-center\">
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
        <th scope=\"col\">Status</th>
        <th scope='col'>Verwijderen</th>
    </tr>
    </thead>
    <tbody>";



while($row = mysqli_fetch_array($result))
{

    echo "<tr>";
    echo "<td>" . $row['aanvraag_id'] . "</td>";
    echo "<td>" . $row['domeinen'] . "</td>";
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
    echo "<td>" . $row['status'] . "</td>";
    echo "<td><a href='delete.php?id=" . $row['aanvraag_id'] . "'><i class=\"fas fa-trash-alt\"></a></i></td>";
    echo "</tr>";

}
echo "</tbody>
</table>";


mysqli_close($conn);
?>
<hr>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="text-center">Hosting</h2>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
                    <div class="box-part text-center">
                        <div class="title">
                            <h4>Geen hosting</h4>
                        </div>
                        <div class="text">
                                        <span>
                                            Alleen domeinnaam, geen hosting.<br><br><br>
                                        </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2  col-sm-2 col-xs-2">
                    <div class="box-part text-center">
                        <div class="title">
                            <h4>Pakket 1</h4>
                        </div>
                        <div class="text">
                                            <span>
                                                Schijfruimte: 600mb<br>
                                                Dataverkeer: 1GB<br>
                                                Kosten per jaar: €69,-<br><br>
                                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2  col-sm-2 col-xs-2">
                    <div class="box-part text-center">
                        <div class="title">
                            <h4>Pakket 2</h4>
                        </div>
                        <div class="text">
                                            <span>
                                                Schijfruimte: 1GB<br>
                                                Dataverkeer: 3GB<br>
                                                Kosten per jaar: €112,-<br><br>
                                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2  col-sm-2 col-xs-2">
                    <div class="box-part text-center">
                        <div class="title">
                            <h4>Pakket 3</h4>
                        </div>
                        <div class="text">
                                            <span>
                                                Schijfruimte: 2,5GB<br>
                                                Dataverkeer: 4GB<br>
                                                Kosten per jaar: €270,-<br><br>
                                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2  col-sm-2 col-xs-2">
                    <div class="box-part text-center">
                        <div class="title">
                            <h4>Magento hosting</h4>
                        </div>
                        <div class="text">
                                            <span>
                                                Wij zullen z.s.m contact met u opnemen.<br><br><br>
                                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

