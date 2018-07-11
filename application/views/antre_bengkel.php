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
                                    <form class="form-horizontal" action="<?=base_url();?>partner/" method="post" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control input-lg" style="border-top-right-radius: 0px;border-bottom-right-radius: 0px;border-bottom-left-radius: 10px;border-top-left-radius: 10px; padding-left: 30px;" placeholder="Cari Bengkel" />
                                        <span class="input-group-btn">
                                            <input class="btn btn-info btn-lg" type="submit" name="submit" style="background-color: #FFE210;border-color: #FFE210; border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 0px;border-top-left-radius: 0px;">
                                                <!-- <img src="<?php echo base_url('assets/icons/search.png');?>"  height="30" alt=""> -->
                                            </input>
                                        </span>
                                    </form>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
           <?php foreach ($partner as $a){ ?>
           <div class="row">
               <div class="container" style="color: #222;">
                   <h3><?php echo $a->nama_partner?></h3>
                   <p><?php echo $a->nama_usaha?></p>
                   <p><?php echo $a->alamat?></p>
                   <p><?php echo $a->telpon_kantor?></p>
                   <p><?php echo $a->layanan?></p>
                   <div class="text-center">
                    <form method="post" action="<?php echo base_url();?>customer/ambil_antre">
                    <input class="id" type="hidden" name="id">

                    <div class="md-form mb-5">
                       <select style="border-radius: 20px;" class="form-control" id="tanggal" name="tanggal">
                            <option>- Tanggal -</option>
                         <!--    <?php foreach ($partner as $a){ ?> -->
                            <option value="<?php echo $a->id_periode_antrian?>"><?php echo $a->id_partner?></option>
                          <!--   <?php } ?> -->
                        </select>
                    </div>
                        <a href='#modalAntre' class='btn btn-default btn-small' data-toggle='modal' data-id="<?php echo $a->id_partner?>">Detail</a>

                    </form>
                    </div>
               </div>
           </div>
           <?php } ?>
           <div class="row">
                  <div class="col">
                  <!--Tampilkan pagination-->
                  <?php echo $pagination; ?>
                  </div>
            </div>
        </div>

       <!--  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Pemberitahuan</h4>
                              </div>
                              <div class="modal-body">
                                Konfirmasi Angsuran Anggota, satu kali klik akan menambah satu kali angsuran anggota.
                              </div>
                              
                              <div class="modal-footer">
                              <form method="post" action="<?php echo base_url();?>admin/insertAngsuran">
                              <input class="id" type="hidden" name="id">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button class="btn btn-primary">Angsur</button>
                              </div>
                            </div>
                          </div>
                        </div> -->

        <div class="modal fade" id="modalAntre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="color: #222;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Ambil Antre</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <!-- <div class="fetched-data"></div> -->
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default">Antre</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
        $('#modalAntre').on('show.bs.modal', function (e) {
            var id_partner = $(e.relatedTarget).data('id_partner');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'POST',
                url: "<?php echo site_url() ?>customer/ambil_antre",
                data :  'id_partner=' + id_partner,
                success : function(data){
                $('.modal-body').html(data);
                $('#modalAntre').modal('show');
                
                }
                error:function(){
                        alert("failure");
                    }
            });
         });
    });
  </script>


    </section>
    <!-- end kategori section -->

    <!-- <script type="text/javascript">
        // function getData($data,$page){
            $.ajax({
                headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                type:'post',
                data: {
                    'tanggal':$data['tanggal'],
                    // 'year':$data['year'],
                    'page':$page
                    },
                url: "{{url('customer/meter')}}",
                success: function(data)
                {
                    $('.modal-body').html(data)
                    $('#modalLoginForm').modal('show')
                    setListener()
                    location.hash = $page;
                }
            })
        // }
    </script> -->

   <!--  <footer>
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
    </footer> -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
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