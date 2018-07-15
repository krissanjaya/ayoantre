<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

  <?php $this->load->view('dashboard/include/css')?>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container" style="background-color: #2E2942;">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url()?>customer/dashboard" class="site_title" style="padding-left:15px; font-family: 'Pacifico', cursive;"><img height="30" src="<?php echo base_url()?>assets/images/logoayobawah.png"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url()?>assets/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php echo $this->session->userdata('username');?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Umum</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url()?>customer/dashboard"><i class="fa fa-home"></i> Dashboard </a>
                     
                  </li>
                </ul>
              </div>
            <div class="menu_section">
                <h3>Ambil Antre</h3>
                <ul class="nav side-menu">
                      <li><a href="<?php echo base_url()?>dashboard/antre_bengkel"><i class="fa fa-wrench"></i> Bengkel </a>
                      <li><a href="<?php echo base_url()?>customer/dashboard_antre"><i class="fa fa-user-md"></i> Dokter </a>
                      <li><a href="<?php echo base_url()?>customer/dashboard_antre"><i class="fa fa-cutlery"></i> Restoran </a>
                      <li><a href="<?php echo base_url()?>customer/dashboard_antre"><i class="fa fa-building"></i> Pemda </a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url()?>admin/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars" style="color:#27262B ;"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url()?>assets/images/user.png" alt="">
                    <span class=" fa fa-angle-down" style="color:#27262B ;"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!-- <li><a href="<?php echo base_url()?>admin/profil"> Profil</a></li> -->
                    <li><a href="<?php echo base_url()?>"><i class="fa fa-home pull-right"></i> Home</a></li>
                    <!-- <li><a href="<?php echo base_url()?>kategori"><i class="fa fa-sign-out pull-right"></i> Antre</a></li> -->
                    <li><a href="<?php echo base_url()?>keluar"><i class="fa fa-sign-out pull-right"></i> Keluar</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        </html>
