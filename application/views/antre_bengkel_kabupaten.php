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
    <link href="<?php echo base_url();?>assets/images/logo_single.png" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/antre.css">
    <link href="<?php echo base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Chela+One|Dosis|Goudy+Bookletter+1911|Righteous|Sacramento|Viga|Yeon+Sung" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/plugins/device-mockups/device-mockups.css">
    <link rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">

</head>
<body>
     
     <?php $this->load->view('include/navbar_antre')?>

    <!-- kategori section -->
    <section id="antre">
        <div class="container h-100">
            <div class="header-title" style="padding-top: 30px;margin-bottom: 20px;">
                <div class="container">
                    <form class="form-horizontal" action="<?=base_url();?>partner/show_partner" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4" style="padding-left: 0px;padding-right: 0px;">
                                
                                    <select class="form-control" id="id_kabupaten" name="id_kabupaten">
                                        <option>- Kabupaten -</option>
                                        <?php foreach ($kabupaten as $a){ ?>
                                        <option value="<?php echo $a->id_kabupaten?>"><?php echo $a->nama_kabupaten?></option>
                                        <?php } ?>
                                    </select>
                                
                            </div>
                            <div class="col-md-6" style="padding-left: 0px;padding-right: 0px;">
                                <input type="text" class="form-control input-lg" name="nama_partner" id="nama_partner" placeholder="Cari Bengkel" value="<?=set_value('nama_partner')?>" />
                            </div>
                            <div class="col-md-2" style="padding-left: 0px;padding-right: 0px;">
                                 <input class="btn-how4" type="submit" value="Cari" style="width: 100%;">
                                </input>
                            </div>
                        </div>
                    </form>
                 </div>
                </div>
            
            <?php if($idkabupaten=='empty'){ 
                    echo "Tidak Ada Data";
                }else{?>
                     <?php foreach ($idkabupaten as $a){ ?>
            <div class="container antre-item" style="margin-bottom: 5px;margin-top: 5px;">
                
                        <div class="row" style="">
                            <div class="col-md-10" style="padding:30px;">
                                <div class="partner-title">
                                    <h3><?php echo $a->nama_partner?></h3>
                                </div>
                                <hr>
                                <div class="partner-content"> 
                                       <p><?php echo $a->nama_usaha?></p>
                                       <p><?php echo $a->alamat?></p>
                                       <p><?php echo $a->telpon_kantor?></p>
                                       <p><?php echo $a->layanan?></p>
                                </div>                        
                            </div>
                            <div class="col-md-2" style="display: flex;justify-content: center; padding-left: 0px;padding-right: 0px;">
                                     <button href='#' data-target="#modalAntre" class='btn btn-default btn-small' data-toggle='modal' id="<?php echo $a->id_partner?>">Antre</button>
                               
                            </div>
                        </div>
                             
            </div>
               <?php } ?>
                <?php } ?>

            <div class="row" style="margin-top: 40px;">
                  <div class="col">
                  <!--Tampilkan pagination-->
                  <?php echo $pagination; ?>
                  </div>
            </div>
        </div>
    
    <div class="modal fade" id="modalAntre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="color: #222;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Ambil Antre</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3" id="ambil">
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

    <script type="text/javascript">
        $(document).ready(function(){
            $('.btn').click(function(){
                var id = $(this).attr("id");

                $.ajax({
                    url: "<?php echo base_url('customer/ambil_antre')?>",
                    type : 'POST',
                    data :  {id:id},
                    success : function(data){
                        $('#ambil').html(data);
                        $('#modalAntre').modal('show');
                        
                    }
                });
            });
        });
    </script>

</body>
</html>

    <!-- div class="row row-antre">
                <div class="container" style="margin-top: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="custom-search-input">
                                <div class="input-group col-md-12">
                                    <form class="form-horizontal" action="<?=base_url();?>partner/show_partner" method="post" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control input-lg" style="border-top-right-radius: 0px;border-bottom-right-radius: 0px;border-bottom-left-radius: 10px;border-top-left-radius: 10px; padding-left: 30px;" name="nama_partner" id="nama_partner" placeholder="Cari Bengkel" value="<?=set_value('nama_partner')?>" />
                                        <span class="input-group-btn">
                                            <input class="btn btn-info btn-lg" type="submit" name="submit" style="background-color: #FFE210;border-color: #FFE210; border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 0px;border-top-left-radius: 0px;">
                                                
                                            </input>
                                        </span>
                                    </form>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->