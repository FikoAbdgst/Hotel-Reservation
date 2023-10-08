<?php
	session_start();

	include 'fiko_koneksi.php';

	$fiko_username = $_POST['fiko_username'];
	$fiko_password = md5($_POST['fiko_password']);

	$fiko_login = mysqli_query($fiko_koneksi, "select * from fiko_tamu where fiko_username='$fiko_username' and fiko_password= '$fiko_password'");
	$fiko_cek = mysqli_num_rows($fiko_login);


	if($fiko_cek > 0){

	$fiko_data = mysqli_fetch_assoc($fiko_login);

		if ($fiko_data ['fiko_no_identitas'] ){
				$_SESSION['fiko_username'] = $fiko_username;
				$_SESSION['status'] = 'login_tamu';
				header("location:fiko_tamu/fiko_tamu.php");
			}
		}
	else {
			header("location:fiko_login_tamu.php?pesan=gagal" );

	
	}
	?>