<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
</head>
<body>
	<?php
	include'../fiko_koneksi.php';

	$fiko_id_fasilitas= $_GET['fiko_id'];

	$fiko_query=mysqli_query($fiko_koneksi,"SELECT * from fiko_fasilitas_hotel where fiko_id_fasilitas='$fiko_id_fasilitas'");
	while($fiko_querynya=mysqli_fetch_array($fiko_query)){
	?>
<h1>Edit</h1>
	<form method="post" action="fiko_update_aksi_fasilitas_hotel.php" enctype="multipart/form-data">
		<table>
		  	<tr>

				<td>Nama Fasilitas </td>
				<td>:</td>
				<td><input type="hidden" name="fiko_id_fasilitas" value="<?php echo $fiko_querynya['fiko_id_fasilitas'];?>">
					<input type="text" name="fiko_nama_fasilitas" value="<?php echo $fiko_querynya['fiko_nama_fasilitas'];?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td> 
				<td><input type="text" name="fiko_keterangan" value="<?php echo $fiko_querynya['fiko_keterangan'];?>"></td>	
			</tr>
			<tr>
				<td>Foto</td>
				<td>:</td> 
				<td><input type="file" name="fiko_foto" ></td>	
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Simpan"></td>
				
			</tr>
			
			
		</table>
	</form>
	<a href="fiko_fasilitas_hotel.php"><button>Kembali</button></a>
	<?php
		}
	?>
</body>
</html>