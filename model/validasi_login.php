<?php
	session_start(); //kuncinya ada disini, tulis diawal script sebelum menulis yang lain
	 
	include("../config.php");
	/* Ambil variabel */
	//global $username;
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$jenis = $_POST['jenis'];
    
	/* Validasi */
	$error = 0;
	if (isset($_POST['kirim']))
	{
		if( empty( $username ) || empty( $pass ) )
		{
			if($jenis == 'mitra'){
                echo "<script>eval(\"parent.location='login_mitra.php '\");
					       alert (' Maaf Login Gagal!');
					       </script>";
			}
            if($jenis == 'customer'){
                
			         echo "<script>eval(\"parent.location='login_customer.php '\");
					       alert (' Maaf Login Gagal!');
					       </script>";
            }
			$error++;
		}
		else
		{
			if($jenis == 'mitra'){
                $sql = "SELECT * FROM partners WHERE user_partners='$username'";
                $query = mysqli_query($conn,$sql);
			    $row = mysqli_fetch_array($query);
			    $check = $row['user_partners'];
			}
            if($jenis == 'customer'){
                $sql = "SELECT * FROM customer WHERE username='$username'";
                $query = mysqli_query($conn,$sql);
			    $row = mysqli_fetch_array($query);
			    $check = $row['username'];
			}
            
			if( empty($check) )
			{
				echo '<script>window.alert("Username tidak dikenal");</script>';
				$error++;
			}
			else
			{
				if( $row['password'] != $pass )
				{
					echo '<script>window.alert("Password salah");</script>';
					$error++;
				}
				else
				{
				  /*Daftarkan ke server sbg variabel global*/
				  /* session_register() Sebaiknya tdk digunakan (Deprecated Function)
				  session_register( 'ID', 'PASS' );
				  */
					//$_SESSION['id_user'] = $row[id_user];
					$_SESSION['username'] = $username;
                    
                    $username = $_SESSION['username'];
					if($jenis == 'mitra'){
                           $q = mysqli_query($conn,"SELECT * FROM partners
					     WHERE user_partners='$username'");
                            $data = mysqli_fetch_array($q);
                            $_SESSION['name'] = $data['user_partners'];
                            $_SESSION['address'] = $data['address'];
                            $_SESSION['jenis'] = $jenis;
                    }
                    if($jenis == 'customer'){
                           $q = mysqli_query($conn,"SELECT * FROM customer
					               WHERE username='$username'");
                            $data = mysqli_fetch_array($q);
                            $_SESSION['name'] = $data['name'];
                            $_SESSION['address'] = $data['address'];
                            $_SESSION['jenis'] = $jenis;
                            $_SESSION['pos'] = $data['postal_code'];
                            $_SESSION['city'] = $data['city'];
                            $_SESSION['hp'] = $data['hp'];
                            $_SESSION['email'] = $data['email'];
                    }
					
                    
					
				} //end else
			} //end else
		}
	 
		if($error == 0)
		{
				?>
				<script language="JavaScript">alert('Selamat, Login Anda Sukses!!');
				window.location='../index2.php'</script>	
				<?php
		}
		else 
		{
			// jika login salah //
            if($jenis == 'Mitra'){
            ?>
                <script language="Javascript">window.location='../view/login_mitra.php'</script>
            <?php
            }
            if($jenis == 'customer'){
			?>
			    <script language="Javascript">window.location='../view/login_customer.php'</script>
			<?php
                    }
			//include("login.php");
		}
	}

?>