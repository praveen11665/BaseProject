<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title><?php echo (isset($title))? $title : $this->dbvars->app_name.' - '.$this->dbvars->meta_title;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="ERP" name="description" />
        <meta content="zoot" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>global/assets/images/favicon.png">
                <script src="<?php echo base_url(); ?>global/assets/js/jquery.min.js"></script>


        <!-- App css -->
        <link href="<?php echo base_url(); ?>global/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>global/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>global/assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>global/assets/css/zoot_logo.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>global/assets/js/modernizr.min.js"></script>

    </head>

    <body>
        <div class="accountbg" style="background: linear-gradient(90deg,#122f83,#2e54c5)">
            <h1 style="color: #fff; font-size:60px; padding-top: 100px; font-weight: bold; padding-left: 30px; font-size: 75px;
    letter-spacing: -2px; line-height: 1.12; ">Project Name</h1>
            <h4 style="color: #fff; font-size:40px; font-weight: bold; padding-left: 30px;letter-spacing: -2px;line-height: 1.12; "><!--Quality Management System</h4>
            <p style="color: #fff; padding: 30px 30px; font-size: 20px; width: 60%;">Developing cloud enabled document versioning and management solution to keep policy documents securely online.

                <br/ ><br/ >- Product from India by Indian Company
            </p>-->

        </div>
        <?php echo (isset($content)?$content:''); ?>
        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>global/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>global/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>global/assets/js/jquery.app.js"></script>

    </body>
</html>