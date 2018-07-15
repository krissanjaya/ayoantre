<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard Admin</title>
    <link href="<?php echo base_url();?>assets/images/logo_single.png" rel="shortcut icon">
    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url()?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>assets/css/custom.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme|Lato|Pacifico" rel="stylesheet">

<?php
    // $nama=$this->session->userdata('nama');
    // $alamat=$this->session->userdata('alamat');
    // $mail=$this->session->userdata('mail');
    // $jk=$this->session->userdata('jk');
?>


  </head>

  <body class="nav-md">

        <?php $this->load->view('dashboard/header')?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard</h3>
              </div>

              <div class="title_right">
                <div class="col-md-8 col-sm-5 col-xs-12 form-group pull-right top_search">
                <form method="POST" class="form-inline" action="<?php echo base_url()?>dashboard/show_partner">
                  <div class="input-group">
                    <select style="border-radius: 20px;" class="form-control" id="id_kabupaten" name="id_kabupaten">
                      <option>Kabupaten</option>
                      <?php foreach ($kabupaten as $a){ ?>
                      <option value="<?php echo $a->id_kabupaten?>"><?php echo $a->nama_kabupaten?></option>
                      <?php } ?>
                      </select>
                  </div>
                  <div class="input-group">
                    <input type="text" class="form-control"  name="nama_partner" id="nama_partner" placeholder="Cari..." value="<?=set_value('nama_partner')?>">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit"><span class=" fa fa-search"></button>
                    </span>
                  </div>
                </form>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

           
            <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2><?php echo $a->nama_partner?></h2> -->
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <!-- <a class="btn btn-primary" href="<?php echo base_url()?>admin/tambahAnggota" title="Tambah Anggota" type="button" style="float: right;text-align: right;"><span class=" fa fa-plus" style="padding-right: 10px; padding-left: 10px;"></a> -->
                  <div class="x_content">
                    
                    <?php 
                      if ($nama=='empty')
                      {
                        echo "Tidak Ada Bengkel";
                      }
                      else
                      {


                    ?>
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                        <th>Nama Partner</th>
                        <th>Nama Usaha</th>
                          <th>Alamat</th>
                          <th>Telepon</th>
                          <th>Layanan</th>
                          <th>Aksi</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($nama as $a)
                      { 

                        ?>
                        <tr>
                         <td><?php echo $a->nama_partner?></td>
                          <td><?php echo $a->nama_usaha?></td>
                          <td><?php echo $a->alamat?></td>
                          <td><?php echo $a->telpon_kantor?></td>
                           <td><?php echo $a->layanan?></td>
                          <td><button href='#' data-target="#modalAntre" class='btn btn-success btn-small' data-toggle='modal' id="<?php echo $a->id_partner?>">Antre</button>

                        <!-- Dialog Modal -->
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
                                      <div class="modal-footer d-flex justify-content-center">
                                          <button class="btn btn-default" type="submit">Antre</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          </td>
                        </tr>
                       
                        <?php } ?>
                      </tbody>
                    </table>
          
                      <?php } ?>
                  </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Dashboard - <a href="<?php echo base_url()?>">AyoAntre</a> 2018
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
     

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url()?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo base_url()?>assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url()?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url()?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url()?>assets/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url()?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>assets/js/custom.min.js"></script>

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
