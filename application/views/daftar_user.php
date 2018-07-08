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
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css">
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
                <img src="<?php echo base_url('assets/images/logo_ayoantre.png');?>" height="30" class="d-inline-block align-center" alt="">
                
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
                <a href="<?php echo base_url();?>masuk" class="btn-style-login btn-outline btn-white">MASUK</a>
            </div>
        </div>
    </nav>

    <section id="login" style="">
    <div class="container">
        <div class="row" style="margin-top: 50px; margin-bottom: 10px;">
            <div class="col-md-4" style="margin-top: auto;margin-bottom: auto; display: block;">
                <div class="caption">
                    <h3 class="login100-form-title" style="text-align: left;">MEMILIKI USAHA?</h3>
                    <p><b>ayoantre</b> menawarkan layanan pada bidang bengkel, dokter, restoran dan pemda. <b>ayoantre</b> memberikan kemudahan dalam mengelola antrean. Mari coba sekarang dan rasakan perubahan di usaha anda!</p>
                    <div class="button-daftar">
                        <a href="<?php echo base_url();?>/#services" class="btn-style-login btn-outline btn-white" style="width:100%;">DAFTAR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container-login100" style="min-height: 10vh;">
                    <div class="wrap-login100" style="width: 700px;margin-top: 0px;">
                           <img src="<?php echo base_url('assets/images/logo_single.png');?>" height="70" style="display: block; bottom:0;margin-left: auto;margin-right:auto;">
                            <span class="login100-form-title p-b-37">
                                DAFTAR
                            </span>

                            <div class="panel-body">
                                    <?php
                                        if (isset($errormsg)) {
                                            echo $errormsg;
                                        }
                                    ?>
                                <form class="form-horizontal" action="<?=base_url();?>daftar" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-6" style="padding:0;">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input style="border-radius: 20px;" class="form-control" type="text" name="nama" placeholder="Nama" value="<?=set_value('nama')?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6" style="padding:0;">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input style="border-radius: 20px;" class="form-control" type="text" name="alamat" placeholder="Alamat" value="<?=set_value('alamat')?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6" style="padding:0;">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input style="border-radius: 20px;" class="form-control" type="number" name="hp" placeholder="No. HP" value="<?=set_value('hp')?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6" style="padding:0;">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input style="border-radius: 20px;" class="form-control" type="text" name="username" placeholder="Username" value="<?=set_value('username')?>" onblur="check_if_exists();">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6" style="padding:0;">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input style="border-radius: 20px;" class="form-control" type="number" name="ktp" placeholder="No. KTP" value="<?=set_value('ktp')?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6" style="padding:0;">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input style="border-radius: 20px;" class="form-control" type="password" name="pasword" placeholder="Password" value="<?=set_value('pasword')?>">
                                                    <input name="daftar_action" type="hidden" id="daftar_action" value="true" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form group">
                                        <div class="col-sm-12" style="padding:0;">
                                            <input type="submit" name="submit" class="btn-style-login btn-outline btn-white" style="width:100%;" value="Daftar"></input>
                                            <!-- <button type="reset" class="btn-style-login btn-outline btn-white">Ulangi</button> -->
                                        </div>
                                    </div>
                                    <div class="text-center" style="margin-top:20px;">
                                        <p>Telah memiliki akun? <a href="<?php echo base_url();?>masuk" class="txt2 hov1"><b>MASUK
                                        </b></a></p>
                                    </div>
                                </form>
                            </div>            
                    </div>
                </div>
            </div>
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

    <!-- <script src="<?php echo base_url();?>assets/js/login.js"></script> -->

    <!-- Plugin JS -->

</body>
</html>