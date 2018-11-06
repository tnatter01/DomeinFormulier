<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8"/>

    <title>Adminox - Responsive Web App Kit</title>

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


<!-- Begin page -->

<div id="wrapper">


    <!-- Top Bar Start -->

    <div class="topbar">


        <!-- LOGO -->

        <div class="topbar-left">

            <a href="index.html" class="logo">

                                <span>

                                    <img src="assets/images/logo.png" alt="" height="25">

                                </span>

                <i>

                    <img src="assets/images/logo_sm.png" alt="" height="28">

                </i>

            </a>

        </div>


        <nav class="navbar-custom">


            <ul class="list-inline float-right mb-0">

                <li class="list-inline-item dropdown notification-list">

                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                       href="#" role="button"

                       aria-haspopup="false" aria-expanded="false">

                        <i class="dripicons-bell noti-icon"></i>

                        <span class="badge badge-pink noti-icon-badge">4</span>

                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">

                        <!-- item-->

                        <div class="dropdown-item noti-title">

                            <h5><span class="badge badge-danger float-right">5</span>Notification</h5>

                        </div>


                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                            <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>

                            <p class="notify-details">Robert S. Taylor commented on Admin
                                <small class="text-muted">1 min ago</small>
                            </p>

                        </a>


                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                            <div class="notify-icon bg-info"><i class="icon-user"></i></div>

                            <p class="notify-details">New user registered.
                                <small class="text-muted">1 min ago</small>
                            </p>

                        </a>


                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                            <div class="notify-icon bg-danger"><i class="icon-like"></i></div>

                            <p class="notify-details">Carlos Crouch liked <b>Admin</b>
                                <small class="text-muted">1 min ago</small>
                            </p>

                        </a>


                        <!-- All-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">

                            View All

                        </a>


                    </div>

                </li>


                <li class="list-inline-item dropdown notification-list">

                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                       href="#" role="button"

                       aria-haspopup="false" aria-expanded="false">

                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">

                    </a>

                    <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">

                        <!-- item-->

                        <div class="dropdown-item noti-title">

                            <h5 class="text-overflow">
                                <small>Welcome ! John</small>
                            </h5>

                        </div>


                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                            <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>

                        </a>


                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                            <i class="zmdi zmdi-settings"></i> <span>Settings</span>

                        </a>


                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                            <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>

                        </a>


                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                            <i class="zmdi zmdi-power"></i> <span>Logout</span>

                        </a>


                    </div>

                </li>


            </ul>


            <ul class="list-inline menu-left mb-0">

                <li class="float-left">

                    <button class="button-menu-mobile open-left waves-light waves-effect">

                        <i class="dripicons-menu"></i>

                    </button>

                </li>

                <li class="hide-phone app-search">

                    <form role="search" class="">

                        <input type="text" placeholder="Search..." class="form-control">

                        <a href=""><i class="fa fa-search"></i></a>

                    </form>

                </li>

            </ul>


        </nav>


    </div>

    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    <div class="left side-menu">

        <div class="slimscroll-menu" id="remove-scroll">


            <!--- Sidemenu -->

            <div id="sidebar-menu">

                <!-- Left Menu Start -->

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>

                        <a href="javascript: void(0);">

                            <i class="fi-air-play"></i><span class="badge badge-success pull-right">2</span> <span> Dashboard </span>

                        </a>

                        <ul class="nav-second-level" aria-expanded=false>

                            <li><a href="index.html">Dashboard 1</a></li>

                            <li><a href="dashboard-2.html">Dashboard 2</a></li>

                        </ul>

                    </li>

                    <li>

                        <a href="javascript: void(0);"><i class="fi-target"></i> <span> Admin UI </span> <span
                                    class="menu-arrow"></span></a>

                        <ul class="nav-second-level" aria-expanded="false">

                            <li><a href="admin-grid.html">Grid</a></li>

                            <li><a href="admin-sweet-alert.html">Sweet Alert</a></li>

                            <li><a href="admin-tiles.html">Tiles Box</a></li>

                            <li><a href="admin-nestable.html">Nestable List</a></li>

                            <li><a href="admin-rangeslider.html">Range Slider</a></li>

                            <li><a href="admin-ratings.html">Ratings</a></li>

                            <li><a href="admin-filemanager.html">File Manager</a></li>

                            <li><a href="admin-lightbox.html">Lightbox</a></li>

                            <li><a href="admin-scrollbar.html">Scroll bar</a></li>

                            <li><a href="admin-slider.html">Slider</a></li>

                            <li><a href="admin-treeview.html">Treeview</a></li>

                        </ul>

                    </li>


                    <li>

                        <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> UI Kit </span> <span
                                    class="menu-arrow"></span></a>

                        <ul class="nav-second-level" aria-expanded="false">

                            <li><a href="ui-typography.html">Typography</a></li>

                            <li><a href="ui-panels.html">Panels</a></li>

                            <li><a href="ui-buttons.html">Buttons</a></li>

                            <li><a href="ui-modals.html">Modals</a></li>

                            <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>

                            <li><a href="ui-spinners.html">Spinners</a></li>

                            <li><a href="ui-ribbons.html">Ribbons</a></li>

                            <li><a href="ui-portlets.html">Portlets</a></li>

                            <li><a href="ui-tabs.html">Tabs</a></li>

                            <li><a href="ui-progressbars.html">Progress Bars</a></li>

                            <li><a href="ui-notifications.html">Notification</a></li>

                            <li><a href="ui-carousel.html">Carousel</a>

                            <li><a href="ui-video.html">Video</a>

                            <li><a href="ui-tooltips-popovers.html">Tooltips & Popovers</a></li>

                            <li><a href="ui-images.html">Images</a></li>

                            <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>

                        </ul>

                    </li>


                    <li>

                        <a href="tickets.html"><i class="fi-help"></i><span
                                    class="badge badge-danger pull-right">New</span> <span> Tickets </span></a>

                    </li>


                    <li>

                        <a href="javascript: void(0);"><i class="fi-box"></i><span> Icons </span> <span
                                    class="menu-arrow"></span></a>

                        <ul class="nav-second-level" aria-expanded="false">

                            <li><a href="icons-colored.html">Colored Icons</a></li>

                            <li><a href="icons-materialdesign.html">Material Design</a></li>

                            <li><a href="icons-dripicons.html">Dripicons</a></li>

                            <li><a href="icons-fontawesome.html">Font awesome</a></li>

                            <li><a href="icons-feather.html">Feather Icons</a></li>

                            <li><a href="icons-simple-line.html">Simple line Icons</a></li>

                            <li><a href="icons-flags.html">Flag Icons</a></li>

                            <li><a href="icons-file.html">File Icons</a></li>

                            <li><a href="icons-pe7.html">PE7 Icons</a></li>

                            <li><a href="icons-typicons.html">Typicons</a></li>

                        </ul>

                    </li>


                    <li>

                        <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Graphs </span> <span
                                    class="menu-arrow"></span></a>

                        <ul class="nav-second-level" aria-expanded="false">

                            <li><a href="chart-flot.html">Flot Chart</a></li>

                            <li><a href="chart-morris.html">Morris Chart</a></li>

                            <li><a href="chart-google.html">Google Chart</a></li>

                            <li><a href="chart-echart.html">Echarts</a></li>

                            <li><a href="chart-chartist.html">Chartist Charts</a></li>

                            <li><a href="chart-chartjs.html">Chartjs Chart</a></li>

                            <li><a href="chart-c3.html">C3 Chart</a></li>

                            <li><a href="chart-justgage.html">Justgage Charts</a></li>

                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>

                            <li><a href="chart-knob.html">Jquery Knob</a></li>

                        </ul>

                    </li>


                    <li>

                        <a href="javascript: void(0);"><i class="fi-mail"></i><span> Email </span> <span
                                    class="menu-arrow"></span></a>

                        <ul class="nav-second-level" aria-expanded="false">

                            <li><a href="email-inbox.html">Inbox</a></li>

                            <li><a href="email-read.html">Read Email</a></li>

                            <li><a href="email-compose.html">Compose Email</a></li>

                        </ul>

                    </li>


                    <li>

                        <a href="taskboard.html"><i class="fi-paper"></i> <span> Task Board </span></a>

                    </li>


                    <li>

                        <a href="javascript: void(0);"><i class="fi-disc"></i><span
                                    class="badge badge-warning pull-right">12</span> <span> Forms </span></a>

                        <ul class="nav-second-level" aria-expanded="false">

                            <li><a href="form-elements.html">Form Elements</a></li>

                            <li><a href="form-advanced.html">Form Advanced</a></li>

                            <li><a href="form-layouts.html">Form Layouts</a></li>

                            <li><a href="form-validation.html">Form Validation</a></li>

                            <li><a href="form-pickers.html">Form Pickers</a></li>

                            <li><a href="form-wizard.html">Form Wizard</a></li>

                            <li><a href="form-mask.html">Form Masks</a></li>

                            <li><a href="form-summernote.html">Summernote</a></li>

                            <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>

                            <li><a href="form-typeahead.html">Typeahead</a></li>

                            <li><a href="form-x-editable.html">X Editable</a></li>

                            <li><a href="form-uploads.html">Multiple File Upload</a></li>

                        </ul>

                    </li>


                    <li>

                        <a href="javascript: void(0);"><i class="fi-layout"></i> <span> Tables </span> <span
                                    class="menu-arrow"></span></a>

                        <ul class="nav-second-level" aria-expanded="false">

                            <li><a href="tables-basic.html">Basic Tables</a></li>

                            <li><a href="tables-layouts.html">Tables Layouts</a></li>

                            <li><a href="tables-datatable.html">Data Tables</a></li>

                            <li><a href="tables-foo-tables.html">Foo Tables</a></li>

                            <li><a href="tables-responsive.html">Responsive Table</a></li>

                            <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>

                            <li><a href="tables-editable.html">Editable Tables</a></li>

                        </ul>

                    </li>


                    <li class="menu-title">More</li>


                    <li>

                        <a href="javascript: void(0);"><i class="fi-map"></i> <span> Maps </span> <span
                                    class="menu-arrow"></span></a>

                        <ul class="nav-second-level" aria-expanded="false">

                            <li><a href="maps-google.html">Google Maps</a></li>

                            <li><a href="maps-google-full.html">Full Google Map</a></li>

                            <li><a href="maps-vector.html">Vector Maps</a></li>

                            <li><a href="maps-mapael.html">Mapael Maps</a></li>

                        </ul>

                    </li>


                    <li><a href="calendar.html"><i class="fi-clock"></i> <span>Calendar</span> </a></li>


                    <li>

                        <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Pages </span> <span
                                    class="menu-arrow"></span></a>

                        <ul class="nav-second-level" aria-expanded="false">

                            <li><a href="page-starter.html">Starter Page</a></li>

                            <li><a href="page-login.html">Login</a></li>

                            <li><a href="page-register.html">Register</a></li>

                            <li><a href="page-logout.html">Logout</a></li>

                            <li><a href="page-recoverpw.html">Recover Password</a></li>

                            <li><a href="page-lock-screen.html">Lock Screen</a></li>

                            <li><a href="page-confirm-mail.html">Confirm Mail</a></li>

                            <li><a href="page-404.html">Error 404</a></li>

                            <li><a href="page-404-alt.html">Error 404-alt</a></li>

                            <li><a href="page-500.html">Error 500</a></li>

                        </ul>

                    </li>


                    <li class="has_sub">

                        <a href="javascript:void(0);"><i class="fi-marquee-plus"></i><span> Extra Pages </span> <span
                                    class="menu-arrow"></span></a>

                        <ul class="nav-second-level" aria-expanded="false">

                            <li><a href="extras-about.html">About Us</a></li>

                            <li><a href="extras-contact.html">Contact</a></li>

                            <li><a href="extras-companies.html">Companies</a></li>

                            <li><a href="extras-members.html">Members</a></li>

                            <li><a href="extras-members-2.html">Membars 2</a></li>

                            <li><a href="extras-timeline.html">Timeline</a></li>

                            <li><a href="extras-invoice.html">Invoice</a></li>

                            <li><a href="extras-maintenance.html">Maintenance</a></li>

                            <li><a href="extras-coming-soon.html">Coming Soon</a></li>

                            <li><a href="extras-faq.html">FAQ</a></li>

                            <li><a href="extras-pricing.html">Pricing</a></li>

                            <li><a href="extras-profile.html">Profile</a></li>

                            <li><a href="extras-email-template.html">Email Templates</a></li>

                            <li><a href="extras-search-result.html">Search Results</a></li>

                            <li><a href="extras-sitemap.html">Site Map</a></li>

                        </ul>

                    </li>


                    <li>

                        <a href="todo.html"><i class="fi-layers"></i> <span> Todo </span></a>

                    </li>


                </ul>


            </div>

            <!-- Sidebar -->

            <div class="clearfix"></div>


        </div>

        <!-- Sidebar -left -->


    </div>

    <!-- Left Sidebar End -->


    <!-- ============================================================== -->

    <!-- Start right Content here -->

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
                                    <input name="domein" class="form-control" type="text" value="<?php echo $row['domeinen']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Hosting pakket:</label>
                                <div class="col-lg-8">
                                    <input name="hosting" class="form-control" type="text" value="<?php echo $row['hosting']; ?>"
                                           readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Mail pakket:</label>
                                <div class="col-lg-8">
                                    <input name="mailing" class="form-control" type="text" value="<?php echo $row['maling']; ?>"
                                           readonly>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Voornaam:</label>
                                <div class="col-lg-8">
                                    <input name="voornaam" class="form-control" type="text" value="<?php echo $row['voornaam']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Achternaam:</label>
                                <div class="col-lg-8">
                                    <input name="achternaam" class="form-control" type="text" value="<?php echo $row['achternaam']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email:</label>
                                <div class="col-lg-8">
                                    <input name="email" class="form-control" type="text" value="<?php echo $row['email']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Bedrijfsnaam:</label>
                                <div class="col-lg-8">
                                    <input name="bedrijfsnaam" class="form-control" type="text" value="<?php echo $row['bedrijfsnaam']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Adres:</label>
                                <div class="col-lg-8">
                                    <input name="adres" class="form-control" type="text" value="<?php echo $row['adres']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Postcode:</label>
                                <div class="col-lg-8">
                                    <input name="postcode" class="form-control" type="text" value="<?php echo $row['postcode']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Woonplaats:</label>
                                <div class="col-lg-8">
                                    <input name="woonplaats" class="form-control" type="text" value="<?php echo $row['woonplaats']; ?>">
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
                                    <input name="telefoon" class="form-control" type="text" value="<?php echo $row['telefoon']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Mobiel:</label>
                                <div class="col-lg-8">
                                    <input name="mobiel" class="form-control" type="text" value="<?php echo $row['mobiel']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Opmerking:</label>
                                <div class="col-lg-8">
                                    <input name="opmerking" class="form-control" type="text" value="<?php echo $row['opmerking']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Status:</label>
                                <div class="col-lg-8">
                                    <input name="status" class="form-control" type="text" value="<?php echo $row['status']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-primary" value="Save Changes">
                                    <span></span>
                                    <input type="reset" class="btn btn-default" value="Cancel">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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


</body>

</html>