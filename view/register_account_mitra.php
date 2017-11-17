<?php 
    include_once "config.php";
    if(isset($_POST['tekan'])){        
		$user_partners=$_POST['user_partners'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$hp=$_POST['hp'];
		$partners_name=$_POST['partners_name'];
		$wop=$_POST['wop'];
		$owner=$_POST['owner'];
		$city=$_POST['city'];
		$postal_code=$_POST['postal_code'];
		$care_type=$_POST['care_type'];

		mysqli_query($conn,"INSERT INTO partners (user_partners, password, email, address, hp, partners_name, wop, owner, city, postal_code, id_caretype) 
					VALUES ('".$user_partners."','".$password."','".$email."','".$address."','".$hp."','".$partners_name."','".$wop."','".$owner."','".$city."','".$postal_code."','".$care_type."')" );
		echo "<script>alert('Data berhasil dimasukkan'); window.location='login_mitra.php'</script>";
        }
?>