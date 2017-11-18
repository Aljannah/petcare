<h2>PetGrooming For Dogs</h2>
<?php
    $dat = mysqli_query($conn,"SELECT partners.user_partners,partners.partners_name,partners.address,partners.wop,partners.city,partners.file_gambar FROM partners,petgrooming WHERE petgrooming.petcategory='Anjing' AND partners.user_partners=petgrooming.user_partners");
    $i=1;
     
      while($d=mysqli_fetch_array($dat)){
       

    ?>
    
         
         
					
			           <!--Default Item-->
			            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all <?php echo $d['partners_name']; ?> " style="display: inline-block;">
			                <div class="inner-box">
			                    <div class="single-item center">
								<div class="product-item">
								<form method="post" action="index2.php?menu=lihat_paket&id=<?php echo $d["user_partners"]; ?>">
								<div class="product-image"><figure class="image-box"><img src="images/mitra/<?php 
                                
                                if($d["file_gambar"]==""){
                                echo "pecareid.png";    
                                }
                                else{
                                echo $d["file_gambar"]; } ?>" alt="" style="width:200px; height:auto; "></figure></div>
			                        <div class="content">
										<div><strong><h3><a href="index2.php?menu=lihat_paket&id=<?php echo $d["user_partners"]?>">
										<?php echo $d["partners_name"]  ; ?></strong></div></a></h3>
										
										<input type="text" value="01"  hidden> 
                                        <div class=" price product-price"><?php echo "Alamat :". $d["address"]; ?></div>
			                            <div class=" price product-price"><?php echo "<br>Kota/Kabupaten :". $d["city"]; ?></div>
			                        </div>
			                        <div class="overlay-box">
			                        	<div class="inner">
				                        	<div class="top-content">
				                        		<ul>
				                        			<!--<li><a href="#"><span class="fa fa-eye"></span></a></li>-->
													<div>
													<input type="text" name="quantity" value="1" size="2" hidden />
													<li class="tultip-op"><span class="tultip"><i class=""></i>Lihat detail</span><a href="index2.php?menu=lihat_paket&id=<?php echo $d["user_partners"]?>"><span class="fa fa-eye"></span></a>
				                        			
													</div>
				                        			<!--<li><a href="#"><span class="fa fa-heart-o"></span></a></li>-->
				                        		</ul>
				                        	</div>
				                        	<div class="bottom-content">
												
				                        		<p><?php echo "Waktu Operasional :". $d["wop"]; ?></p>
				                        	</div>
			                        	</div>
			                        </div>
								</form>
								</div>	
				                </div>
			                </div>
			            </div>
                        
						<?php } ?>
