<?php
	session_start(); //kuncinya ada disini, tulis diawal script sebelum menulis yang lain
	 
	include("config.php");
	/* Ambil variabel */
	//global $username;
	$username = $_POST['username'];
	$pass = $_POST['password'];
	
	/* Validasi */
	$error = 0;
	if (isset($_POST['kirim']))
	{
		if( empty( $username ) || empty( $pass ) )
		{
			echo "<script>eval(\"parent.location='login_customer.php '\");
					alert (' Maaf Login Gagal!');
					</script>";
			$error++;
		}
		else
		{
			$sql = "SELECT * FROM customer WHERE username='$username'";
			$query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($query);
			
			if( empty( $row['username'] ) )
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
					$q = mysqli_query($conn,"SELECT * FROM customer
					     WHERE username='$username'");
					$data = mysqli_fetch_array($q);
					$_SESSION['name'] = $data['name'];
					$_SESSION['address'] = $data['address'];
					$_SESSION['foto'] = $data['foto'];
					
				} //end else
			} //end else
		}
	 
		if($error == 0)
		{
				?>
				<script language="JavaScript">alert('Selamat, Login Anda Sukses!!');
					window.location='index2.php'</script>
				<?php
		}
		else 
		{
			// jika login salah //
			?>
			<script language="Javascript">window.location='login_customer.php'</script>
			<?php
			//include("login.php");
		}
	}

?>