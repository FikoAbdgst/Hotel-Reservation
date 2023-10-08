<?php
	 
	session_start();

	include '../fiko_koneksi.php';

	$fiko_no_kamar = $_POST['fiko_no_kamar'];
	$fiko_id_tipe = $_POST['fiko_id_tipe'];
	$fiko_status = $_POST['fiko_status'];
	$fiko_lantai = $_POST['fiko_lantai'];
	

	$fiko_data = mysqli_query($fiko_koneksi, "INSERT INTO fiko_kamar values (
		'',
		'$fiko_no_kamar',
		'$fiko_id_tipe', 
		'$fiko_status',
		'$fiko_lantai')");
	
		if($fiko_data){
     
        echo "<script>alert('Data berhasil di masukkan');document.location='fiko_kamar.php'</script>";
	}

?>