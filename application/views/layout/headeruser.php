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
        <link href="<?php echo base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url();?>assets/css/style2.css" rel="stylesheet" type="text/css">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container" align="center" style="height: 165px;">
                <a class = 'navbar-brand' href="<?php echo site_url('con_user'); ?>">
                <img src="<?php echo base_url();?>assets/images/petcare.png" style="padding-left: 30px;padding-top: 0px; ">
                </a>
                <a href="<?php echo site_url('con_user'); ?>">
                    <center>
                        <img align="center" width="210px" height="200px" src="<?php echo base_url();?>assets/images/pet.png" style="padding-top: 36px;">
                    </center>
                </a>
            </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="container" style="width: 1280px;">
                <div class="row">
                    <div class="span3" style="margin-left: 0px;">
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
                                <li class="active"><a href="<?php echo site_url('con_user/profile'); ?>"><i class="menu-icon icon-inbox"></i>Lihat Profil</a></li>
                                <li><a href="<?php echo site_url('con_user/logout'); ?>"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>