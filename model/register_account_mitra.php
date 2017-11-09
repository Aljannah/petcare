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

		mysqli_query($conn,"INSERT INTO partners (user_partners, password, name, email, address, city, postal_code, hp) 
					VALUES ('".$user_partners."','".$password."','".$name."','".$email."','".$address."','".$city."','".$postal_code."','".$hp."')" );
		echo "<script>alert('Data berhasil dimasukkan'); window.location='index2.php'</script>";
        }
?>