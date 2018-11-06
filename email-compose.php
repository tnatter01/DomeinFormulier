<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Nubix - Domeinaanvraag beantwoorden</title>
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
    <div class="content-page">

        <!-- Start content -->

        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">

                        <div class="page-title-box">

                            <h4 class="page-title float-left">Beantwoorden</h4>

                            <div class="clearfix"></div>

                        </div>

                    </div>

                </div>

                <br>
                <br>
                <?php
                $email = null;
                $domein = null;
                $aanvraag_id = null;
                if (isset($_GET["email"])) {
                    $email = $_GET["email"];
                }
                if (isset($_GET["domein"])) {
                    $domein = $_GET["domein"];
                }
                if (isset($_GET["id"])) {
                    $aanvraag_id = $_GET["id"];
                }
                ?>
                <form action="sendmail.php" method="post">
                    <input type="hidden" required id="Id" placeholder="00" name="Id"
                           value="<?php echo $aanvraag_id; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email adres</label>
                        <input type="email" class="form-control" id="Email" placeholder="Email adres"
                               name="Email" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Onderwerp</label>
                        <input type="text" class="form-control" id="Onderwerp" placeholder="Onderwerp"
                               name="Onderwerp" value="Domeinaanvraag <?php echo $domein; ?>" required>
                    </div>
                    <textarea name="summernote" id="summernote" class="summernote">
                    <div>
                    Beste klant, <br><br>

                    Hartelijk dank voor uw aanvraag van nubix.eu.<br>
                    Wij gaan het zo spoedig mogelijk in gang zetten.<br><br>

                    Mocht u nog vragen hebben, neem dan contact op met onze supportafdeling:<br>
                    telefoonnummer 085 77 399 33 of via email support@nubix.nl<br><br>

                    Met vriendelijke groet,<br>
                    <b>Support Nubix B.V.</b><br>
                    <span style="color: grey">ICT | VoIP | WEB | CRM<br><br><br>


                Twijnerstraat 22<br>
                7481 KL Haaksbergen<br>
                T	+31 85 77 399 33<br>
                E	support@nubix.nl<br>
                I	www.nubix.nl<br>
                KvK	52297764 Enschede<br>
                IBAN   NL76RABO0111115582<br>
                </span>
                        </div>
                </textarea>
                    <div class="form-group">
                        <input type="checkbox" class="checkbox" checked id="Status"
                               name="Status">
                        <label for="checkbox1">
                            Verander status naar: <span style="font-weight: bolder">Beantwoord</span>
                        </label>
                    </div>
                    <input type="submit" id="submit" class="submit" value="Verzenden">
                </form>
            </div>
        </div> <!-- content -->

        <footer class="footer text-right">

            2017 © Adminox. - Coderthemes.com

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


<script>


    jQuery(document).ready(function () {

        $('.summernote').summernote({

            height: 350,                 // set editor height

            minHeight: 420,             // set minimum height of editor

            maxHeight: null,             // set maximum height of editor

            focus: false                 // set focus to editable area after initializing summernote

        });

    });

</script>


</body>

</html>