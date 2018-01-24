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
                <a class = 'navbar-brand' href="<?php echo site_url('con_customer'); ?>">
                <img src="<?php echo base_url();?>assets/images/petcare.png" style="padding-left: 30px;padding-top: 0px; ">
                </a>
                <a href="<?php echo site_url('con_customer'); ?>">
                    <center>
                        <img align="center" width="210px" height="200px" src="<?php echo base_url();?>assets/images/pet.png" style="padding-top: 36px;">
                    </center>
                </a>
            </div>
            </div>
        </div>
       
        <div class="wrapper" style="width: 1280px;">
            <div class="container" style="width: 1280px;">
                <div class="row" style="width: 1200px;">
                    <div class="span3" style="width: 230px;">
                        <div class="sidebar" style="width: 230px;">                           
                            <ul class="widget widget-menu unstyled" style="width: 230px;">
                                <li class="active" style="width: 230px;"><a href="<?php echo site_url('con_customer/pesan'); ?>" style="width: 245px;"><i class="menu-icon icon-inbox"></i>Pesan Paket Grooming</a></li>
                                <li class="active" style="width: 230px;"><a href="<?php echo site_url('con_customer/lihat_pesanan_customer'); ?>" style="width: 245px;"><i class="menu-icon icon-inbox"></i>Lihat Transaksi</a></li>
                                 <li class="active" style="width: 230px;"><a href="<?php echo site_url('con_customer/profile'); ?>" style="width: 245px;"><i class="menu-icon icon-user"></i>Lihat Profil</a></li>
                                <li style="width: 230px;"><a href="<?php echo site_url('con_user/logout'); ?>" style="width: 245px;"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>