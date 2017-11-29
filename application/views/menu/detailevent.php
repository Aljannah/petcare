<?php $this->load->view('layout/header');?>
 <!--/start-banner-->
  <div class="banner two">
       <div class="container">
	       <h2 class="inner-tittle">EVENT</h2>
        </div>
  </div>
   <!--//end-banner-->
<!--/contact-->
	 <div class="section-contact">
	    <div class="container">
				<div class="contact-main">
					<div class="col-md-6 contact-in">
						<h3> <?php echo $nama;?></h3>
						
						<div class="more-address"> 
								<address>
									<span class="glyphicon glyphicon-map-marker" style="font-size:26px"></span>
								  <strong style="color:#ee5656; font-size: 1.4em">LOKASI</strong><br>
								  <p><?php echo $lokasi;?></p>
								</address>
								<address>
									<span class="glyphicon glyphicon-calendar" style="font-size:26px"></span>
								  <strong style="color:#ee5656; font-size: 1.4em">TANGGAL</strong><br>
								  <p><?php echo $tanggal;?></p>
								</address>
								<address>
									<span class="glyphicon glyphicon-tag" style="font-size:26px"></span>
								  <strong style="color:#ee5656; font-size: 1.4em">KATEGORI EVENT</strong><br>
								  <p><?php echo $kategori;?></p>
								</address>
								<address>
									<span class="glyphicon glyphicon-user" style="font-size:26px"></span>
								  <strong style="color:#ee5656; font-size: 1.4em">PENYELENGGARA</strong><br>
								  <p><?php echo $universitas;?></p>
								</address>
								<address>
									<span class="glyphicon glyphicon-info-sign" style="font-size:26px"></span>
								  <strong style="color:#ee5656; font-size: 1.4em">INFORMASI LENGKAP</strong><br>
								  <form>
									<textarea cols="77" rows="6" readonly><?php echo $deskripsi;?></textarea>

								</form>
								  <!--<p><?php echo $deskripsi;?></p>-->
								</address>
							   
						  </div>
					</div>
					<div class="col-md-6 contact-grid">
						<form>
							<div>
								<a href="<?php echo base_url();?>assets/gambar/<?php echo $poster; ?>">
										<img src="<?php echo base_url();?>assets/gambar/<?php echo $poster; ?>" width="500" height="700" alt=""></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


<?php $this->load->view('layout/footer');?>