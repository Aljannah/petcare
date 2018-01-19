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
	       		<div class="row">
					<div class="col-md-6 contact-grid">
						<form method="post" action="<?php echo site_url('con_registvalid_mitra') ?>">
						<div class="account-top heading">
							<input type="hidden" name="id_level" value="2">
							<input type="hidden" name="status" value="Belum Dikonfirmasi">
						</div>
						<!--<div class="address">
							<?php echo form_error('id_pengguna'); ?>
							<span>Nama Lengkap</span>
							<input type="text" placeholder="Masukkan nama depan" name="nama_depan">
						</div> -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 contact-grid">
							<?php echo form_error('nama_depan'); ?>
							<span>Nama Pemilik</span>
							<input type="text" placeholder="Masukkan nama Pemilik" name="nama_depan" value="<?php echo set_value('nama_depan', '') ?>">
					</div>
					<div class="col-md-6 contact-grid" style="float: right;">
							<?php echo form_error('nama_petcare'); ?>
							<span>Nama Perusahaan</span>
							<input type="text" placeholder="Masukkan nama perusahaan" name="nama_petcare" value="<?php echo set_value('nama_petcare', '') ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 contact-grid">
						<div class="address">
							<?php echo form_error('username'); ?>
							<span>Username</span>
							<input type="text" placeholder="Masukkan username" name="username" value="<?php echo set_value('username', '') ?>">
						</div>
					</div>
					<div class="col-md-6 contact-grid" style="float: right;">
						<div class="address">
							<?php echo form_error('password'); ?>
							<span>Password</span>
							<input type="password" name="password" placeholder="Masukkan password" name="password" value="<?php echo set_value('password', '') ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 contact-grid">
						<div class="address">
							<?php echo form_error('repass'); ?>
							<span>Re-enter Password</span>
							<input type="password" name="repass" placeholder="Masukkan ulang password" name="repass" value="<?php echo set_value('repass', '') ?>">
						</div>
					</div>
					<div class="col-md-6 contact-grid" style="float: right;">
						<div class="address">
							<?php echo form_error('email'); ?>
							<span>E-mail</span>
							<input type="email" placeholder="Masukkan e-mail" name="email" value="<?php echo set_value('email', '') ?>">
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 contact-grid">
						<div class="address">
							<?php echo form_error('alamat'); ?>
							<span>Alamat Lengkap Perusahaan</span>
							<input type="text" placeholder="Masukkan alamat perusahaan" name="alamat" value="<?php echo set_value('alamat', '') ?>">
						</div>
					</div>
					<div class="col-md-6 contact-grid" style="float: right;">
						<div class="address">
							<?php echo form_error('hp'); ?>
							<span>Nomor Telepon/Handphone</span>
							<input type="text" placeholder="Masukkan nomor telepon/handphone" name="hp" value="<?php echo set_value('hp', '') ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 contact-grid">
						<div class="address">
							<?php echo form_error('city'); ?>
							<span>Kabupaten/Kota</span>
							<select name="city">
									  <option value="">Pilih Kabupaten/Kota yang tersedia</option>
									  <option value="Jakarta Selatan">Jakarta Selatan</option>
									  <option value="Jakarta Pusat">Jakarta Pusat</option>
									  <option value="Jakarta Timur">Jakarta Timur</option>
									  <option value="Jakarta Barat">Jakarta Barat</option>
									  <option value="Jakarta Utara">Jakarta Utara</option>
									  <option value="Depok">Depok</option>
									  <option value="Tangerang">Tangerang</option>
									  <option value="Bekasi">Bekasi</option>
									  <option value="Bogor">Bogor</option>
							</select>
						</div>	
					</div>
					<div class="col-md-6 contact-grid" style="float: right;">
						<div class="address">
							<?php echo form_error('postal_code'); ?>
							<span>Kode Pos</span>
							<input type="text" placeholder="Masukkan kodepos" name="postal_code" value="<?php echo set_value('postal_code', '') ?>">
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 contact-grid">
						<div class="address">
							<?php echo form_error('wop'); ?>
							<span>Waktu Operasional</span>
							<input type="checkbox" name="wopsenin" value="Senin"><label>Senin</label>
							<input type="checkbox" name="wopselasa" value="Selasa"><label>Selasa</label>
							<input type="checkbox" name="woprabu" value="Rabu"><label>Rabu</label>
							<input type="checkbox" name="wopkamis" value="Kamis"><label>Kamis</label>
							<input type="checkbox" name="wopjumat" value="Jumat"><label>Jumat</label>
							<input type="checkbox" name="wopsabtu" value="Sabtu"><label>Sabtu</label>
							<input type="checkbox" name="wopminggu" value="Minggu"><label>Minggu</label>
							<!--<input type="text" placeholder="Masukkan waktu operasional perusahaan" name="wop[]" value="<?php echo set_value('wop', '') ?>">-->			
						</div>
					</div>
					<div class="col-md-6 contact-grid" style="float: right;">
						<div class="address" >
							<?php echo form_error('wop_time_open_hour'); ?>
							<span>Waktu Operasional(Jam Buka)</span>
							<select name="wop_time_open_hour" style="max-width: 20%;">
									  <option value="">Pilih Jam</option>
									  <option value="00">00</option>
									  <option value="01">01</option>
									  <option value="02">02</option>
									  <option value="03">03</option>
									  <option value="04">04</option>
									  <option value="05">05</option>
									  <option value="06">06</option>
									  <option value="07">07</option>
									  <option value="08">08</option>
									  <option value="09">09</option>
									  <option value="10">10</option>
									  <option value="11">11</option>
									  <option value="12">12</option>
							</select>:
							<?php echo form_error('wop_time_open_mnt'); ?>
							<select name="wop_time_open_mnt" style="max-width: 20%;">
									  <option value="">Pilih Menit</option>
									  <option value="00">00</option>
									  <option value="30">30</option>
							</select>
							<?php echo form_error('wop_time_open_day'); ?>
							<select name="wop_time_open_day" style="max-width: 40%;">
									  <option value="">Pilih AM/PM</option>
									  <option value="AM">AM</option>
									  <option value="PM">PM</option>
							</select>
						</div>
						<div class="address">
							<?php echo form_error('wop_time_close_hour'); ?>
							<span>Waktu Operasional(Jam Tutup)</span>
							<select name="wop_time_close_hour" style="max-width: 20%;">
									  <option value="">Pilih Jam</option>
									  <option value="00">00</option>
									  <option value="01">01</option>
									  <option value="02">02</option>
									  <option value="03">03</option>
									  <option value="04">04</option>
									  <option value="05">05</option>
									  <option value="06">06</option>
									  <option value="07">07</option>
									  <option value="08">08</option>
									  <option value="09">09</option>
									  <option value="10">10</option>
									  <option value="11">11</option>
									  <option value="12">12</option>
							</select>:
							<?php echo form_error('wop_time_close_mnt'); ?>
							<select name="wop_time_close_mnt" style="max-width: 20%;">
									  <option value="">Pilih Menit</option>
									  <option value="00">00</option>
									  <option value="30">30</option>
							</select>
							<?php echo form_error('wop_time_close_day'); ?>
							<select name="wop_time_close_day" style="max-width: 40%;">
									  <option value="">Pilih AM/PM</option>
									  <option value="AM">AM</option>
									  <option value="PM">PM</option>
							</select>
						</div>
					</div>	
				</div>
						<!--<div class="address">
							 	<?php echo form_error('foto_mitra'); ?>
								<p class="your-para">Gambar Paket :</p>
								<input type="file" name="foto_mitra">
						</div>-->
						<!--<div class="address">
							<?php echo form_error('id_caretype'); ?>
							<span>Tipe Perusahaan</span>
							<select name="id_caretype">
									  <option value="">Pilih tipe perusahaan</option>
									  <option value="1">PetShop</option>
									  <option value="2">PetGrooming</option>
									  <option value="3">PetGrooming dan PetShop</option>
							</select>
						</div>-->
						<input type="hidden" name="role" value="<?php echo set_value('role', '3') ?>">
						<div class="address new">
							<input type="submit" name="submit" value="Register"  >

						</div>
						</form>
					</div> 
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