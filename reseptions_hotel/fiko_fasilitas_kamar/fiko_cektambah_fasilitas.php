<?php
session_start();
include'../fiko_koneksi.php';

$fiko_id_tipe = $_POST['fiko_id_tipe'];
$fiko_tipe_kamar = $_POST['fiko_tipe_kamar'];
$fiko_fasilitas = $_POST['fiko_fasilitas'];
$fiko_data = mysqli_query($fiko_koneksi, "UPDATE fiko_tipe_kamar 
	set fiko_tipe_kamar='$fiko_tipe_kamar',
	fiko_fasilitas='$fiko_fasilitas'
	where fiko_id_tipe='$fiko_id_tipe'");
	
		  if($fiko_data){
                           echo "<script>alert('Data berhasil di ubah');document.location='fiko_fasilitas_kamar.php'</script>";
                }
        ?>