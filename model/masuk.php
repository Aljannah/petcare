<?php 
    include_once "config.php";
    if(isset($_POST['tekan'])){        
		$billname=$_POST['billname'];
		$billaddress=$_POST['billaddress'];
		$billcity=$_POST['billcity'];
		$notelp=$_POST['notelp'];
		$email=$_POST['email'];
		$tanggal_grooming=$_POST['tanggal_grooming'];
		$paket=$_POST['paket'];
		$qty=$_POST['qty'];
        $mitra=$_POST['mitra'];
        $hp=$_POST['hp'];

		
		echo "<script>alert('Data berhasil dimasukkan'); window.location='index2.php'</script>";
        }
?>