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

    <!-- master section -->
    <section id="master">
        <div class="container h-100">
           <div class="row row-master" style="padding-top: 100px;">
                <div class="col-md-12 my-auto">
                    <div class="header-content mx-auto">
                        <img src="<?php echo base_url('assets/images/logoayobawah.png');?>"  height="50" class="d-inline-block align-center" alt="">
                        <p style=""><b style="color: #FFE210;">AyoAntre</b> adalah sebuah platform aplikasi untuk membangun interaksi antara pelanggan dan pemilik bisnis secara cepat dan mudah. Pelanggan dapat
                        melakukan booking antrean secara online,mendapatkan notfikasi antrean dan status layanan. <b style="color: #FFE210;">AyoAntre</b> menjamin Pemilik Bisnis dapat mengelola backend process dengan mengacu kepada  best paractise  terbaik</p>
                        <a href="#features" class="btn-style btn-outline btn-xl mb-5 btn-white js-scroll-trigger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="image-landing">
                <img src="<?php echo base_url('assets/images/landing1.png');?>" align="bottom" style="display: block; bottom:0%;margin-left: auto;margin-right:auto;width:80%;margin-top: 30px;left: 0;right: 0;" max-height="100%" max-width="100%">
            </div>
        </div>

    </section>
    <!-- end master section -->

    <section id="features">
        <div class="container">
        	<div class="row">
        		<img src="<?php echo base_url('assets/images/logo_single.png');?>" height="70">
        	</div>
        	<p style=""><b>AyoAntre</b> menawarkan fitur umum untuk <b>Personal</b> dan <b>Pemilik Usaha</b></p>
        	
            <div class="row" style="padding-right: 80px;padding-left: 80px;">
            			<div class="col-lg-2 feature-item" style="margin-left: auto;margin-right: auto;">
                                <img src="<?php echo base_url('assets/images/cari2.png');?>" height="120">
                                <h3 style="font-family: 'Viga', sans-serif;font-size: 20px; color: #444545;">Cari</h3>
                                <p style="padding-top: 0px;font-family: 'Yeon Sung', cursive;">Temukan layanan antrean dengan cepat dan mudah di area Anda</p>
                        </div>
                        <div class="col-lg-2 feature-item" style="margin-left: auto;margin-right: auto;">
                                <img src="<?php echo base_url('assets/images/daftar1.png');?>" height="120">
                                <h3 style="font-family: 'Viga', sans-serif;font-size: 20px; color: #444545;">Daftar</h3>
                                <p style="padding-top: 0px;font-family: 'Yeon Sung', cursive;">Ambil posisi Anda dalam Antrean secara online</p>
                        </div>
                        <div class="col-lg-2 feature-item" style="margin-left: auto;margin-right: auto;">
                                <img src="<?php echo base_url('assets/images/tunggu2.png');?>" height="120">
                                <h3 style="font-family: 'Viga', sans-serif;font-size: 20px; color: #444545;">Tunggu</h3>
                                <p style="padding-top: 0px;font-family: 'Yeon Sung', cursive;">Bersantai, tunggu antrian Anda</p>
                        </div>
                        <div class="col-lg-2 feature-item" style="margin-left: auto;margin-right: auto;">
                                <img src="<?php echo base_url('assets/images/masuk1.png');?>" height="120">
                                <h3 style="font-family: 'Viga', sans-serif;font-size: 20px; color: #444545;">Monitor</h3>
                                <p style="padding-top: 0px;font-family: 'Yeon Sung', cursive;">Notifikasi posisi antrean dan cek progres layanan Anda</p>
                        </div>
                        <div class="col-lg-2 feature-item" style="margin-left: auto;margin-right: auto;">
                                <img src="<?php echo base_url('assets/images/kontrol.png');?>" height="120">
                                <h3 style="font-family: 'Viga', sans-serif;font-size: 20px; color: #444545;">Kontrol</h3>
                                <p style="padding-top: 0px;font-family: 'Yeon Sung', cursive;">Kelola antrean dan Otomatisasi proses Bisnis Anda</p>
                        </div>
            </div>
        </div>
    </section>

    <section id="howuse">
        <div class="container">
            <div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo base_url('assets/images/howuse.png');?>" align="bottom" style="display: block;margin-left: auto;margin-right:auto;width:100%; padding-right: 10px;padding-left: 10px;" max-height="100%" max-width="100%">
                        </div>
                        <div class="col-md-6">
                            <h2 style="margin-bottom: 0px;padding-right: 10px;padding-left: 10px;font-family: 'Sacramento',cursive;">Who Can Use?</h2>
                            <p style="padding-right: 10px;padding-left: 10px;font-family: 'Yeon Sung', cursive;">Aplikasi <b>ayoantre</b> dapat digunakan oleh customer dan pemilik bisnis. Coba sekarang dan lihat perubahan yang diberikan</p>
                            <a href="<?php echo base_url()?>masuk" class="btn-style btn-outline btn-xl mb-1 btn-white js-scroll-trigger" style="margin:5px;">Personal</a><a style="margin:5px;" href="#services" class="btn-style btn-outline btn-xl mb-1 btn-white js-scroll-trigger">Business</a>
                        </div>
            </div>            
        </div>
    </section>

    <section id="services">
       <div class="container">
           <div class="row text-center">
                <div class="col-md-12" style="height: 100px;">
                    <h2 style="font-family: 'Sacramento',cursive;font-size: 70px;">Services</h2>
                    <p style="color: #333;font-family: 'Yeon Sung', cursive;">Ayoantre  memberikan berbagai kemudahan bagi pelanggan dan pemilik bisnis. Daftar dan nikmati layanan gratis kami yang akan terus bertambah</p>
                    <hr>
                </div>
            </div>        
           
            <div class="row service">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="item-service bengkel">
                            <div class="title">
                                 <img src="<?php echo base_url('assets/images/bengkel.png');?>" height="130">
                                 <h3>Bengkel</h3>
                                 <hr>
                            </div>
                            <div class="type">
                                <p>Aplikasi <b>ayoantre</b> bengkel memberikan kemudahan dalam antrean bengkel. Coba sekarang!</p>
                                <hr>
                            </div>
                            <div class="footer">
                                <a href="<?php echo base_url()?>bengkel" class="btn-footer">Get Started</a>
                            </div>
                        </div>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="item-service dokter popular">
                            <div class="title">
                                 <img src="<?php echo base_url('assets/images/masuk1.png');?>" height="130">
                                 <h3>Dokter</h3>
                                 <hr>
                            </div>
                            <div class="type">
                                <p style="white-space: normal;">COMING SOON</p>
                                <hr>
                            </div>
                            <div class="footer">
                                <a href="#" class="btn-footer">Get Started</a>
                            </div>
                        </div>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="item-service restoran">
                        <div class="title">
                            <img src="<?php echo base_url('assets/images/masuk1.png');?>" height="130">
                            <h3>Restoran</h3>
                                 <hr>
                        </div>
                        <div class="type">
                            <p style="white-space: normal;">COMING SOON</p>
                            <hr>
                        </div>
                        <div class="footer">
                            <a href="#" class="btn-footer">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="item-service pemda popular">
                            <div class="title">
                                 <img src="<?php echo base_url('assets/images/masuk1.png');?>" height="130">
                                 <h3>Pemda</h3>
                                 <hr>
                            </div>
                            <div class="type">
                                <p style="white-space: normal;">COMING SOON</p>
                                <hr>
                            </div>
                            <div class="footer">
                                <a href="#" class="btn-footer">Get Started</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial">
        <div class="container">
            <div class="section-heading text-center">
                <h2 style="font-family: 'Sacramento',cursive;font-size: 40px;">Our Testimonial</h2>
                <hr>
                <div class="quote">
                    <i class="fa fa-quote-left fa-4x"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div id="testimoni" class="carousel slide" data-ride="carousel" data-pause="false">
                        <ol class="carousel-indicators">
                            <li data-target="#testimoni" data-slide-to="0" class="active"></li>
                            <li data-target="#testimoni" data-slide-to="1"></li>
                            <li data-target="#testimoni" data-slide-to="2"></li>
                            <li data-target="#testimoni" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex h-100 align-items-center justify-content-center justify-content-sm-center">
                                    <div class="reviews">
                                        <div class="row blockquote review-item">
                                            <div class="col-md-3 text-center">
                                                <img class="rounded-circle reviewer" src="assets/images/users/u1.jpg">
                                                <div class="caption">
                                                    <small>by
                                                        <a href="#joe">Lisa</a>
                                                    </small>
                                                </div>

                                            </div>
                                            <div class="col-md-9">
                                                <h4>My awesome review</h4>
                                                <p class="review-text text-justify">My awesome review. My awesome review. My awesome review. My awesome review.
                                                    My awesome review. My awesome review. My awesome review. My awesome review.
                                                    My awesome review. My awesome review. My awesome review. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex h-100 align-items-center justify-content-center justify-content-sm-center">
                                    <div class="reviews">
                                        <div class="row blockquote review-item">
                                            <div class="col-md-3 text-center">
                                                <img class="rounded-circle reviewer" src="assets/images/users/u2.jpg">
                                                <div class="caption">
                                                    <small>by
                                                        <a href="#joe">Joe</a>
                                                    </small>
                                                </div>

                                            </div>
                                            <div class="col-md-9">
                                                <h4>My awesome review</h4>
                                                <p class="review-text text-justify">My awesome review. My awesome review. My awesome review. My awesome review.
                                                    My awesome review. My awesome review. My awesome review. My awesome review.
                                                    My awesome review. My awesome review. My awesome review. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex h-100 align-items-center justify-content-center justify-content-sm-center">
                                    <div class="reviews">
                                        <div class="row blockquote review-item">
                                            <div class="col-md-3 text-center">
                                                <img class="rounded-circle reviewer" src="assets/images/users/u3.jpg">
                                                <div class="caption">
                                                    <small>by
                                                        <a href="#joe">Kamelia</a>
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <h4>My awesome review</h4>
                                                <p class="review-text text-justify">My awesome review. My awesome review. My awesome review. My awesome review.
                                                    My awesome review. My awesome review. My awesome review. My awesome review.
                                                    My awesome review. My awesome review. My awesome review. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex h-100 align-items-center justify-content-center justify-content-sm-center">
                                    <div class="reviews">
                                        <div class="row blockquote review-item">
                                            <div class="col-md-3 text-center">
                                                <img class="rounded-circle reviewer" src="assets/images/users/u4.jpg">
                                                <div class="caption">
                                                    <small>by
                                                        <a href="#joe">Bro</a>
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <h4>My awesome review</h4>
                                                <p class="review-text text-justify">My awesome review. My awesome review. My awesome review. My awesome review.
                                                    My awesome review. My awesome review. My awesome review. My awesome review.
                                                    My awesome review. My awesome review. My awesome review. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!--  <section id="news">
        <div class="container h-100">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/news/co-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1">Judul Berita</h5>
                            <small class="card-subtitle text-muted">14 Mei 2018</small>
                            <p class="card-text mt-3 text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn-style btn-outline btn-xl mb-5 btn-white">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/news/co-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1">Judul Berita</h5>
                            <small class="card-subtitle text-muted">14 Mei 2018</small>
                            <p class="card-text mt-3 text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn-style btn-outline btn-xl mb-5 btn-white">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/news/co-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1">Judul Berita</h5>
                            <small class="card-subtitle text-muted">14 Mei 2018</small>
                            <p class="card-text mt-3 text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn-style btn-outline btn-xl mb-5 btn-white">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-footer text-center">
                <a href="#" class="btn-style btn-outline btn-xl mb-5 btn-white">Tampilkan Lebih</a>
            </div>
        </div>
    </section> -->


    <section id="client">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="client-item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client1.svg" alt="Klien 1">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="client-item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client2.svg" alt="Klien 2">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="client-item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client3.svg" alt="Klien 3">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="client-item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client4.svg" alt="Klien 4">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="client-item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client5.png" alt="Klien 5">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="client-item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client6.png" alt="Klien 6">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="trial">
        <div class="container">
            <div class="row">
                <div class="col-sm-1">
                    
                </div>
                <div class="col-sm-6">
                    <h3 style="color:#ffd400;"><b>Get Starter Free</b></h3>
                    <p style="color: #fff;"><b>Getting started</b> is easy and free for 6 months, it takes only few minutes to setup</p>
                </div>
                <div class="col-sm-4">
                    <span style="margin-left:auto;margin-right:auto;display:block;margin-top:8%;margin-bottom:0%;">
                        <a href="#features" class="btn-style btn-outline btn-xl mb-5 btn-white js-scroll-trigger">GET STARTED NOW</a>
                    </span>
                </div>
                <div class="col-sm-1">
                    
                </div>
            </div>
        </div>
    </section>

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
                    <p class="text-right" style="color:  #818080;font-family: 'Alegreya Sans SC', sans-serif;"><b>AyoAntre</b> adalah sebuah aplikasi yang membantu pengguna dalam menghemat waktu dalam mengantre sebuah layanan, cukup melalui website atau smartphone tanpa harus berdiri menunggu giliran, <b>AyoAntre</b> juga memberikan layanan pada backend process yg menjamin best paractise dan efisiensi proses terbaik</p>
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

    <script type="text/javascript">
            // Some random colors
        const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

        const numBalls = 30;
        const balls = [];

        for (let i = 0; i < numBalls; i++) {
          let ball = document.createElement("div");
          ball.classList.add("ball");
          ball.style.background = colors[Math.floor(Math.random() * colors.length)];
          ball.style.left = `${Math.floor(Math.random() * 80)}vw`;
          ball.style.top = `${Math.floor(Math.random() * 70)}vh`;
          ball.style.transform = `scale(${Math.random()})`;
          ball.style.width = `${Math.random()}em`;
          ball.style.height = ball.style.width;
          
          balls.push(ball);
          document.body.append(ball);
        }

        // Keyframes
        balls.forEach((el, i, ra) => {
          let to = {
            x: Math.random() * (i % 2 === 0 ? -11 : 11),
            y: Math.random() * 12
          };

          let anim = el.animate(
            [
              { transform: "translate(0, 0)" },
              { transform: `translate(${to.x}rem, ${to.y}rem)` }
            ],
            {
              duration: (Math.random() + 1) * 4000, // random duration
              direction: "alternate",
              fill: "both",
              iterations: Infinity,
              easing: "ease-in-out"
            }
          );
        });

    </script>

    <style type="text/css">
        .ball {
          position: absolute;
          border-radius: 100%;
          opacity: 0.5;
        }
    </style>

</body>
</html>