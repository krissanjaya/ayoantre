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
    <link href="<?php echo base_url();?>assets/images/logo_single.png" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/landing-styles.css">

</head>
<body>
	<?php $this->load->view('navbar_landing')?>

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
                <img src="<?php echo base_url('assets/images/landing1.png');?>" align="bottom" style="display: block; bottom:0;margin-left: auto;margin-right:auto;width:80%;margin-top: 27px;left: 0;right: 0;" max-height="100%" max-width="100%">
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
        	
            <div class="row row-fitur">
                <div class="col-md-1"> </div>
                <div class="col-md-2 wow fadeInUp" style="padding: 2px;">
                    <div class="col-md-12 item-kategori">
                        <img src="<?php echo base_url('assets/images/cari2.png');?>" height="130" style="padding-top: 10px;">
                        <h3>CARI</h3>
                        <hr style="margin-top: 0px;">
                        <span style="width: 100px;"><p>Temukan layanan antrean dengan cepat dan mudah di area Anda</p></span>
                    </div>
                </div>
                <div class="col-md-2 wow fadeInUp" style="padding: 2px;">
                    <div class="col-md-12 item-kategori">
                        <img src="<?php echo base_url('assets/images/daftar1.png');?>" height="130" style="padding-top: 10px;">
                        <h3>DAFTAR</h3>
                        <hr style="margin-top: 0px;">
                        <span style="width: 100px;"><p>Ambil posisi Anda dalam Antrean secara online</p></span>
                    </div>
                </div>
                <div class="col-md-2 wow fadeInUp" style="padding: 2px;">
                    <div class="col-md-12 item-kategori">
                        <img src="<?php echo base_url('assets/images/tunggu2.png');?>" height="130" style="padding-top: 10px;">
                        <h3>TUNGGU</h3>
                        <hr style="margin-top: 0px;">
                        <span style="width: 100px;"><p>Bersantai, tunggu antrian Anda</p></span>
                    </div>
                </div>
                <div class="col-md-2 wow fadeInUp" style="padding: 2px;">
                    <div class="col-md-12 item-kategori">
                        <img src="<?php echo base_url('assets/images/masuk1.png');?>" height="130" style="padding-top: 10px;">
                        <h3>MONITOR</h3>
                        <hr style="margin-top: 0px;">
                        <span style="width: 100px;"><p>Notifikasi posisi antrean dan cek progres layanan Anda</p></span>
                    </div>
                </div>
                <div class="col-md-2 wow fadeInUp" style="padding: 2px;">
                    <div class="col-md-12 item-kategori">
                        <img src="<?php echo base_url('assets/images/kontrol.png');?>" height="130" style="padding-top: 10px;">
                        <h3>KONTROL</h3>
                        <hr style="margin-top: 0px;">
                        <span style="width: 100px;"><p>Kelola antrean dan Otomatisasi proses Bisnis Anda</p></span>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>

    <section id="howuse">
        <div class="container">
            <div class="row">
                        <div data-wow-iteration="2" class="col-md-6 wow swing center">
                            <img src="<?php echo base_url('assets/images/how4.png');?>" align="bottom" style="display: block;margin-left: auto;margin-right:auto;width:100%; padding-right: 10px;padding-left: 10px;" max-height="100%" max-width="100%">
                        </div>
                        <div class="col-md-6">
                            <h2 style="margin-bottom: 0px;padding-right: 10px;padding-left: 10px;font-size: 30pt;">Who Can Use?</h2>
                            <p style="padding-right: 10px;padding-left: 10px;">Aplikasi <b>ayoantre</b> dapat digunakan oleh customer dan pemilik bisnis. Coba sekarang dan lihat perubahan yang diberikan</p>
                            <a href="<?php echo base_url()?>masuk" class="btn-how1" style="margin:5px;">Personal</a><a style="margin:5px;" href="#services" class="btn-how2">Business</a>
                        </div>
            </div>            
        </div>
    </section>

    <section id="services">
       <div class="container">
           <div class="row text-center">
                <div class="col-md-12" style="height: 100px;margin-bottom: 20px;">
                    <h2 style="font-family: 'Fredoka One', cursive; font-size: 30pt;">Services</h2>
                    <p style="color: #fff;">Ayoantre  memberikan berbagai kemudahan bagi pelanggan dan pemilik bisnis.</p>
                        <p style="color: #fff;">Daftar dan nikmati layanan gratis kami yang akan terus bertambah</p>
                    <hr>
                </div>
            </div>    

            <div class="row row-fitur">
                <div class="col-md-3 wow fadeInUp" style="padding: 2px;">
                    <div class="col-md-12 item-kategori">
                        <img src="<?php echo base_url('assets/images/bengkel.png');?>" height="130" style="padding-top: 10px;">
                        <h3>Bengkel</h3>
                        <hr style="margin-top: 20px;margin-bottom: 20px;">
                        <span style="width: 100px;"><p>Aplikasi <b>ayoantre</b> bengkel memberikan kemudahan dalam antrean bengkel. Coba sekarang!</p></span>
                        <hr style="margin-top: 20px;margin-bottom: 20px;">
                        <a href="<?php echo base_url()?>daftar_bengkel" style="" class="btn-how1">Coba Sekarang</a>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" style="padding: 2px;">
                    <div class="col-md-12 item-kategori">
                        <img src="<?php echo base_url('assets/images/daftar1.png');?>" height="130" style="padding-top: 10px;">
                        <h3>Dokter</h3>
                        <hr style="margin-top: 20px;margin-bottom: 20px;">
                        <span style="width: 100px;"><p>Aplikasi <b>ayoantre</b> bengkel memberikan kemudahan dalam antrean bengkel. Coba sekarang!</p></span>
                        <hr style="margin-top: 20px;margin-bottom: 20px;">
                        <a href="<?php echo base_url()?>daftar_bengkel" style="" class="btn-how1">Coba Sekarang</a>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" style="padding: 2px;">
                    <div class="col-md-12 item-kategori">
                        <img src="<?php echo base_url('assets/images/tunggu2.png');?>" height="130" style="padding-top: 10px;">
                        <h3>Restoran</h3>
                       <hr style="margin-top: 20px;margin-bottom: 20px;">
                        <span style="width: 100px;"><p>Aplikasi <b>ayoantre</b> bengkel memberikan kemudahan dalam antrean bengkel. Coba sekarang!</p></span>
                        <hr style="margin-top: 20px;margin-bottom: 20px;">
                        <a href="<?php echo base_url()?>daftar_bengkel" style="" class="btn-how1">Coba Sekarang</a>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" style="padding: 2px;">
                    <div class="col-md-12 item-kategori">
                        <img src="<?php echo base_url('assets/images/masuk1.png');?>" height="130" style="padding-top: 10px;">
                        <h3>Pemda</h3>
                        <hr style="margin-top: 20px;margin-bottom: 20px;">
                        <span style="width: 100px;"><p>Aplikasi <b>ayoantre</b> bengkel memberikan kemudahan dalam antrean bengkel. Coba sekarang!</p></span>
                        <hr style="margin-top: 20px;margin-bottom: 20px;">
                        <a href="<?php echo base_url()?>daftar_bengkel" style="" class="btn-how1">Coba Sekarang</a>
                    </div>
                </div>
            </div>    
        </div>
    </section>

    <section id="testimonial">
        <div class="container">
            <div class="section-heading text-center wow swing center">
                <h2 style="font-size: 40px;">Our Testimonial</h2>
                <hr>
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
                                                <h4>Sangat Bermanfaat!</h4>
                                                <p class="review-text text-justify">Aplikasi ayoantre sangat membantu pelanggan dalam proses antre di suatu instansi </p>
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
                                                <h4>Aplikasi yang Mantap!</h4>
                                                <p class="review-text text-justify">Terimakasih telah menyediakan aplikasi yang bermanfaat bagi pelanggan </p>
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
                                                <h4>Terimakasih Ayoantre</h4>
                                                <p class="review-text text-justify">Selain bermanfaat bagi pelanggan, ayoantre juga dapat memberikan manfaat bagi perusahaan yang menggunakan </p>
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

    <section id="trial">
        <div class="container">
            <div class="row">
                <div class="col-sm-1">
                    
                </div>
                <div class="col-sm-6">
                    <h3 style="color:#ffd400;font-family: 'Fredoka One', cursive;font-size: 30pt;"><b>Get Starter Free</b></h3>
                    <p style="color: #fff;font-family: 'Nunito Sans', sans-serif;"><b>Getting started</b> is easy and free for 6 months, it takes only few minutes to setup</p>
                </div>
                <div class="col-sm-4">
                    <span style="margin-left:auto;margin-right:auto;display:block;margin-top:8%;margin-bottom:0%;">
                        <a href="#features" class="btn-how1">GET STARTED NOW</a>
                    </span>
                </div>
                <div class="col-sm-1">
                    
                </div>
            </div>
        </div>
    </section>

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

    <?php $this->load->view('include/footer')?>

    <!-- <script src="<?php echo base_url();?>assets/js/main.js"></script> -->

    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>

    <script type="text/javascript">
            // Some random colors
        const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

        const numBalls = 30;
        const balls = [];

        for (let i = 0; i < numBalls; i++) {
          let ball = document.createElement("div");
          ball.classList.add("ball");
          ball.style.background = colors[Math.floor(Math.random() * colors.length)];
          ball.style.left = `${Math.floor(Math.random() * 50)}vw`;
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

    <script>
         wow = new WOW(
          {
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       10,          // default
          mobile:       false,       // default
          live:         true        // default
         }
         )
         wow.init();
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