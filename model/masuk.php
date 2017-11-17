<?php 
    include_once "config.php";
    if(isset($_POST['tekan'])){        
		$username=$_POST['username'];  
		$billname=$_POST['billname'];
		$billaddress=$_POST['billaddress'];
		$billcity=$_POST['billcity'];
		$notelp=$_POST['notelp'];
		$email=$_POST['email'];
		$tanggal_grooming=$_POST['tanggal_grooming'];
		$paket=$_POST['paket'];
		$qty=$_POST['qty'];
        $mitra=$_POST['mitra'];
        $id_paket=$_POST['id_package'];
        $id_partners=$_POST['user_partners'];
        $harga_per_unit=$_POST['unit_price'];
        $total = $harga_per_unit * $qty;
        /*echo $tanggal_grooming;
        echo $billname;
        echo $billaddress;
        echo $billcity;
        echo $notelp;
        echo $email;
        echo $paket;
        echo $qty;
        echo $mitra;
        echo $id_paket;
        echo $id_partners;
        echo $harga_per_unit;
        
        echo $total;
		*/
        
        mysqli_query($conn,"INSERT INTO order_det (quantity, unit_price, id_petgrooming, user_partners) VALUES ('".$qty."','".$harga_per_unit."','".$id_paket."','".$id_partners."')");
                     
        mysqli_query($conn,"INSERT INTO orders (total, user_customer) VALUES ('".$total."','".$username."')");
        
        mysqli_query($conn,"INSERT INTO invoice (billname, billaddress,billcity, billemail,payment_stat,information) VALUES ('".$billname."','".$billaddress."','".$billcity."','".$email."','-".$total."','menunggu konfirmasi mitra')");
         
		echo "<script>alert('Data berhasil dimasukkan ke keranjang'); window.location='index2.php'</script>";
        }
?>