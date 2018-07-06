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
	<title>Antre Bengkel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style-antre.css">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Chela+One|Goudy+Bookletter+1911|Righteous|Sacramento|Viga" rel="stylesheet">

    <!-- font-family: 'Righteous', cursive;
font-family: 'Chela One', cursive;
font-family: 'Sacramento', cursive;
font-family: 'Alegreya Sans SC', sans-serif;
font-family: 'Goudy Bookletter 1911', serif;
font-family: 'Viga', sans-serif; -->

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/plugins/device-mockups/device-mockups.css">
    <link rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">

</head>
<body>
	 <nav class="navbar navbar-expand-lg navbar-light fixed-top nav-pad-20" id="mainNav">
        <div class="container">
            <a href="<?php echo base_url()?>" class="navbar-brand">
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
                          <a class="dropdown-item" href="<?php echo base_url()?>bengkel">Dokter</a>
                          <a class="dropdown-item" href="<?php echo base_url()?>bengkel">Restoran</a>
                          <a class="dropdown-item" href="<?php echo base_url()?>bengkel">Pemda</a>
                        </div>
                    </li>       
                </ul>

                <?php
                    if($this->session->userdata('id_customer')=='')
                    {?>
                        <a href="<?php echo base_url();?>masuk" class="btn-style-login btn-outline btn-white">Masuk</a>
                    <?php }
                    else{?>
                        <a href="<?php echo base_url();?>keluar" class="btn-style-login btn-outline btn-white">Keluar</a>
                     <?php } ?>
                
            </div>
        </div>
    </nav>

    <!-- kategori section -->
    <section id="antre">
        <div class="container h-100">
           <div class="row row-antre">
                <div class="container" style="margin-top: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="custom-search-input">
                                <div class="input-group col-md-12">
                                    <input type="text" class="form-control input-lg" style="border-top-right-radius: 0px;border-bottom-right-radius: 0px;border-bottom-left-radius: 10px;border-top-left-radius: 10px; padding-left: 30px;" placeholder="Cari Bengkel" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-info btn-lg" type="button" style="background-color: #FFE210;border-color: #FFE210; border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 0px;border-top-left-radius: 0px;">
                                            <img src="<?php echo base_url('assets/icons/search.png');?>"  height="30" alt="">
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>
    <!-- end kategori section -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p style="font-size: 16px;"> Available on</p>
                    <hr style="margin-top: 0px;">
                    <div style="margin-left:auto;margin-right:auto;display:block;margin-bottom:0%;">
                        <img src="<?php echo base_url()?>assets/images/googleplay.png" height="100">
                    </div>
                    <hr style="margin-top: 0px;">
                </div>
                <div class="col-md-8">
                    <h5 class="text-right">
                        <img src="<?php echo base_url('assets/images/logoayo.png');?>"  height="70" class="d-inline-block align-center" alt="">
                    </h5>
                    <p class="text-right" style="color:  #818080"><b>AyoAntre</b> adalah sebuah aplikasi yang membantu pengguna dalam menghemat waktu dalam mengantre sebuah layanan, cukup melalui website atau smartphone tanpa harus berdiri menunggu giliran, <b>AyoAntre</b> juga memberikan layanan pada backend process yg menjamin best paractise dan efisiensi proses terbaik</p>
                    <div class="text-right" style="margin-right: 20px;">
                        <img src="<?php echo base_url()?>assets/icons/location.png" height="30"></i> Bukit, Jimbaran. Bali  <img src="<?php echo base_url()?>assets/icons/phone.png" height="30"> +6289688604302
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <br>
                    <div class="icons" style="margin-left:auto;margin-right:auto;display:block;margin-bottom:0%;">
                        <a href="#">
                            <i class="icon-social-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="icon-social-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="icon-social-google"></i>
                        </a>
                    </div>
                    <p class="m-0">&copy; ayoantre 2018. All Rights Reserved.</p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">Privacy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/main.js"></script>


</body>
</html>