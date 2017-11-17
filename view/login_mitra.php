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
	<link href="../assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="../assets/css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="../assets/css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<link href='..///fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="../assets/css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="../assets/js/jquery-1.10.2.min.js"></script>
	<!--clock init-->
</head> 
<body>
	<!--/login-->
	<div class="error_page">
		<!--/login-top-->
		<div class="error-top">
			<center><img style="width:250px;height:130px;" src="../assets/images/pecareid.png"/><br><br> </center>
			<div class="login">
				<form action="../model/validasi_login.php" method="post">
					<input type="text" name="username" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
					<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                    <input type="hidden" name="jenis"  value="mitra" >
					<div class="submit">
						<input type="submit" name="kirim" value="Login" >
					</div>
					<div class="clearfix"></div>
					<div class="new">
						<p > Belum punya akun ? <a title='Klik untuk Mendaftar' href="register_mitra.php">Register</a><br></p>
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
	<script src="../assets/js/jquery.nicescroll.js"></script>
	<script src="../assets/js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	   <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>