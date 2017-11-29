  <?php $this->load->view('layout/header')?>
  <!--/start-banner-->
  <div class="banner two">
       <div class="container">
	       <h2 class="inner-tittle">Contact Us</h2>
        </div>
  </div>
<!--//end-banner-->

<!--/contact-->
	 <div class="section-contact">
	    <div class="container">
				<!--<div class="contact-main">
					<div class="col-md-6 contact-in">
						<h5>Silahkan menghubungi kami melalui form ini !</h5>
						<p class="para1">Apakah Anda tertarik untuk memposting, mengiklankan atau menjadi mitra dengan Mahasiswa Cerdas ? Anda bisa mengisi formulir pada form ini.  </p></br>
						<p class="para1">Anda bisa memberi komentar, saran yang bernilai positif terhadap pengembangan <i>website </i>ini.  </p>
						<div class="more-address"> 
								<address>
								  <strong></strong><br>
								  <br>
								  <br>
								  <abbr title="Phone"></abbr>  
								</address>
								<address>
								  <strong></strong><br>
								  <a href="mailto:info@example.com"></a>
							   </address>
						  </div>
					</div>
					<div class="col-md-6 contact-grid">
					<FONT COLOR="red"><div><?= validation_errors()?></div></FONT>
						<?php echo form_open_multipart('con_contact/hubungi');?>
						
							<p class="your-para">Nama Anda :</p>
							<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda" value="<?= set_value('nama') ?>" onfocus>
							<p class="your-para">Email Anda :</p>
							<input type="text" class="form-control" name="email" placeholder="Masukkan Email Anda" value="<?= set_value('email') ?>" onfocus>
							<p class="your-para">Nomor Telepon Anda :</p>
							<input type="text" class="form-control" name="telepon" placeholder="Masukkan Telepon Anda" value="<?= set_value('telepon') ?>" onfocus>
							<p class="your-para">Subjek Pesan :</p>
							<input type="text" class="form-control" name="subjek" placeholder="Masukkan Subjek Pesan" value="<?= set_value('subjek') ?>" onfocus>
							<p class="your-para">Pesan Anda :</p>
							<textarea cols="77"  name="pesan" placeholder="Pesan"><?= set_value('pesan') ?></textarea>
							
							<button type="submit" class="btn btn-primary" ><i class="glyphicon glyphicon-hdd"></i> Kirim</button>
      
      						<button type="reset" name="reset" id="reset" class="btn btn-default"><i class="icon-cycle"></i> Reset</button>

					</div>
						<div class="clearfix"> </div>
			      </div>
			      </br>
			      </br>
				  	
				 <h3 class="h-tittle">Find Us</h3>
					<div class="map">
						<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.436988462087!2d107.77356509999998!3d-6.924215599999989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e653eb17e239%3A0xc6192a1f92aa9e41!2sUniversitas+Padjadjaran!5e0!3m2!1sid!2sid!4v1448686189472" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
					</div>
					<div class="map-bottom">
					
					<div class="col-md-4 adrs-left adrs-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<p><a href="mailto:"></a></p>
					</div>
					<div class="col-md-4 adrs-left adrs-middle">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						<p></p>
					</div>
					<div class="col-md-4 adrs-left adrs-right">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						<p></p>
					</div>

					<div class="clearfix"></div>
				</div>

						<!--//map-->
	       </div>
     </div>
<!--//contact-->

<?php $this->load->view('layout/footer')?>