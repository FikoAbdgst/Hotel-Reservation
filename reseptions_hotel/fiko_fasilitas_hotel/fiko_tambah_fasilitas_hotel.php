<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Fasilitas</title>
</head>
<body>
<h1>Tambah Fasilitas</h1>
	<form method="post" action="fiko_tambah_aksi_fasilitas_hotel.php" enctype="multipart/form-data" >
	<table>
		<tr>
			<td>Nama Fasilitas</td>
				<td>:</td>
				<td><input type="text" name="fiko_nama_fasilitas" placeholder="Masukkan Nama Fasilitas"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td> 
				<td><input type="text" name="fiko_keterangan" placeholder="Masukkan Keterangan"></td>	
			</tr>
			<tr>
				<td>Foto</td>
				<td>:</td> 
				<td><input type="file" name="fiko_image"></td>	
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Simpan"></td>
				
			</tr>
			
			
		</table>
</form>
<a href="fiko_fasilitas_hotel.php">kembali</a>
</body>
</html>