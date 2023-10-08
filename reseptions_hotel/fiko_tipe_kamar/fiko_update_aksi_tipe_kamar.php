<?php

include'../fiko_koneksi.php';
	
$fiko_id_tipe = $_POST['fiko_id_tipe'];	
$fiko_tipe_kamar = $_POST['fiko_tipe_kamar'];
$fiko_deskripsi = $_POST['fiko_deskripsi'];
$fiko_nama_file = $_FILES['fiko_foto']['name'];
$fiko_source = $_FILES['fiko_foto']['tmp_name'];
$fiko_folder = './upload/';
$fiko_harga = $_POST['fiko_harga'];
$fiko_jumlah_bed = $_POST['fiko_jumlah_bed'];
$fiko_foto_lama = $_POST['fiko_foto_lama'];

	
if ($fiko_nama_file) {
	unlink('./upload/'.$fiko_foto_lama);

	move_uploaded_file($fiko_source, $fiko_folder.$fiko_nama_file);
	$fiko_data= mysqli_query($fiko_koneksi, "UPDATE fiko_tipe_kamar 
	set fiko_tipe_kamar='$fiko_tipe_kamar',
		fiko_deskripsi='$fiko_deskripsi',
		fiko_foto='$fiko_nama_file',
		fiko_harga='$fiko_harga',
		fiko_jumlah_bed='$fiko_jumlah_bed'
	where fiko_id_tipe='$fiko_id_tipe'");

}else{
	$fiko_data= mysqli_query($fiko_koneksi, "UPDATE fiko_tipe_kamar 
	set fiko_tipe_kamar='$fiko_tipe_kamar',
		fiko_deskripsi='$fiko_deskripsi',
		fiko_harga='$fiko_harga',
		fiko_jumlah_bed='$fiko_jumlah_bed'
	where fiko_id_tipe='$fiko_id_tipe'");
}

	 
if($fiko_data){
       echo "<script>alert('Data sudah di ubah');document.location='fiko_tipe_kamar.php'</script>";
	}
?>