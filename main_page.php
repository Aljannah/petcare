<?php
	include_once "function.php";

	if (getParam("menu")=="" || getParam("menu")==null){
		echo "<h1 style='color:red;padding-left:20px;'>Dashboard</h1><br><br>";
		echo "<h4 style='padding-left:20px;'>Selamat datang ".$_SESSION['name']."</h4>";
	}
	if (getParam("menu")=="upload"){
		echo "<h1 style='color:red;padding-left:20px;'>Upload/Unggah Foto</h1><br><br>";
		include "uploadFoto.php";
	}
	if (getParam("menu")=="biodata"){
		echo "<h1 style='color:red;padding-left:20px;'>My Account</h1><br><br>";
		include "biodata.php";
	}
    if (getParam("menu")=="editbiodata"){
		echo "<h1 style='color:red;padding-left:20px;'>Edit Biodata</h1><br><br>";
		include "editbiodata2.php";
	}
    if (getParam("menu")=="groomanjing"){
		echo "<h1 style='color:red;padding-left:20px;'>Edit Biodata</h1><br><br>";
		include "groomanjing.php";
	}
    if (getParam("menu")=="groomkucing"){
		echo "<h1 style='color:red;padding-left:20px;'>Edit Biodata</h1><br><br>";
		include "groomkucing.php";
	}


?>