
<?php

include'../fiko_koneksi.php';
	


$fiko_id_reservasi = $_POST['fiko_id_reservasi'];
$fiko_kode_reservasi = $_POST['fiko_kode_reservasi'];	
$kode_kursi = $_POST['fiko_kursi'];
$fiko_seat ='';

foreach($kode_kursi as $chk1)  
   {  
      $fiko_seat .= $chk1." ";  
   } 
	
	mysqli_query($fiko_koneksi, "UPDATE fiko_reservasi 
	set fiko_status = 'Check In'
	where fiko_id_reservasi='$fiko_id_reservasi'");

	mysqli_query($fiko_koneksi, "INSERT INTO fiko_reserved_room 
	values('','$fiko_kode_reservasi','$fiko_seat')");

	foreach ($kode_kursi as $a ) {
                mysqli_query($fiko_koneksi,"UPDATE fiko_kamar SET fiko_status = 'Tidak Tersedia'
                 WHERE `fiko_kamar`.`fiko_no_kamar` = '$a' && `fiko_id_tipe` = '$fiko_id_reservasi'");
        }

 	
    echo "<script>alert('Data sudah di ubah');document.location='../fiko_resepsionis.php'</script>";
	
?>