<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- css -->
	<title>Masuk</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/plugins/device-mockups/device-mockups.css">
    <link rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">

</head>
<body>
	 <nav class="navbar navbar-expand-lg navbar-light fixed-top nav-pad-20" id="mainNav">
        <div class="container">
            <a class="navbar-brand">
                <img src="<?php echo base_url('assets/images/logo_ayoantre.png');?>"  height="30" class="d-inline-block align-center" alt="">
                
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>">HOME</a>
                    </li>   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Layanan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?php echo base_url()?>bengkel">Bengkel</a>
                         <!--  <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </li>     	
                </ul>
                <a href="<?php echo base_url();?>daftar" class="btn-style-login btn-outline btn-white">DAFTAR</a>
            </div>
        </div>
    </nav>

    <section id="login">
        <div class="container-login100" style="min-height: 10vh;margin-top: 50px;">
        <div class="wrap-login100">
            <img src="<?php echo base_url('assets/images/logo_single.png');?>" height="70" style="display: block; bottom:0;margin-left: auto;margin-right:auto;">
                <span class="login100-form-title p-b-37">
                    MASUK
                </span>

                <!-- <?php
                    if (isset($errormsg)) {
                        echo $errormsg;
                }
                ?> -->
             <form class="form-horizontal" action="<?=base_url();?>masuk" method="post" enctype="multipart/form-data" id="masuk">
                    <div class="form-group">
                        <div class="col-sm-12" style="padding: 0px;">
                            <input style="border-radius: 20px;" class="form-control" type="text" name="username" placeholder="Username" value="<?=set_value('username')?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12" style="padding: 0px;">
                            <input style="border-radius: 20px;" class="form-control" type="password" name="pasword" placeholder="Password" value="<?=set_value('pasword')?>">
                            <input name="login_action" type="hidden" id="login_action" value="true" />
                        </div>
                    </div>
                    <div class="form group">
                            <div class="col-sm-12" style="padding:0;">
                                <input type="submit" name="submit" class="btn-style-login btn-outline btn-white" style="width:100%;" value="Masuk"></input>
                            </div>
                    </div>
                    <div class="text-center" style="margin-top: 20px;">
                        <p>Belum memiliki akun? <a href="<?php echo base_url();?>daftar" class="txt2 hov1"><b>DAFTAR SEKARANG!
                        </b></a></p>
                    </div>
            </form>        
        </div>
    </div>
    </section>

    <!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/js/login.js"></script>

    <!-- Plugin JS -->

</body>
</html>