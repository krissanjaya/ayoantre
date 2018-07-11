<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- css -->
	<title>Daftar Bengkel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sweetalert.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/plugins/device-mockups/device-mockups.css">
    <link rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">
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
               
            </div>
        </div>
    </nav>

    <section id="daftar">
    <div class="container">
        <div class="row" style="margin-top: 50px; margin-bottom: 10px;">
            <div class="col-md-4" style="">
                <div class="caption">
                    <h3 class="login100-form-title" style="text-align: left;">BENGKEL</h3>
                    <p><b>ayoantre</b> menawarkan layanan pada bidang bengkel, dokter, restoran dan pemda. <b>ayoantre</b> memberikan kemudahan dalam mengelola antrean. Mari coba sekarang dan rasakan perubahan di usaha anda! Fitur yang ditawarkan antara lain:
                    aaaa
                aaaa
            aaa
        aaaa
    aaa</p>
                    <!-- <div class="button-daftar">
                        <a href="<?php echo base_url();?>/#services" class="btn-style-login btn-outline btn-white" style="width:100%;">DAFTAR</a>
                    </div> -->
                </div>
            </div>
            <div class="col-md-8">
            <div class="container-login100">
                <div class="wrap-login100" style="width: 600px;">

                    <span class="login100-form-title p-b-37">
                        DAFTAR USAHA BENGKEL
                    </span>
                    <?php
                        if (isset($errormsg)) {
                            echo $errormsg;
                        }
                     ?>
                    <div class="panel-body">
                        <form class="form-horizontal" action="<?=base_url();?>partner/daftar/bengkel" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12" style="padding:0;">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input style="border-radius: 20px;" class="form-control" type="text" name="nama_partner" placeholder="Nama Usaha" value="<?=set_value('nama_partner')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding:0;">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <select style="border-radius: 20px;" class="form-control" id="jenis_usaha" name="jenis_usaha">
                                                <option>- Jenis Bengkel -</option>
                                                <option value="1">Bengkel Motor</option>
                                                <option value="2">Bengkel Mobil</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <select style="border-radius: 20px;" class="form-control" id="id_propinsi" name="id_propinsi">
                                                <option>- Provinsi -</option>
                                                <?php foreach ($provinsi as $a){ ?>
                                                <option value="<?php echo $a->id_provinsi?>"><?php echo $a->nama_provinsi?></option>
                                                <?php } ?>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <select style="border-radius: 20px;" class="form-control" id="id_kabupaten" name="id_kabupaten">
                                                <option>- Kabupaten -</option>
                                                <?php foreach ($kabupaten as $a){ ?>
                                                <option value="<?php echo $a->id_kabupaten?>"><?php echo $a->nama_kabupaten?></option>
                                                <?php } ?>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding:0;">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input style="border-radius: 20px;" class="form-control" type="number" name="telpon_kantor" placeholder="Telepon Kantor" value="<?=set_value('telpon_kantor')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding:0;">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input style="border-radius: 20px;" class="form-control" type="text" name="username" placeholder="username" value="<?=set_value('username')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding:0;">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input style="border-radius: 20px;" class="form-control" type="password" name="pasword" placeholder="Password" value="<?=set_value('pasword')?>">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-sm-12" style="padding:0;">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <textarea style="border-radius: 20px;" placeholder="Layanan" class="form-control" rows="3" id="layanan" name="layanan" value="<?=set_value('layanan')?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding:0;">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <textarea style="border-radius: 20px;" placeholder="Alamat Usaha" class="form-control" rows="3" id="alamat" name="alamat" value="<?=set_value('alamat')?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form group">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4" style="padding: 0px;">
                                                    <input type="button" onclick="showPosition();" name="kordinat" class="btn-style-login btn-outline btn-white" style="width:100%;height: 100%; background-color: #FFE210;color: #2F4764;" value="koordinat"></input>
                                                </div>
                                                <div class="col-md-8">
                                                    <input id="latitude" name="latitude" type="text" />
                                                    <input id="longitude" name="longitude" type="text" />
                                                </div>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="form group">
                                <div class="col-sm-12" style="padding:0; margin-top: 10px;">
                                    <input type="submit" name="submit" class="btn-style-login btn-outline btn-white" style="width:100%;" value="Daftar"></input>
                                </div>
                            </div>
                            <div class="text-left">
                                <p>*Harus diisi dengan keadaan sesungguhnya</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
      </section>

    <!-- <section id="">
        
        saaaaaaaaaaaaaaaa
    </section>
    <section id="">
        
    </section> -->

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
        
    <!-- <div id="dropDownSelect1"></div> -->

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

    <script type="text/javascript">

    function showPosition(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(function(position){
                document.getElementById("latitude").value = position.coords.latitude; 
        document.getElementById("longitude").value = position.coords.longitude; 
                // var positionInfo = position.coords.latitude + ", " +  position.coords.longitude;
                // document.getElementById("latitude").innerHTML = positionInfo;
            });
        } else{
            alert("Maaf, browser anda tidak mendukung.");
        }
    }
</script>
<script type="text/javascript">


    function myFn(){
        swal({ 
              title: "Success",
              text: "Thank you for contacting us. We will get back to you soon!",
              type: "success" 
        },
             function(){
                //event to perform on click of ok button of sweetalert
        });
    }

</script>
    <!-- Plugin JS -->

</body>
</html>