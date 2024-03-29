<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="<?php echo site_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="<?php echo site_url();?>assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<style>
.sufee-login{

    border-radius: 10px;
}

</style>

</head>
    <?php

    if (isset($this->session->userdata['logged_in'])) {

    redirect('dashboard');
    }
    ?>

<body class="bg-dark">
<!-- <?php
echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
?> -->
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content"style="border-radius:10px;">
                <div class="login-logo">
                    <a href="#">
                        <img class="align-content" src="<?php echo site_url();?>assets/images/ADHURI_YADE-LOGOFINAL1.png" alt="">
                    </a>
                </div>
                <div class="login-form">

                <div class="login-panel panel panel-default">
               
                 <?php if($this->session->flashdata('msg_error')) { ?>
                    <div class="alert alert-danger">
                         <?php echo $this->session->flashdata('msg_error'); ?>       
                    </div>
                <?php } ?>
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>

                
                    <form method="post" action="<?php echo site_url();?>login">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email"  class="form-control" placeholder="Email">
                            <span class="text-danger"> <?php echo form_error('email');?></span>
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <span class="text-danger"> <?php echo form_error('password');?></span>
                        </div>
                                
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                               
                               
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo site_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo site_url();?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo site_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    


</body>

</html>
