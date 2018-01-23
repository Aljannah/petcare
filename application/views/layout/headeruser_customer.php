<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=0">
        <title>PetCare.id</title>
        <link type="text/css" href="<?php echo base_url();?>assets3/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>assets3/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>assets3/css/theme.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/petcare.ico">
        <link type="text/css" href="<?php echo base_url();?>assets3/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo site_url('con_customer'); ?>"><?php echo "Selamat datang di PetCare "; ?> </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url();?>assets3/images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="divider"></li>
                                    <li><a href="<?php echo site_url('con_customer/profile'); ?>">Profile</a></li>
                                    <li><a href="<?php echo site_url('con_user/logout'); ?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper" style="width: 1280px;">
            <div class="container" style="width: 1280px;">
                <div class="row" style="width: 1200px;">
                    <div class="span3" style="width: 230px;">
                        <div class="sidebar" style="width: 230px;">                           
                            <ul class="widget widget-menu unstyled" style="width: 230px;">
                                <li class="active" style="width: 230px;"><a href="<?php echo site_url('con_customer/pesan'); ?>" style="width: 200px;"><i class="menu-icon icon-inbox"></i>Pesan Paket Grooming</a></li>
                                <li class="active" style="width: 230px;"><a href="<?php echo site_url('con_customer/lihat_pesanan_customer'); ?>" style="width: 200px;"><i class="menu-icon icon-inbox"></i>Lihat Transaksi</a></li>
                                <li style="width: 230px;"><a href="<?php echo site_url('con_user/logout'); ?>" style="width: 200px;"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>