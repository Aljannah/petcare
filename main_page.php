<?php
	include_once "function.php";

	if (getParam("menu")=="" || getParam("menu")==null){
		echo "<h1 style='color:red;padding-left:20px;'>Dashboard</h1><br><br>";
		echo "<h4 style='padding-left:20px;'>Selamat datang ".$_SESSION['nama']."</h4>";
	}
	if (getParam("menu")=="upload"){
		echo "<h1 style='color:red;padding-left:20px;'>Upload/Unggah Foto</h1><br><br>";
		include "uploadFoto.php";
	}
	if (getParam("menu")=="halamanutama"){
		echo "<h1 style='color:red;padding-left:20px;'>Halaman Utama Admin</h1><br><br>";
		include "halamanutamaadmin.php";
	}
	if (getParam("menu")=="biodata"){
		echo "<h1 style='color:red;padding-left:20px;'>My Account</h1><br><br>";
		include "biodata.php";
	}
    if (getParam("menu")=="editbiodata"){
		echo "<h1 style='color:red;padding-left:20px;'>Edit Biodata</h1><br><br>";
		include "editbiodata.php";
	}
    if (getParam("menu")=="pengajuancuti"){
		echo "<h1 style='color:red;padding-left:20px;'>Pengajuan Cuti</h1><br><br>";
		include "cuti.php";
	}
    
    if (getParam("menu")=="cetak"){
		include "cetak.php";
	}
    if (getParam("menu")=="lihatcuti"){
		echo "<h1 style='color:red;padding-left:20px;'>Melihat Daftar Pengajuan Cuti</h1><br><br>";
		include "ajuan.php";
	}
    if (getParam("menu")=="datamasterbagian"){
		
		include "datamasterbagian.php";
	}

    if (getParam("menu")=="delete"){
        mysqli_query($conn,"delete from pengajuancuti where kodepengajuan = '$_GET[kodepengajuan]'");
                       echo "<script>alert('Data berhasil dihapus'); window.location='index.php'</script>";
	}

    if (getParam("menu")=="setuju"){
        mysqli_query($conn,"UPDATE pengajuancuti SET statuspersetujuan = '1' where kodepengajuan = '$_GET[kodepengajuan]'");
        $data=mysqli_query($conn,"select * from pengajuancuti where kodepengajuan = '$_GET[kodepengajuan]'");
        while($row=mysqli_fetch_array($data)){
            $sisacuti = $row['sisacuti'];
            $username = $row['Username'];
        mysqli_query($conn,"UPDATE pegawai SET jumlahcuti='$sisacuti' where username = '$username'");
        }
                       echo "<script>alert('Data berhasil disetujui'); window.location='index.php'</script>";
	}


?>