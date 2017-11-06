<?php 
    include_once "config.php";
    if(isset($_POST['tekan'])){
	        
            $username=$_POST['username'];
			$password=$_POST['password'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $address=$_POST['address'];
			$city=$_POST['city'];
			$postal_code=$_POST['postal_code'];
            $hp=$_POST['hp'];
            
            mysqli_query($conn,"UPDATE customer SET         password	='$password',
                                                            name		='$name',
                                                            email		='$email',
															address		='$address',
															city		='$city',
															postal_code	='$postal_code',
                                                            hp='$hp',
                                                            where username= '$username' ");
            echo "<script>alert('Data berhasil diubah'); window.location='biodata.php'</script>";
        }
?>