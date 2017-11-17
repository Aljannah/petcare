<?php
	include_once "/../function.php";

	/*if (getParam("menu")=="" || getParam("menu")==null){
		echo "<h1 style='color:red;padding-left:20px;'>Dashboard</h1><br><br>";
		echo "<h4 style='padding-left:20px;'>Selamat datang ".$_SESSION['name']."</h4>";
	}*/
    if (getParam("menu")=="tentang"){
		include "/view/about.php";
	}


	if (getParam("menu")=="upload"){
		include "/view/uploadFoto.php";
	}
	if (getParam("menu")=="biodata"){
		include "/view/biodata.php";
	}
    if (getParam("menu")=="groomanjing"){
		include "/view/groomanjing.php";
	}
    if (getParam("menu")=="groomkucing"){
		include "/view/groomkucing.php";
	}
    if (getParam("menu")=="FAQ"){
		include "/view/faq.php";
	}
    if (getParam("menu")=="petshop_anjing"){
		include "/view/petshopanjing.php";
	}
    if (getParam("menu")=="tas"){
		include "/view/tas.php";
	}
    if (getParam("menu")=="petshop_kucing"){
		include "/view/petshopkucing.php";
	}
    if (getParam("menu")=="lihat_detail"){//untuk lihat paket kucing
        $query=mysqli_query($conn,"SELECT * from petgrooming where user_partners = '$_GET[id]' AND petcategory='Kucing'");
        include "/view/lihat_detail.php";
	}
    if (getParam("menu")=="lihat_paket"){//untuk lihat paket kucing
        $query=mysqli_query($conn,"SELECT * from petgrooming where user_partners = '$_GET[id]' AND petcategory='Anjing'");
        include "/view/lihat_paket.php";
	}
    if (getParam("menu")=="invoice"){//untuk lihat paket kucing
        $query=mysqli_query($conn,"SELECT * FROM partners,petgrooming WHERE petgrooming.id_petgrooming='$_GET[id]' AND partners.user_partners=petgrooming.user_partners");
        include "/view/invoice.php";
	}


?>