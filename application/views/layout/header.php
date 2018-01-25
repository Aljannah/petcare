<!DOCTYPE HTML>
<html>
<head>
<title>PetCare</title>
<meta name="viewport" content="width=device-width, initial-scale=0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Motive Mag Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url();?>assets/css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>assets/css/style2.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css">
<link type="text/css" href="<?php echo base_url();?>assets3/css/theme.css" rel="stylesheet">
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/petcare.ico">
<script src="<?php echo base_url();?>assets/js/jquery.min.js"> </script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" />
<!--<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/images/logoicon.png">-->
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
	  <div class="header" id="home">
	 <div class="content white">
		<nav class="navbar navbar-default" role="navigation">


		   <div class="container">

		   <div class ="col-md-4">
		   	
		   	<a class = 'navbar-brand' href="<?php echo base_url();?>index.php/">
		   		<img src="<?php echo base_url();?>assets/images/petcare.png" style="padding-left: 30px;padding-top: 0px; ">
		   	</a>
		   	<div class="sign_up" align="right" style="height: 161px;width: 1150px;padding-left: 0px;">
		   	<div align="right">
		   	<font color ="red"><h3 color="red"><b>Daftar Sebagai User</b></h3></font>
		   	<font color ="red"><h4></h4></font>
		   	</br>
		   			<?=  anchor('con_home/register','Sign Up',['class'=>'btn btn-success btn-lg']) ?>
		   			
		   		</div>
			</div>
		   </div>
					
		   </br></br></br></br>
		   </br>

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
			</br></br></br>
			<!--/.navbar-header-->
		
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url();?>" style="padding-left: 60px; padding-right: 60px;">HOME</a></li>
					<!--<li><a  href="<?php echo base_url();?>index.php/con_home/about" style="padding-left: 60px; padding-right: 60px;">ABOUT</a></li>	-->
				     
					<li><a href="<?php echo base_url();?>index.php/con_home/our_product" style="padding-left: 60px; padding-right: 60px;"> OUR SERVICES </a></li>
					<li align="center"><a href="<?php echo base_url();?>index.php/con_login" style="padding-left: 60px; padding-right: 60px;">LOGIN</a></li>
					<li align="center"><a href="<?php echo base_url();?>index.php/con_home/register_mitra" style="padding-left: 60px; padding-right: 60px;">SIGN UP Sebagai Mitra</a></li>
				</ul>
			</div>
			<!--/.navbar-collapse-->
	 <!--/.navbar-->
     </div>
	</nav>
  </div>
 </div>