<?php
    $dat = mysqli_query($conn,"select * from vendor,grooming,groomingcategory where groomingcategory.name_gcategory ='anjing'");
    

    ?>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example" width=100% cellpadding=0 cellspacing=0 border=0 valign=top>
      
    <tr>
	<td>Mitra</td>
	<td>Alamat</td>
	<td>No. Telp</td>
	<td>Waktu Operasional</td>
	<td>Paket Grooming</td>
	<td>Deskripsi Paket</td>
	<td></td>
      </tr>
      <?php
      $i=1;
     
      while($d=mysqli_fetch_array($dat)){
          
?>	         
        <tr>
            <td><?php echo $d['vendorname']; ?></td>
            <td><?php echo $d['location']; ?></td>
            <td><?php echo $d['hp']; ?></td>
            <td><?php echo $d['wop'];?></td>
            <td><?php echo $d['nama_paket'];?></td>
            <td><?php echo $d['description'];?></td>
            
              <td><a href="index.php?menu=pilihpaket&id_grooming=<?php echo $d['id_grooming']?>">pilih</a></td>   
            
            </tr>
      
        <?php 
            
            $i++;
        }
        ?>
    </table>