<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8"/>

    <title>Nubix - Domeinaanvraag bewerken</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>

    <meta content="Coderthemes" name="author"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>


    <!-- App favicon -->

    <link rel="shortcut icon" href="assets/images/favicon.ico">


    <!-- Summernote css -->

    <link href="plugins/summernote/summernote.css" rel="stylesheet"/>


    <!-- App css -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>

    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css"/>

    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>


    <script src="assets/js/modernizr.min.js"></script>


</head>


<body>
<div id="wrapper">
<!--    Top bar-->
<?php
include "topbar.php";
?>
<!--Links menu-->
<?php
include "LinksMenu.php";
?>
<!--Content-->

<!-- ============================================================== -->

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Aanvraag bewerken</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <?php

            $aanvraag_id = null;

            if (isset($_GET["id"])) {
                $aanvraag_id = $_GET["id"];
            }

            include("config.php");
            $sql = "SELECT * FROM aanvragen WHERE aanvraag_id=$aanvraag_id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result)
            ?>

            <div class="row">

                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <form class="form-horizontal" action="bewerken.php" method="post" role="form">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">ID:</label>
                            <div class="col-lg-8">
                                <input name="id" class="form-control" type="text" value="<?php echo $aanvraag_id; ?>"
                                       readonly required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Domeinnaam</label>
                            <div class="col-lg-8">
                                <input name="domein" class="form-control" type="text"
                                       value="<?php echo $row['domeinen']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Hosting pakket:</label>
                            <div class="col-lg-8">
                                <input name="hosting" class="form-control" type="text"
                                       value="<?php echo $row['hosting']; ?>"
                                       readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Mail pakket:</label>
                            <div class="col-lg-8">
                                <input name="mailing" class="form-control" type="text"
                                       value="<?php echo $row['maling']; ?>"
                                       readonly>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Voornaam:</label>
                            <div class="col-lg-8">
                                <input name="voornaam" class="form-control" type="text"
                                       value="<?php echo $row['voornaam']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Achternaam:</label>
                            <div class="col-lg-8">
                                <input name="achternaam" class="form-control" type="text"
                                       value="<?php echo $row['achternaam']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                                <input name="email" class="form-control" type="text"
                                       value="<?php echo $row['email']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Bedrijfsnaam:</label>
                            <div class="col-lg-8">
                                <input name="bedrijfsnaam" class="form-control" type="text"
                                       value="<?php echo $row['bedrijfsnaam']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Adres:</label>
                            <div class="col-lg-8">
                                <input name="adres" class="form-control" type="text"
                                       value="<?php echo $row['adres']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Postcode:</label>
                            <div class="col-lg-8">
                                <input name="postcode" class="form-control" type="text"
                                       value="<?php echo $row['postcode']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Woonplaats:</label>
                            <div class="col-lg-8">
                                <input name="woonplaats" class="form-control" type="text"
                                       value="<?php echo $row['woonplaats']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Kvk:</label>
                            <div class="col-lg-8">
                                <input name="kvk" class="form-control" type="text" value="<?php echo $row['kvk']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Telefoon:</label>
                            <div class="col-lg-8">
                                <input name="telefoon" class="form-control" type="text"
                                       value="<?php echo $row['telefoon']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Mobiel:</label>
                            <div class="col-lg-8">
                                <input name="mobiel" class="form-control" type="text"
                                       value="<?php echo $row['mobiel']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Opmerking:</label>
                            <div class="col-lg-8">
                                <input name="opmerking" class="form-control" type="text"
                                       value="<?php echo $row['opmerking']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Status:</label>
                            <div class="col-lg-8">
                                <input name="status" class="form-control" type="text"
                                       value="<?php echo $row['status']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-primary" value="Opslaan">
                                <span></span>
                                <input onclick="location.href = 'tickets.php'" type="reset" class="btn btn-default" value="Annuleren">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- content -->
    <footer class="footer text-right">
        2018 © Nubix
    </footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
</div>
<!-- END wrapper -->


<!-- jQuery  -->

<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/metisMenu.min.js"></script>

<script src="assets/js/waves.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>


<!--Summernote js-->

<script src="plugins/summernote/summernote.min.js"></script>


<!-- App js -->

<script src="assets/js/jquery.core.js"></script>

<script src="assets/js/jquery.app.js"></script>


</body>

</html>