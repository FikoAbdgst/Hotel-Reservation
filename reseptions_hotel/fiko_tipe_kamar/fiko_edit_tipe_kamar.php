<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
</head>
<body>
	<?php
	include'../fiko_koneksi.php';

	$fiko_id_tipe= $_GET['fiko_id'];

	$fiko_query=mysqli_query($fiko_koneksi,"SELECT * from fiko_tipe_kamar where fiko_id_tipe='$fiko_id_tipe'");
	while($fiko_querynya=mysqli_fetch_array($fiko_query)){
	?>
<h1>Edit</h1>
	<form method="post" action="fiko_update_aksi_tipe_kamar.php" enctype="multipart/form-data">
		<table>
		  	<tr>

				<td>Tipe Kamar </td>
				<td>:</td>
				<td><input type="hidden" name="fiko_id_tipe" value="<?php echo $fiko_querynya['fiko_id_tipe'];?>">
					<input type="text" name="fiko_tipe_kamar" value="<?php echo $fiko_querynya['fiko_tipe_kamar'];?>"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td> 
				<td><input type="text" name="fiko_deskripsi" value="<?php echo $fiko_querynya['fiko_deskripsi'];?>"></td>	
			</tr>
			<tr>
				<td>foto</td>
				<td>:</td> 
				<td><img src="upload/<?php echo $fiko_querynya['fiko_foto']?>" width="200px" height="200px">
					<input type="file" name="fiko_foto">
					<input type="hidden" name="fiko_foto_lama" value="<?php echo $fiko_querynya['fiko_foto']?>">
					
				</td>	
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td> 
				<td><input type="text" name="fiko_harga" value="<?php echo $fiko_querynya['fiko_harga'];?>"></td>	
			</tr>
			<tr>
				<td>Jumlah Kamar</td>
				<td>:</td> 
				<td><input type="text" name="fiko_jumlah_bed" value="<?php echo $fiko_querynya['fiko_jumlah_bed'];?>"></td>	
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Simpan"></td>
				
			</tr>
			
			
		</table>
	</form>
	<a href="fiko_tipe_kamar.php"><button>Kembali</button></a>
	<?php
		}
	?>
</body>
</html>