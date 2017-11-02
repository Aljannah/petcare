<?php 
    include_once "config.php";
    if(isset($_POST['tekan'])){
	        
            $username=$_POST['username'];
            $namalengkap=$_POST['namalengkap'];
            $email=$_POST['email'];
            $notelp=$_POST['notelp'];
            $alamat=$_POST['alamat'];
            $password=$_POST['password'];
            
            mysqli_query($conn,"INSERT INTO customer (username, password, name, email, hp, location) VALUES ('".$username."','".$namalengkap."','".$email."','".$notelp."','".$alamat."','".$password."') ");
            echo "<script>alert('Data berhasil diubah'); window.location='index.php'</script>";
  
        }
?>