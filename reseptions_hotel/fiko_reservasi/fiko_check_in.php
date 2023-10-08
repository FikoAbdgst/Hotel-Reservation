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


	$fiko_reservasi=mysqli_query($fiko_koneksi,"SELECT * from fiko_reservasi where fiko_id_reservasi='$fiko_id_kamar' ");
	$fiko_p = mysqli_fetch_array($fiko_reservasi)
	?>
<h1>Check In</h1>
	<form action="fiko_reservasi.php" method="GET">
		<table align="center">
		  	<tr>
				<td>Kode Reservasi </td>
				<td>:</td>
				<td>
					
					<input type="hidden" name="fiko_id_reservasi" value="<?php echo $fiko_p['fiko_id_reservasi'];?>">
					<input type="text" name="fiko_kode_reservasi" value="<?php echo $fiko_p['fiko_kode_reservasi'];?>" readonly></td></tr>
					<tr>
				<td>Jumlah Kamar</td>
				<td>:</td>
				<td>
					<input type="text" name="fiko_jumlah_kamar" value="<?php echo $fiko_p['fiko_jumlah_kamar'];?>" readonly></td>
					
			</tr>
			
			<tr>
                <td>Tipe Kamar</td>
                <td>:</td>
                <td>
                	<input type="text" name="fiko_id_tipe" value="<?php echo $fiko_p['fiko_id_tipe'];?>">            	
				</td>
			</tr>
			
			
			
			
		</table>
	
	<input type="submit" name="simpan" value="simpan">
	
	</form>
	<p align="center"><a href="../fiko_resepsionis.php"><button>Home</button></a></p>
	
</body>
</html>