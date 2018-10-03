<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <!--<title><?php echo (isset($title))? $title : $this->dbvars->app_name.' - '.$this->dbvars->meta_title;?></title>-->
        <title>Project Name</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="ZOOT" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon --> 
        <link rel="shortcut icon" href="<?php echo base_url(); ?>global/assets/images/favicon.png">
        <script src="<?php echo base_url(); ?>global/assets/js/modernizr.min.js"></script>
        <!--<link href="<?php echo base_url(); ?>global/assets/bower_components/bootstrap.css" rel="stylesheet">-->
        <link href="<?php echo base_url(); ?>global/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>global/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>global/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url(); ?>global/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>global/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>global/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>global/assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>global/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!--Sweet Alert-->
        
        <link href="<?php echo base_url(); ?>global/assets/bower_components/sweetalert/sweetalert.css" rel="stylesheet">
         <!-- App css -->
        <link href="<?php echo base_url(); ?>global/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>global/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>global/assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>global/assets/css/zoot_logo.css" rel="stylesheet" type="text/css" />
        <!--
        <link href="<?php echo base_url(); ?>global/assets/icon_fonts_assets/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>global/assets/icon_fonts_assets/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
        -->
        <link href="<?php echo base_url(); ?>global/assets/css/custom.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>global/assets/js/jquery.min.js"></script>
        <!--Chart-->
        <script src="<?php echo base_url(); ?>global/assets/bower_components/chart.js/dist/Chart.bundle.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/bower_components/chart.js/dist/utils.js"></script>
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!-- <a href="index.html" class="logo">
                            <span class="logo-small"><i class="mdi mdi-radar"></i></span>
                            <span class="logo-large"><i class="mdi mdi-radar"></i> ZOOT</span>
                        </a> -->
                        <!-- Image Logo -->
                        <!--<a href="<?php echo base_url(); ?>" class="logo">
                            <span class="zcircle one-edge-shadow "></span><span class="ocircle one-edge-shadow "></span><span class="oocircle one-edge-shadow "></span><span class="tcircle one-edge-shadow "></span>
                                    <a href="<?php echo base_url(); ?>" class="manufacturing"><?php echo $this->dbvars->app_name;?></a> -->
                                    <!--<sup class="beta">Beta</sup>-->
                        <!--</a>-->
                         <a href="<?php echo base_url(); ?>" class="manufacturing"><img src="<?php echo base_url('global/assets/images/logo.png'); ?>" height="60" width="100%"></a>


                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            <!--
                            <li class="dropdown notification-list hide-phone">
                                <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-earth"></i> English  <i class="mdi mdi-chevron-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Tamil
                                    </a>

                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Hindi
                                    </a>
                                </div>
                            </li>
                            -->
                            
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?php echo base_url(); ?>global/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name"><?php echo $this->auth_profile_data['first_name'];
                                                        echo isset($this->auth_profile_data['last_name'])?' '.$this->auth_profile_data['last_name']:''; ?> <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">
                                            Welcome <?php echo $this->auth_profile_data['first_name'];
                                            echo isset($this->auth_profile_data['last_name'])?' '.$this->auth_profile_data['last_name']:''; ?>!
                                        </h6>
                                    </div>

                                    <a href="<?php echo base_url();?>modules/users/myProfile" class="dropdown-item notify-item">

                                        <i class="fi-head"></i> <span>My Profile</span>
                                    </a>

                                    <!-- item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-cog"></i> <span>Settings</span>
                                    </a>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-help"></i> <span>Support</span>
                                    </a>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-lock"></i> <span>Lock Screen</span>
                                    </a>
                                    -->

                                    <!-- item-->
                                    <a href="<?php echo base_url(); ?>logout" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <?php include('menu.php'); ?>
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Zoot</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                 end page title end breadcrumb -->

                <?php echo (isset($content)?$content:''); ?>
               

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <?php echo date('Y'); ?> &copy; Project Name. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>global/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/jquery.slimscroll.js"></script>

        <!-- Sweet alert -->
        <script src="<?php echo base_url(); ?>global/assets/bower_components/sweetalert/sweetalert.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>

        <!-- Flot chart -->
        <script src="<?php echo base_url(); ?>global/assets/plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/flot-chart/curvedLines.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/flot-chart/jquery.flot.axislabels.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.js" type="text/javascript"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>global/assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init 
        <script src="<?php echo base_url(); ?>global/assets/pages/jquery.dashboard.init.js"></script>-->

        <!-- App js 
        <script src="<?php echo base_url(); ?>global/assets/js/jquery.core.js"></script>-->
        <script src="<?php echo base_url(); ?>global/assets/js/jquery.app.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>global/assets/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>

        <script src="<?php echo base_url(); ?>global/assets/plugins/moment/moment.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

        <!-- Init js -->
        <script src="<?php echo base_url(); ?>global/assets/pages/jquery.form-pickers.init.js"></script>
         <!-- Init Js file -->
        <script type="text/javascript" src="<?php echo base_url(); ?>global/assets/pages/jquery.form-advanced.init.js"></script>

        <!-- Fontawesome-->
        <script href="<?php echo base_url(); ?>global/assets/svg-with-js/js/fontawesome-all.min.js" type="text/javascript"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

        <!--Button-->
        <script src="<?php echo base_url(); ?>global/assets/js/button/dataTables.select.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/button/dataTables.buttons.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/button/jszip.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/button/pdfmake.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/button/vfs_fonts.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/button/buttons.html5.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/button/buttons.print.min.js" type="text/javascript"></script>


    <?php
    require_once(APPPATH."views/base/common_js.php");
    ?>
    </body>
</html>