<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk</title>

    <!-- css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login-style.css">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Chela+One|Dosis|Goudy+Bookletter+1911|Righteous|Sacramento|Viga|Yeon+Sung" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/plugins/device-mockups/device-mockups.css">
    <link rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">

</head>
<body>
	<?php $this->load->view('navbar_login')?>

    <section id="login">
        <div class="login container">
            <div class="login-row row">
                <div class="caption-login col-md-6">
                    <h3>ayo antre bro</h3>
                </div>
                <div class="main col-md-6" style="padding: 0px;">
                    <!-- <div class="container-login100" style="min-height: 10vh;margin-top: 50px;"> -->
                        <div class="main-login container">
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
                                            <input type="submit" name="submit" class="button" style="width:100%;" value="Masuk"></input>
                                        </div>
                                    </div>
                            </form>        
                        </div>
                        <div class="text-center" style="margin-top: 20px;background-color: #eee;">
                            <p style="margin-bottom: 0px; padding-top:10px;padding-bottom: 10px;font-family: 'Nunito Sans', sans-serif;">Belum memiliki akun? <a href="<?php echo base_url();?>daftar" style="text-decoration: none;" class="text-login"><b>DAFTAR</b></a></p>
                        </div>
                </div>
            </div>
         </div>  
    </section>

    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/js/login.js"></script>

    <!-- Plugin JS -->

</body>
</html>