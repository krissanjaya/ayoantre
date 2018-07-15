<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>
    <link href="<?php echo base_url();?>assets/images/logo_single.png" rel="shortcut icon">
    <!--================================ load css ================================-->
    <?php $this->load->view('dashboard/include/css')?>
    <!---=========================================================================-->
  </head>

  <body class="nav-md">
        <!--================================ load navbar ================================-->
        <?php $this->load->view('dashboard/header')?>
        <!---=========================================================================-->

        <!--============== page content ===============-->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3><b>DASHBOARD</b></h3>
                    </div>
                    <div class="title_right">
                      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span class=" fa fa-search"></button>
                          </span>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <!---=========================================================================-->
                <?php if($antre!=='empty'){?>
                    <?php foreach ($antre as $a){ ?> 
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2><b><?php echo $a->nama_partner?></b></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                  
                                    <div class="x_content">
                                        <div class="row row-antre">
                                            <div class="col-md-4" style="padding: 2px;">
                                                <div class="col-md-12 item-antre">
                                                    <h3>ID ANTRE</h3>
                                                    <hr width="80" style="border-width: 5px;border-color: #98ff84;">
                                                    <span style="width: 100px;"><p><?php echo $a->id_antrian?></p></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="padding: 2px;">
                                                <div class="col-md-12 item-antre">
                                                    <h3>NO ANTRE</h3>
                                                    <hr width="80" style="border-color: #84abff;border-width: 5px;">
                                                    <span style="width: 100px;"><p><?php echo $a->no_antri?></p></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="padding: 2px;">
                                                <div class="col-md-12 item-antre" style="background-color: #ffef7f;">
                                                    <h3>NO ANTRE AKTIF</h3>
                                                    <hr width="80" style="border-color: #ffc02a;border-width: 5px;">
                                                     <?php foreach ($antre_aktif as $b){ ?> 
                                                    <span style="width: 100px;"><p><?php echo $b->no_antri?></p></span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        <?php } ?> 
                  <?php } ?> 
              <?php }else{
                  echo 'Tidak Sedang Antre';
              } ?> 
          </div>
      </div>
        <!-- /page content -->

      <!--================================ load css ================================-->
      <?php $this->load->view('dashboard/include/js')?>
      <!---=========================================================================-->

  </body>
</html>
