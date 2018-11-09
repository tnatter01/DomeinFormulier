<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Nubix - Domeinnaam aanvragen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <script src="assets/js/modernizr.min.js"></script>
</head>
<body>
<!-- Begin page -->
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
                            <h4 class="page-title float-left">Domeinnaam aanvragen</h4>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Aanvragen</a></li>
                                <li class="breadcrumb-item active">Aanvragen</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <!-- Basic Form Wizard -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Domeinnaam aanvragen</h4>
                            <p class="text-muted m-b-30 font-13">
                                Gebruik dit formulier om een domeinnaam aan te vragen.
                            </p>
                            <form id="wizard-callbacks">

                                <fieldset title="1">
                                    <legend>Check</legend>
                                    <div class="row m-t-20">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="firstname2">Controleer eerst of de door u aan te vragen
                                                    domeinnaam beschikbaar is.<br>Voor uw domeinnaam in <u>zonder</u>
                                                    extensie.</label>
                                                <input type="text" class="form-control" id="firstname2" placeholder="">
                                                <div id="results">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset title="2">
                                    <legend>Hosting</legend>
                                    <div class="row m-t-20">
                                        <div class="col-lg-1 col-lg-offset-1 col-md-1 col-md-offset-1 col-sm-1 col-sm-offset-1 col-xs-1 col-xs-offset-1">
                                        </div>
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

                                </fieldset>

                                <fieldset title="3">
                                    <legend>Email</legend>
                                    <div class="row m-t-20">
                                        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4">
                                            <div class="box-part text-center">
                                                <div class="title">
                                                    <h4>Exchange Online<br>
                                                    (Per mailbox)</h4>
                                                </div>
                                                <div class="text">
                                        <span>
                                            Mailbox: 50GB<br>
                                            Kosten per maand: €3,40<br>
                                            Set-up kosten<br><br>
                                            <input type="radio" name="hosting" value="geen-hosting">
                                        </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4">
                                            <div class="box-part text-center">
                                                <div class="title">
                                                    <h4>Hosting mail<br><br></h4>
                                                </div>
                                                <div class="text">
                                        <span>
                                            Mailbox (maximaal): 600MB<br>
                                            Set-up kosten<br>
                                            Geen extra kosten<br><br>
                                            <input type="radio" name="hosting" value="hosting-mail">
                                        </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4">
                                            <div class="box-part text-center">
                                                <div class="title">
                                                    <h4>Geen mail<br><br></h4>
                                                </div>
                                                <div class="text">
                                        <span>
                                            Geen mailbox<br>
                                            Geen set-up kosten<br>
                                            Geen extra kosten<br><br>
                                            <input type="radio" name="hosting" value="geen-hosting">
                                        </span>
                                                </div>
                                            </div>
                                        </div>

                                        </div>

                                </fieldset>

                                <fieldset title="4">

                                    <legend>Social Profiles</legend>


                                    <div class="row m-t-20">

                                        <div class="col-sm-6">


                                            <div class="form-group">

                                                <label>Facebook</label>

                                                <div class="input-group">

                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-facebook"></i></span>

                                                    <input type="text" class="form-control"
                                                           placeholder="Facebook url">

                                                </div>

                                            </div>


                                            <div class="form-group">

                                                <label>Linkdin</label>

                                                <div class="input-group">

                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-linkedin"></i></span>

                                                    <input type="text" class="form-control"
                                                           placeholder="Linkdin url">

                                                </div>

                                            </div>


                                            <div class="form-group">

                                                <label>Instagram</label>

                                                <div class="input-group">

                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-instagram"></i></span>

                                                    <input type="text" class="form-control"
                                                           placeholder="Instagram url">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-sm-6">

                                            <div class="form-group">

                                                <label>Twitter</label>

                                                <div class="input-group">

                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-twitter"></i></span>

                                                    <input type="text" class="form-control"
                                                           placeholder="Twitter url">

                                                </div>

                                            </div>


                                            <div class="form-group">

                                                <label>Skype</label>

                                                <div class="input-group">

                                                        <span class="input-group-addon"><i
                                                                    class="mdi mdi-skype"></i></span>

                                                    <input type="text" class="form-control" placeholder="Skype url">

                                                </div>

                                            </div>


                                            <div class="form-group">

                                                <label>Pinterest</label>

                                                <div class="input-group">

                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-pinterest"></i></span>

                                                    <input type="text" class="form-control"
                                                           placeholder="Pinterest url">

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </fieldset>

                                <fieldset title="5">

                                    <legend>Social Profiles</legend>


                                    <div class="row m-t-20">

                                        <div class="col-sm-6">


                                            <div class="form-group">

                                                <label>Facebook</label>

                                                <div class="input-group">

                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-facebook"></i></span>

                                                    <input type="text" class="form-control"
                                                           placeholder="Facebook url">

                                                </div>

                                            </div>


                                            <div class="form-group">

                                                <label>Linkdin</label>

                                                <div class="input-group">

                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-linkedin"></i></span>

                                                    <input type="text" class="form-control"
                                                           placeholder="Linkdin url">

                                                </div>

                                            </div>


                                            <div class="form-group">

                                                <label>Instagram</label>

                                                <div class="input-group">

                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-instagram"></i></span>

                                                    <input type="text" class="form-control"
                                                           placeholder="Instagram url">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-sm-6">

                                            <div class="form-group">

                                                <label>Twitter</label>

                                                <div class="input-group">

                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-twitter"></i></span>

                                                    <input type="text" class="form-control"
                                                           placeholder="Twitter url">

                                                </div>

                                            </div>


                                            <div class="form-group">

                                                <label>Skype</label>

                                                <div class="input-group">

                                                        <span class="input-group-addon"><i
                                                                    class="mdi mdi-skype"></i></span>

                                                    <input type="text" class="form-control" placeholder="Skype url">

                                                </div>

                                            </div>


                                            <div class="form-group">

                                                <label>Pinterest</label>

                                                <div class="input-group">

                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-pinterest"></i></span>

                                                    <input type="text" class="form-control"
                                                           placeholder="Pinterest url">

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </fieldset>


                                <button type="submit" class="btn btn-primary stepy-finish">Submit</button>

                            </form>


                        </div>

                    </div>

                </div>

                <!-- End row -->


            </div> <!-- container -->


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


<!--Form Wizard-->

<script src="plugins/jquery.stepy/jquery.stepy.min.js" type="text/javascript"></script>

<!--wizard initialization-->

<script src="assets/pages/jquery.wizard-init.js" type="text/javascript"></script>


<!-- App js -->

<script src="assets/js/jquery.core.js"></script>

<script src="assets/js/jquery.app.js"></script>


</body>

</html>