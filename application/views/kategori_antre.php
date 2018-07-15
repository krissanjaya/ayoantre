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
	<title>Kategori Antre</title>
    <link href="<?php echo base_url();?>assets/images/logo_single.png" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style-antress.css">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/plugins/device-mockups/device-mockups.css">
    <link rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">

</head>
<body>

    <?php $this->load->view('include/navbar_antre')?>

    <!-- kategori section -->
    <section id="category_antre">
        <div class="container h-100">
           <div class="header-title">
               <!--  <img src="<?php echo base_url('assets/images/logoayo.png');?>"  height="50" class="d-inline-block align-center" alt=""> -->
                <h2>Kategori Antrean</h2>
                <span style="width: 100px;"><p><b>ayoantre</b> menawarkan kemudahan dalam <b>empat jenis layanan</b> yang umumnya terjadi antrean yang sangat merugikan pelanggan. Pilih layanan antrean untuk dapat merasakan dampak positifnya</p></span>
           </div>
           <div class="row row-kategori">
                <div class="col-md-3" style="padding: 2px;">
                    <div class="col-md-12 item-kategori">
                        <img src="<?php echo base_url('assets/images/bengkel.png');?>" height="130" style="padding-top: 10px;">
                        <h3>BENGKEL</h3>
                        <span style="width: 100px;"><p><b>ayoantre</b> menawarkan kemudahan dalam <b>empat jenis layanan</b> yang umumnya terjadi antrean yang sangat merugikan pelanggan.</p></span>
                        <div class="buttn" style="margin-bottom: 10px;">
                            <a href="<?php echo base_url();?>antre_bengkel" class="btn-kategori btn-outline-kategori">ANTRE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="padding: 2px;">
                    <div class="col-md-12 item-kategori">
                        <img src="<?php echo base_url('assets/images/bengkel.png');?>" height="130" style="padding-top: 10px;">
                        <h3>DOKTER</h3>
                        <span style="width: 100px;"><p><b>ayoantre</b> menawarkan kemudahan dalam <b>empat jenis layanan</b> yang umumnya terjadi antrean yang sangat merugikan pelanggan.</p></span>
                        <div class="buttn" style="margin-bottom: 10px;">
                            <a href="<?php echo base_url();?>" class="btn-kategori btn-outline-kategori">ANTRE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="padding: 2px;">
                    <div class="col-md-12 item-kategori">
                        <img src="<?php echo base_url('assets/images/bengkel.png');?>" height="130" style="padding-top: 10px;">
                        <h3>RESTORAN</h3>
                        <span style="width: 100px;"><p><b>ayoantre</b> menawarkan kemudahan dalam <b>empat jenis layanan</b> yang umumnya terjadi antrean yang sangat merugikan pelanggan.</p></span>
                        <div class="buttn" style="margin-bottom: 10px;">
                            <a href="<?php echo base_url();?>" class="btn-kategori btn-outline-kategori">ANTRE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="padding: 2px;">
                    <div class="col-md-12 item-kategori">
                        <img src="<?php echo base_url('assets/images/bengkel.png');?>" height="130" style="padding-top: 10px;">
                        <h3>PEMDA</h3>
                        <span style="width: 100px;"><p><b>ayoantre</b> menawarkan kemudahan dalam <b>empat jenis layanan</b> yang umumnya terjadi antrean yang sangat merugikan pelanggan.</p></span>
                        <div class="buttn" style="margin-bottom: 10px;">
                            <a href="<?php echo base_url();?>" class="btn-kategori btn-outline-kategori">ANTRE</a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>
    <!-- end kategori section -->

    <?php $this->load->view('include/footer')?>

    <script src="<?php echo base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/bootstrap4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/main.js"></script>


</body>
</html>