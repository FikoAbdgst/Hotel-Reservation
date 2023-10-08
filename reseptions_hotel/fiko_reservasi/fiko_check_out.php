<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Check In</title>
</head>
<body>
	<?php
	include'../fiko_koneksi.php';

	$fiko_id_kamar= $_GET['fiko_id'];

	$fiko_d=mysqli_query($fiko_koneksi,"SELECT * from fiko_reserved_room where fiko_id='$fiko_id_kamar' ");
	$fiko_r=mysqli_query($fiko_koneksi,"SELECT * from fiko_reservasi where fiko_id_reservasi='$fiko_id_kamar' ");
	
	?>
<h1>Check In</h1>
	<form method="post" action="fiko_update_check_out.php" enctype="multipart/form-data">
		<table align="center">
		  	<input type="hidden" name="fiko_tipe" value="<?php echo $fiko_id_kamar?>">
		  	<?php
				while ($fiko_s = mysqli_fetch_array($fiko_r)) {?>
		  	<input type="text" name="fiko_jumlah_kamar" value="<?php echo $fiko_s['fiko_jumlah_kamar'];?>">
		  	<input type="text" name="fiko_id_tipe" value="<?php echo $fiko_s['fiko_id_tipe'];?>">
		  	<?php 
}
	?>
				<td>No Kamar </td>
				<td>:</td>
				<?php
				while ($fiko_p = mysqli_fetch_array($fiko_d)) {?>
				<td><input type="text" name="fiko_out" value="<?php echo $fiko_p['fiko_no_kamar'];?>" readonly></td>
					


					
					<td><input type="submit" name="simpan" value="Simpan"></td>
		</table>
	</form>
	<?php 
}
	?>
	<p align="center"><a href="fiko_reservasi.php"><button>Kembali</button></a></p>
	
</body>
</html>