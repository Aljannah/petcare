<?php 
    include_once "config.php";
    if(isset($_POST['tekan'])){        
		$usernam		e=$_POST['username'];
		$password		=$_POST['password'];
		$name			=$_POST['name'];
		$email			=$_POST['email'];
		$address		=$_POST['address'];
		$city			=$_POST['city'];
		$postal_code	=$_POST['postal_code'];
		$hp				=$_POST['hp'];

		mysqli_query($conn,"INSERT INTO customer (username, password, name, email, address, city, postal_code, hp) 
					VALUES ('".$username."','".$password."','".$name."','".$email."','".$address."','".$city."','".$postal_code."','".$hp."')" );
		echo "<script>alert('Data berhasil dimasukkan'); window.location='login_customer.php'</script>";
        }
?>