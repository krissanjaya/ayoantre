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
	<title>ayoantre</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Chela+One|Dosis|Goudy+Bookletter+1911|Righteous|Sacramento|Viga|Yeon+Sung" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/plugins/device-mockups/device-mockups.css">
    <link rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">

</head>
<body>
	 <nav class="navbar navbar-expand-lg navbar-light fixed-top nav-pad-20" id="mainNav">
        <div class="container">
            <a href="<?php echo base_url()?>" class="navbar-brand">
                <img src="<?php echo base_url('assets/images/logoayobawah.png');?>"  height="30" class="d-inline-block align-center" alt="">                
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#features">FITUR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#testimonial">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#client">Klien</a>
                    </li>    	
                </ul>

                <a style="margin-right: 5px; margin-left: 5px; background-color: #FFE210;color: #2F4764;" href="<?php echo base_url();?>kategori" class="btn-style-login btn-outline btn-white">Antre</a>

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