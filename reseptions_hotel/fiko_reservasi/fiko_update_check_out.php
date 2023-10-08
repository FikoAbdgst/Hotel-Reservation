
<?php

include'../fiko_koneksi.php';
	

$fiko_out = $_POST['fiko_out'];
$fiko_id = $_POST['fiko_tipe'];
$fiko_jumlah_kamar = $_POST['fiko_jumlah_kamar'];
$fiko_id_tipe = $_POST['fiko_id_tipe'];

$fiko_k=mysqli_query($fiko_koneksi,"SELECT * from fiko_tipe_kamar where fiko_id_tipe='$fiko_id_tipe' ");
$fiko_s = mysqli_fetch_array($fiko_k);
	
$fiko_jumlah = $_POST['fiko_jumlah_kamar'] + $fiko_s['fiko_jumlah_bed'];

	mysqli_query($fiko_koneksi, "UPDATE fiko_reservasi 
	set fiko_status = 'Check Out'
	where fiko_id_reservasi='$fiko_id'");

	$data= explode(" ",$fiko_out);
	foreach ($data as $a ) {
                mysqli_query($fiko_koneksi,"UPDATE fiko_kamar SET fiko_status = 'Tersedia'
                 WHERE `fiko_kamar`.`fiko_no_kamar` = '$a' && `fiko_id_tipe` = '$fiko_id'");
        }
 	 mysqli_query($fiko_koneksi, "UPDATE fiko_tipe_kamar 
	set fiko_jumlah_bed = '$fiko_jumlah'
	where fiko_id_tipe='$fiko_id'");

    
	 echo "<script>alert('Data sudah di ubah');document.location='../fiko_resepsionis.php'</script>";
?>