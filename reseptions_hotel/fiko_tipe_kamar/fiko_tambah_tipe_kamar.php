<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah</title>
</head>
<body>
	<h1>Tambah Kamar</h1>
	<form method="post" action="fiko_tambah_aksi_tipe_kamar.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Tipe Kamar </td>
				<td>:</td>
				<td><input type="text" name="fiko_tipe_kamar" placeholder="Masukkan Nama Tipe Kamar"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td> 
				<td><input type="text" name="fiko_deskripsi" placeholder="Masukkan Deskripsi"></td>	
			</tr>
			<tr>
				<td>foto</td>
				<td>:</td> 
				<td><input type="file" name="fiko_foto"></td>	
				<td><input type="hidden" name="fiko_fasilitas"></td>	
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td> 
				<td><input type="text" name="fiko_harga" placeholder="Masukkan Harga"></td>	
			</tr>
			<tr>
				<td>Jumlah Kamar</td>
				<td>:</td> 
				<td><input type="text" name="fiko_jumlah_bed" placeholder="Masukkan Jumlah Kamar"></td>	
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Simpan"></td>
				
			</tr>
			
			
		</table>
</form>
<a href="fiko_tipe_kamar.php">kembali</a>
</body>
</html>