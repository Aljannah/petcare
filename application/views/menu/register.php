 	<?php $this->load->view('layout/header');?>

  <!--/start-banner-->
  <div class="banner two">
       <div class="container">
	       <h2 class="inner-tittle">Pendaftaran Member Baru</h2>
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
				<div class="col-md-6 account-left">
					<form method="post" action="<?php echo site_url('con_registvalid') ?>">
					<div class="account-top heading">
						<h3>Daftar Member Baru</h3>
						<input type="hidden" name="role" value="2">
						<input type="hidden" name="status" value="Belum Dikonfirmasi">
					</div>
					<!--<div class="address">
						<?php echo form_error('id_pengguna'); ?>
						<span>Nama Lengkap</span>
						<input type="text" placeholder="Masukkan nama depan" name="nama_depan">
					</div> -->
					<div class="address">
						<?php echo form_error('name'); ?>
						<span>Nama Lengkap</span>
						<input type="text" placeholder="Masukkan Nama Lengkap" name="name" value="<?php echo set_value('name', '') ?>">
					</div>
					<div class="address">
						<?php echo form_error('username'); ?>
						<span>Username</span>
						<input type="text" placeholder="Masukkan username" name="username" value="<?php echo set_value('username', '') ?>">
					</div>
					<div class="address">
						<?php echo form_error('password'); ?>
						<span>Password</span>
						<input type="password" name="password" placeholder="Masukkan password" name="password" value="<?php echo set_value('password', '') ?>">
					</div>
					<div class="address">
						<?php echo form_error('repass'); ?>
						<span>Re-enter Password</span>
						<input type="password" name="repass" placeholder="Masukkan ulang password" name="repass" value="<?php echo set_value('repass', '') ?>">
					</div>
					<div class="address">
						<?php echo form_error('email'); ?>
						<span>E-mail</span>
						<input type="email" placeholder="Masukkan e-mail" name="email" value="<?php echo set_value('email', '') ?>">
					</div>
					<div class="address">
						<?php echo form_error('address'); ?>
						<span>Alamat</span>
						<input type="text" placeholder="Masukkan Alamat" name="address" value="<?php echo set_value('address', '') ?>">
					</div>
					<div class="address">
						<?php echo form_error('city'); ?>
						<span>Kota</span>
						<input type="text" placeholder="Masukkan Kota" name="city" value="<?php echo set_value('city', '') ?>">	
					</div>
					<div class="address">
						<?php echo form_error('postal_code'); ?>
						<span>Kode Pos</span>
						<input type="text" placeholder="Masukkan Kode Pos" name="postal_code" value="<?php echo set_value('postal_code', '') ?>">
					</div>
					<div class="address">
						<?php echo form_error('hp'); ?>
						<span>No. Handphone</span>
						<input type="text" placeholder="Masukkan Handphone" name="hp" value="<?php echo set_value('hp', '') ?>">
					</div>
					
					<div class="address new">
						<input type="submit" name="submit" value="Register">
					</div>
					</form>
				</div> 

				
				<!--<div class="col-md-6 account-left second">
					<form>
						<div class="account-top heading">
							<h3>REGISTERED CUSTOMERS</h3>
						</div>
						<div class="address">
							<span>Email Address</span>
							<input type="text">
						</div>
						<div class="address">
							<span>Password</span>
							<input type="password">
						</div>
						<div class="address">
							<a class="forgot" href="#">Forgot Your Password?</a>
							<input type="submit" value="Login">
						</div>
					 </form>
					  </div>
					-->
				 </div>
				<div class="clearfix"></div>
			</div>
	  </div>

	  <?php $this->load->view('layout/footer');?>