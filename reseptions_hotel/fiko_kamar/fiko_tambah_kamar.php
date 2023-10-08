<?php
session_start();
include'../fiko_koneksi.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah</title>
</head>
<body>
	<h1>Tambah Kamar</h1>
	<form method="post" action="fiko_tambah_aksi_kamar.php" >
	<table>
		<tr>
			<td>No Kamar </td>
				<td>:</td>
				<td><input type="text" name="fiko_no_kamar" autocomplete="off"></td>
			</tr>
			<td>Tipe Kamar </td>
            <td>:</td>
            <td>
            	<?php
            	include '../fiko_koneksi.php';

            	$tipes = mysqli_query($fiko_koneksi, "select * from fiko_tipe_kamar");
            	?>
            	<select name="fiko_id_tipe">
            		<option selected disabled>Pilih Tipe Kamar</option>
	            	<?php
	            	foreach ($tipes as $key => $tipe) {
	            		echo "<option value={$tipe['fiko_id_tipe']}>{$tipe['fiko_tipe_kamar']}</option>";
	            	}
	            	?>
            	</select>
        	</td>
			<tr>
				<td>Status</td>
				<td>:</td> 
				<td><select name="fiko_status">
					<option selected disabled>Pilih Status Kamar</option>
					<option>Tersedia</option>
					<option>Tidak Tersedia</option>
				</select></td>	
			</tr>
			<tr>
				<td>Lantai</td>
				<td>:</td> 
				<td><input type="number" name="fiko_lantai" placeholder="Masukkan Lantai"></td>	
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Simpan"></td>
				
			</tr>
			
			
		</table>
</form>
<a href="fiko_kamar.php">kembali</a>
</body>
</html>