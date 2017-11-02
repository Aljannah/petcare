<?php
	session_start();
	if( isset($_SESSION['username']) || isset($_SESSION['level']) )	{
		$_SESSION = array();
		session_destroy();
		echo"<script>window.location = 'login_page.php'</script>";
	}else{	
		echo"<script>window.location = 'index.php'</script>";
	}
?>