<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PetCare.id</title>
        <link type="text/css" href="<?php echo base_url();?>assets3/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>assets3/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>assets3/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>assets3/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html"><?php echo "Selamat datang di PetCare "; ?> </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
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
                                    <li><a href="<?php echo site_url('con_user/profile'); ?>">Profile</a></li>
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
        <div class="wrapper">
            <div class="container" style="width: 1280px;">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">                           
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Paket yang Ditawarkan</a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="<?php echo base_url();?>index.php/con_upload"><i class="icon-inbox"></i>Masukkan Paket Pet Grooming</a></li>
                                        <li><a href="<?php echo site_url('con_user/daftar_paket'); ?>"><i class="icon-inbox"></i>Lihat Paket Anda</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="<?php echo site_url('con_user/lihat_pesanan'); ?>"><i class="menu-icon icon-inbox"></i>Lihat Transaksi</a></li>
                                <li><a href="<?php echo site_url('con_user/logout'); ?>"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>