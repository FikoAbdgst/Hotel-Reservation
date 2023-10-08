<?php

include'../fiko_koneksi.php';
	
$fiko_id_kamar = $_POST['fiko_id_kamar'];	
$fiko_no_kamar = $_POST['fiko_no_kamar'];
$fiko_id_tipe = $_POST['fiko_id_tipe'];
$fiko_status = $_POST['fiko_status'];
$fiko_lantai = $_POST['fiko_lantai'];
	
	$fiko_data=mysqli_query($fiko_koneksi, "UPDATE fiko_kamar 
	set fiko_no_kamar='$fiko_no_kamar',
		fiko_id_tipe='$fiko_id_tipe',		
		fiko_status='$fiko_status',
		fiko_lantai='$fiko_lantai'
	where fiko_id_kamar='$fiko_id_kamar'");

if($fiko_data){
       echo "<script>alert('Data sudah di ubah');document.location='fiko_kamar.php'</script>";
	}
?>