
<?php
    $i=1;
     
      while($d=mysqli_fetch_array($query)){
       

    ?>
<h2>PetGrooming For Cats From  <?php echo $d['partners_name']; ?></h2>
         
         
					
			           <!--Default Item-->
			            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all <?php echo $d['id_petgrooming']; ?> " style="display: inline-block;">
			                <div class="inner-box">
			                    <div class="single-item center">
								<div class="product-item">
								<form method="post" action="index2.php?menu=invoice&id=<?php echo $d["id_petgrooming"]; ?>">
								
			                        <div class="content">
										<div><strong><h3><a href="index2.php?menu=invoice&id=<?php echo $d["id_petgrooming"]?>">
										<?php echo $d["package_name"]  ; ?></strong></div></a></h3>
										
										<input type="text" value="01"  hidden> 
			                            <div class=" price product-price"><?php echo "Deskripsi Paket:". $d["description"]; ?></div>
			                        </div>
			                        <div class="overlay-box">
			                        	<div class="inner">
				                        	<div class="top-content">
				                        		<ul>
				                        			<!--<li><a href="#"><span class="fa fa-eye"></span></a></li>-->
													
				                        			<!--<li><a href="#"><span class="fa fa-heart-o"></span></a></li>-->
				                        		</ul>
				                        	</div>
				                        	<div class="bottom-content">
												
				                        		<p><?php echo "Harga :". $d["price"]; ?></p>
				                        	</div>
			                        	</div>
			                        </div>
								</form>
								</div>	
				                </div>
			                </div>
			            </div>
                        
						<?php } ?>