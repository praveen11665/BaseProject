<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title>Project Name</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="ERP" name="description" />
        <meta content="zoot" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon --> 
        <link rel="shortcut icon" href="<?php echo base_url(); ?>global/assets/images/favicon.png">
        <script src="<?php echo base_url(); ?>global/assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/moment/moment.js"></script>

        <link href="<?php echo base_url(); ?>global/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>global/assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>global/assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- App css 
        <link href="<?php echo base_url(); ?>global/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>global/assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>global/assets/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>global/assets/css/zoot_logo.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>global/assets/js/modernizr.min.js"></script>
        <link href="<?php echo base_url(); ?>global/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>global/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>global/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        -->

        <!--Sweet Alert
        <link href="<?php echo base_url(); ?>global/assets/bower_components/sweetalert/sweetalert.css" rel="stylesheet">
        -->

        <script src="<?php echo base_url(); ?>global/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/bootstrap.min.js"></script>

    </head>

    <body>
        <?php echo (isset($content)?$content:''); ?>
        <!-- jQuery  -->
        <!--
        <script src="<?php echo base_url(); ?>global/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>global/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/button/dataTables.select.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/button/dataTables.buttons.min.js" type="text/javascript"></script>


        <script src="<?php echo base_url(); ?>global/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>   
        -->     
        <!-- Sweet alert -->
        <!--
        <script src="<?php echo base_url(); ?>global/assets/bower_components/sweetalert/sweetalert.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
        -->
        <!-- App js 
        <script src="<?php echo base_url(); ?>global/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/jquery.app.js"></script>
        -->
        <?php
        //require_once(APPPATH."views/base/common_js.php");
        ?>
    </body>
</html>