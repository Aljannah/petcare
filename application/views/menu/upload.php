<link href="<?php echo base_url()?>assets2/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

<!DOCTYPE HTML>
<html>
<head>
<title>PetCare.id</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Motive Mag Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url();?>assets/css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />	
<link type="text/css" href="<?php echo base_url();?>assets3/css/theme.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/js/jquery.min.js"> </script>
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

  <!--/start-banner-->
  <div class="banner two">
       <div class="container">
	       <h2 class="inner-tittle">Masukkan Paket Pet Grooming</h2>
        </div>
  </div>
   <?php
  	/*if($this->session->flashdata('success')){
  		echo $this->session->flashdata('success');
  	}
  	if(validation_errors()){
  		echo validation_errors();
  	} */
  ?> 
   <!--//end-banner-->
<!--account-->
   <div class="account">
	  <div class="container"> 
	       <div class="account-bottom">
			 <div class="col-md-6 contact-grid">
						<?php echo form_open_multipart('con_upload/uploadevent1');?>
							<input type="hidden" name="status_konfirm" value="Konfirmasi">
							
							<?php echo form_error('id_petgrooming'); ?>
							<p class="your-para">Kode Paket PetGrooming:</p>
							<input type="text" name="id_petgrooming" value="<?=$kodeunik?>" readonly>
							<?php echo form_error('package_name'); ?>
							<p class="your-para">Nama Paket :</p>
							<input type="text" name="package_name" value="<?php echo set_value('package_name', '') ?>">
							<?php echo form_error('description'); ?>
							<p class="your-para">Deskripsi Paket :</p>
							<textarea cols="77" rows="6" name="description" value="<?php echo set_value('description', '') ?>"></textarea>
							<?php echo form_error('price'); ?>
							<p class="your-para">Harga (Rp.) :</p>
							<input type="text" name="price" value="<?php echo set_value('price', '') ?>">
							<?php echo form_error('petcategory'); ?>
							<p class="your-para">Kategori Hewan :</p>
							<div class="controls">
							<select name="petcategory" value="<?php echo set_value('petcategory', '') ?>">
						      <option value="">Pilih</option>
						      <option value="Anjing">Anjing</option>
						      <option value="Kucing">Kucing</option>
						     </select>
						 	</div>
						 	<!--<?php echo form_error('poster'); ?>
							<p class="your-para">Gambar Paket :</p>
							<input type="file" name="poster">-->
							
							<div class="send">
							<input type="submit" value="Simpan" name="submit">
							<?=  anchor('con_user','Back',['class'=>'btn btn-danger']) ?>
							</div>
							</form>
					</div>

				
				
					
				 </div>
				
			</div>
	  </div>

	  <?php $this->load->view('layout/footer');?>
  

	  <script type="text/javascript" src="<?php echo base_url()?>assets2/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets2/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

<!-- Fungsi datepickier yang digunakan -->
<script type="text/javascript">
 $('.datepicker').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
    });
</script> 