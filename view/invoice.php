<h2>Masukkan Data Anda</h2>
<?php
    $i=1;
     
      while($d=mysqli_fetch_array($query)){
       

    ?>
			
			<div class="invoice">
			<form name='form' method='POST' action='#'>
				<table style="width: 100%;">
					<tr>
                        <h5>harga per-paket/hewan : Rp.<?php echo $d['price']; ?>,-</h5>
                        <input type='hidden' name='billname' value="<?php echo $_SESSION['name']; ?>" >
                        <input type='hidden' name='username' value="<?php echo $_SESSION['username']; ?>" >
						<td>Alamat Lengkap: <input type='text' placeholder="Alamat Lengkap" name='billaddress' value="<?php echo $_SESSION['address']; ?>" ></td>
                        <td>Kota/Kabupaten: <input type='text' placeholder="Kota/Kabupaten" name='billcity' value="<?php echo $_SESSION['city']; ?>" ></td>
					</tr>
					<tr>
						<td>Nomor telepon:<input type='text' placeholder="Nomor telepon" name='notelp' value="<?php echo $_SESSION['hp']; ?>" ></td>
						<td>Email: <input type='text' placeholder="Email" name='email' value="<?php echo $_SESSION['email']; ?>" ></td>
					</tr>
					<tr>
						<td>Tanggal Grooming: <input type='date' name='tanggal_grooming'></td>
                        <td>Jenis Paket: <input type='text' name='paket' value="<?php echo $d['package_name']; ?>" readonly ></td> 
                        <input type='hidden' name='id_package' value="<?php echo $d['id_petgrooming']; ?>" >
                        <input type='hidden' name='user_partners' value="<?php echo $d['user_partners']; ?>" >
                        <input type='hidden' name='unit_price' value="<?php echo $d['price']; ?>" >
					</tr>
                    <tr>
						<td><?php if( $d['petcategory']=="Anjing"){ ?>
                            Jumlah Anjing :     
                            <?php }
                            else { ?>
                            Jumlah Kucing :
                            <?php } ?>
                            <select name="qty">
                                                <option value="">Select...</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>

                            </select></td>
                        <td>Jenis Paket: <input type='text' name='mitra' value="<?php echo $d['partners_name']; ?>" readonly></td> 
					</tr>
					<tr>
						<td colspan="2"><input type='submit' name='tekan' value='Pesan'/></td>
					</tr>
				</table>
			</form>
			</div>
            <?php include "/model/masuk.php"; ?>

<?php
      }
?>