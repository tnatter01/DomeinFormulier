<!--
TODO aanvragen kunnen weghalen *
TODO dubbele aanvragen *
TODO algemene voorwaarden nieuwe pagina *
TODO hosting mail weg *
TODO domein verhuizen *
TODO mail voor klant *
TODO verhuiscode prompt *
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Metadata-->
    <meta charset="UTF-8">
    <meta name="keywords" content="Domeinaanvraag, Aanvraagformulier, Nubix, Domaincheck">
    <meta name="description" content="Formulier met domeincheck voor aanvraag domein">
    <meta name="author" content="Twan Natter">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Domein aanvragen</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!--Javascript-->
    <script src="jquery-1.2.6.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/main.js"></script>
    <!--    <script src="lib/prototype.js"></script>-->
    <script type='text/javascript'
            src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js?ver=1.4.2'></script>
    <script src="plugins/sweet-alert2/sweetalert2.min.js"></script>
    <!--    Stylesheets-->
    <link rel="stylesheet" type="text/css" href="css/fontawesome/531.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/337.css">
    <link href="main.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!--Style-->
    <style>
        * {
            border-radius: 0 !important;
            -moz-border-radius: 0 !important;
        }

        .panel-default > .panel-heading {
            color: #333;
            background-color: #fff;
            border-color: #fff;
            border-top: 3px solid yellow;
        }

        .input-text {
            min-width: 30%;
        }
    </style>
</head>

<body>
<noscript><span style="color:red;">Je browser ondersteunt geen JavaScript! Je hebt dit nodig om deze pagina goed te kunnen gebruiken.</span>
</noscript>
<div class="aanvraag">
    <div class="domeincheck">
        <div class="container">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Domeincontrole voor aanvraag of verhuizen <span style="color:red;">*</span></h2></div>
                        <div class="panel-body">
                            Controleer eerst of de door u aan te vragen domeinnaam beschikbaar is.<br>
                            Voer uw domeinnaam in <u>zonder</u> extensie.<br>
                            <form method="post" action="./" id="form">
                                <input class="input-text" type="text" autocomplete="off" id="Search" name="domain"
                                       maxlength="253">
                                <input class="btn btn-secondary" type="submit" id="Submit" value="Controleren">
                            </form>
                            <div id="loading"><img alt="Loading..." style="height: 50px; width: 50px;"
                                                   src="images/load.gif"></div>
                            <div id="results">
                            </div>
                        </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Domeinnamen</h2>
                        <div class="domeinnaam panel-body">
                            <form method="post" action="aanvraag.php">
                                <h4><strong>Domeinnamen:</strong><a style="color:red">*</a></h4>
                                <br>
                                <div id="domeinen" class="domeinen">
                                </div>
                                <br>
                                <textarea id="domeinnaamarea" rows="5" readonly required
                                          name="domeinnaamarea"
                                          style="display:none;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Hosting <span style="color:red;">*</span></h2>
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
                                            <input type="radio" name="hosting" value="geen-hosting">
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
                                                <input type="radio" name="hosting" value="pakket1">
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
                                                <input type="radio" name="hosting" value="pakket2">
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
                                                <input type="radio" name="hosting" value="pakket3">
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
                                                <input type="radio" name="hosting" value="magento">
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <p>Heb je hulp nodig bij het kiezen van hostingpakket? Wij helpen jou graag! <br>Neem
                                voor vragen contact met ons op.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Email <span style="color:red;">*</span></h2>
                        <div class="panel-body">
                            <strong>Veel van onze klanten maken gebruik van Exchange Online.<br>
                                <a href="https://www.nubix.nl/domein.php/exchange_online">Klik hier</a> voor uw
                                voordelen van het gebruik van
                                <a href="https://www.nubix.nl/domein.php/exchange_online">Exchange Online</a>.
                            </strong>
                            <br>
                            <br>

                            <div class="col-lg-6 col-md-6  col-sm-6 col-xs-6">
                                <div class="box-part text-center">
                                    <div class="title">
                                        <h4>Exchange online<br>(per mailbox)</h4>
                                    </div>
                                    <div class="text">
                                            <span>
                                                Mailbox: 50GB<br>
                                                Kosten per maand: €3,40<br>
                                                Set-up kosten<br><br>
                                                <input type="radio" name="mailing" value="exchange">
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Hosting mail
                                                        <div class="inactive col-lg-4 col-md-4  col-sm-4 col-xs-4">
                                                            <div class="box-part text-center">
                                                                <div class="title">
                                                                    <h4>Hosting mail</h4>
                                                                </div>
                                                                <div class="text">
                                                                        <span>
                                                                            <br>
                                                                            Mailbox (maximaal): 600MB<br>
                                                                            Set-up kosten<br>
                                                                            Geen extra kosten<br><br>
                                                                            <input type="radio" name="mailing" value="hostingmail" disabled>
                                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                            -->
                            <div class="col-lg-6 col-md-6  col-sm-6 col-xs-6">
                                <div class="box-part text-center">
                                    <div class="title">
                                        <h4>Geen mail</h4>
                                    </div>
                                    <div class="text">
                                            <span>
                                                <br>
                                                Geen mailbox<br>
                                                Geen set-up kosten<br>
                                                Geen extra kosten<br><br>
                                                <input type="radio" name="mailing" value="geenmail">
                                            </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Gegevens</h2>
                        <div class="panel-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Voornaam"><i class="fas fa-user"></i> Voornaam<span
                                                style="color:red;">*</span></label>
                                    <input type="text" class="form-control" id="Voornaam" name="Voornaam"
                                           placeholder="Voornaam" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Achternaam"><i class="fas fa-user"></i> Achternaam<span
                                                style="color:red;">*</span></label>
                                    <input type="text" class="form-control" id="Achternaam" name="Achternaam"
                                           placeholder="Achternaam" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Adres"><i class="fas fa-map-marker-alt"></i> Adres<span
                                                style="color:red;">*</span></label>
                                    <input type="text" class="form-control" id="Adres" name="Adres" placeholder="Adres"
                                           required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Postcode"><i class="fas fa-map-pin"></i></i> Postcode<span
                                                style="color:red;">*</span></label>
                                    <input type="text" class="form-control" id="Postcode" name="Postcode"
                                           placeholder="Postcode" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Woonplaats"><i class="fas fa-map-marker-alt"></i> Woonplaats<span
                                                style="color:red;">*</span></label>
                                    <input type="text" class="form-control" id="Woonplaats" name="Woonplaats"
                                           placeholder="Woonplaats" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Email"><i class="fas fa-envelope"></i> Email adres<span
                                                style="color:red;">*</span></label>
                                    <input type="email" class="form-control" id="Email" placeholder="Email adres"
                                           name="Email" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Telefoon"><i class="fas fa-phone"></i> Telefoon<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" id="Telefoon" placeholder="Telefoon"
                                           name="Telefoon" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Mobiel"><i class="fas fa-mobile"></i> Mobiel</label>
                                    <input type="text" class="form-control" id="Mobiel" placeholder="Mobiel"
                                           name="Mobiel">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Bedrijfsnaam"><i class="fas fa-building"></i> Bedrijfsnaam</label>
                                    <input type="text" class="form-control" id="Bedrijfsnaam" name="Bedrijfsnaam"
                                           placeholder="Bedrijfsnaam">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="KvK"><i class="fas fa-file-invoice-dollar"></i> KvK nummer</label>
                                    <input type="text" class="form-control" id="KvK" placeholder="KvK nummer" name="KvK"
                                           maxlength="8">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Opmerking / Voorwaarden</h2>
                        <div class="panel-body">
                            <strong><i class="fas fa-comment"></i> Opmerking:</strong>
                            <br>
                            <div class="Opmerking">
                                <textarea id="Opmerking" rows="5"
                                          name="Opmerking" placeholder="Opmerking" maxlength="255"
                                          style="width: 100%; resize:none;"></textarea>
                            </div>
                            <br>
                            <a target="_blank" href="https://www.nubix.nl/algemenevoorwaardennubix.pdf">Klik hier om de
                                Algemene
                                Voorwaarden te lezen.</a><br>
                            <input type="checkbox" id="akkoord" value="akkoord" name="akkoord" required>Ik ga akkoord
                            met de Algemene Voorwaarden
                            van Nubix BV.
                            <span style="color:red;">*</span>
                            <br>
                            <br>
                            <span style="color:red;">* Vereiste velden</span>
                            <br>
                            <button style="width: 100%;" class=" btn btn-primary" type="submit" id="submit"
                                    name="submit">Verstuur
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

</body>
</html>
