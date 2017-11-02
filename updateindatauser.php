<?php 
    include_once "config.php";
    if(isset($_POST['tekan'])){
	        
            $username=$_POST['username'];
            $nama=$_POST['nama'];
            $password=$_POST['password'];
            $alamat=$_POST['alamat'];
            $email=$_POST['email'];
            $hp=$_POST['hp'];
            
            
            mysqli_query($conn,"UPDATE customer SET         password='$password',
                                                            name='$nama',
                                                            email='$email',
                                                            hp='$hp',
                                                            location='$alamat'
                                                            where username= '$username' ");
            echo "<script>alert('Data berhasil diubah'); window.location='index.php'</script>";
  
        }
?>