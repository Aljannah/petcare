<?php
	require __DIR__ .'/config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Login :: PetCare.id</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	 <!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<!--clock init-->
</head> 
<body>
	<!--/login-->
	<div class="error_page">
		<!--/login-top-->
		<div class="error-top" style="width: 566px; left: 350px;">
			<center><img style="width:250px;height:130px;" src="images/pecareid.png"/><br><br> </center>
			<div class="login">
			<form name='form' method='POST' action='register_account_mitra.php '>
				<table style="width: 500px;">
					<tr>
						<td><input type='text' placeholder="Username" name='user_partners'></td>
						<td><input type='password' placeholder="Password" name='password'></td>
					</tr>
					<tr>
						<td><input type='text' placeholder="Nama Lengkap" name='partners_name'></td>
						<td><input type='text' placeholder="Email" name='email'></td>
					</tr>
					<tr>
						<td><input type='text' placeholder="Alamat" name='address'></td>
						<td><input type='text' placeholder="Kota" name='city'></td>
					</tr>
					<tr>
						<td><input type='text' placeholder="Kode Pos" name='postal_code'></td>
						<td><input type='text' placeholder="No Handphone" name='hp'></td>
					</tr>
					<tr>
						<td><input type='text' placeholder="Waktu Operasional" name='wop'></td>
						<td><input type='text' placeholder="Owner" name='owner'></td>
					</tr>
					<tr>
						<td><select name="prodi_en" style="width: 257px;height: 47px;">
							<option value='PI'>Care Type</option>
								<?php
								$q = mysqli_query($conn, "select * from care_type");
								while($d = mysql_fetch_array($q)){
									echo "<option value='$d[id_caretype]' $aktif>$d[name_caretype]</option>";
								}
								?>
						</select></td>
					</tr>

					<tr>
						<td colspan="2"><input type='submit' name='tekan' value='Sign Up' style="margin-top: 10px;"/></td>
					</tr>
				</table>
				<div class="new">
					<p > Sudah punya akun ? <a title='Klik untuk Mendaftar' href="login_customer.php">Login</a><br></p>
					<div class="clearfix"></div>
				</div>
			</form>
			</div>
		</div>
		<!--//login-top-->
	</div>
	<!--//login-->
	<!--footer section start-->
	<div class="footer">
		<div class="error-btn">
			<a><br></a>
		</div>
		<p><br><br><br></a></p>
	</div>
	<!--footer section end-->
	<!--/404-->
	<!--js -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	   <script src="js/bootstrap.min.js"></script>
</body>
</html>