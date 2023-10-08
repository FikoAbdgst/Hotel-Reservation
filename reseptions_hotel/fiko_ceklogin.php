<?php
	session_start();

	include 'fiko_koneksi.php';

	$fiko_username_user = $_POST['fiko_username_user'];
	$fiko_password_user = md5($_POST['fiko_password_user']);
	
	$fiko_data = mysqli_query($fiko_koneksi, "select * from fiko_user where fiko_username_user='$fiko_username_user' and fiko_password_user= '$fiko_password_user'");

	$fiko_cek = mysqli_num_rows($fiko_data);

	if ($fiko_cek > 0) {
		$fiko_login = mysqli_fetch_assoc($fiko_data);

		if ($fiko_login ['fiko_id_role'] == 1){
			$_SESSION['fiko_username_user'] = $fiko_username_user;
			$_SESSION['fiko_id_role'] = '1';
			$_SESSION['status'] = 'login';
			header("location:fiko_administrator.php");
		}
		else if ($fiko_login ['fiko_id_role'] == 2){
			$_SESSION['fiko_username_user'] = $fiko_username_user;
			$_SESSION['fiko_id_role'] = '2';
			$_SESSION['status'] = 'login';
			header("location:fiko_resepsionis.php");
		}
	}else {
			header("location:fiko_login.php?pesan=gagal" );

	}

	?>