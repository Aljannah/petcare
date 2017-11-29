 	<?php $this->load->view('layout/header');?>

  <!--/start-banner-->
  <div class="banner two">
       <div class="container">
	       <h2 class="inner-tittle">Pendaftaran Mitra Baru</h2>
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
					<form method="post" action="<?php echo site_url('con_registvalid_mitra') ?>">
					<div class="account-top heading">
						<h3>Daftar Sebagai Mitra Baru</h3>
						<input type="hidden" name="id_level" value="2">
						<input type="hidden" name="status" value="Belum Dikonfirmasi">
					</div>
					<!--<div class="address">
						<?php echo form_error('id_pengguna'); ?>
						<span>Nama Lengkap</span>
						<input type="text" placeholder="Masukkan nama depan" name="nama_depan">
					</div> -->
					<div class="address">
						<?php echo form_error('nama_depan'); ?>
						<span>Nama Pemilik</span>
						<input type="text" placeholder="Masukkan nama depan" name="nama_depan" value="<?php echo set_value('nama_depan', '') ?>">
					</div>
					<div class="address">
						<?php echo form_error('nama_petcare'); ?>
						<span>Nama Perusahaan</span>
						<input type="text" placeholder="Masukkan nama perusahaan" name="nama_petcare" value="<?php echo set_value('nama_petcare', '') ?>">
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
						<?php echo form_error('alamat'); ?>
						<span>E-mail</span>
						<input type="text" placeholder="Masukkan alamat perusahaan" name="alamat" value="<?php echo set_value('alamat', '') ?>">
						
					</div>

					<div class="address">
						<?php echo form_error('hp'); ?>
						<span>Nomor Telepon/Handphone</span>
						<input type="text" placeholder="Masukkan nomor telepon/handphone" name="hp" value="<?php echo set_value('hp', '') ?>">
						
					</div>

					<div class="address">
						<?php echo form_error('city'); ?>
						<span>Kabupaten/Kota</span>
						<input type="text" placeholder="Masukkan alamat kabupaten/kota perusahan" name="city" value="<?php echo set_value('city', '') ?>">
						
					</div>
					<div class="address">
						<?php echo form_error('postal_code'); ?>
						<span>Kode Pos</span>
						<input type="text" placeholder="Masukkan kodepos" name="postal_code" value="<?php echo set_value('postal_code', '') ?>">
						
					</div>
					<div class="address">
						<?php echo form_error('wop'); ?>
						<span>Waktu Operasional</span>
						<input type="text" placeholder="Masukkan waktu operasional perusahaan" name="wop" value="<?php echo set_value('wop', '') ?>">
						
					</div>
					<div class="address">
						<?php echo form_error('id_caretype'); ?>
						<span>Tipe Perusahaan</span>
						<select name="id_caretype">
								  <option value="">Pilih tipe perusahaan</option>
								  <option value="1">PetShop</option>
								  <option value="2">PetGrooming</option>
								  <option value="3">PetGrooming dan PetShop</option>
						</select>
					</div>
					<input type="hidden" name="role" value="<?php echo set_value('role', '3') ?>">
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