<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
</head>
<body>
	<?php
	include'../fiko_koneksi.php';

	$fiko_id_kamar= $_GET['fiko_id'];

	$fiko_query=mysqli_query($fiko_koneksi,"SELECT * from fiko_kamar where fiko_id_kamar='$fiko_id_kamar'");
	while($fiko_querynya=mysqli_fetch_array($fiko_query)){
	?>
<h1>Edit</h1>
	<form method="post" action="fiko_update_aksi_kamar.php" enctype="multipart/form-data">
		<table>
		  	<tr>

				<td>No Kamar </td>
				<td>:</td>
				<td><input type="hidden" name="fiko_id_kamar" value="<?php echo $fiko_querynya['fiko_id_kamar'];?>">
					<input type="text" name="fiko_no_kamar" value="<?php echo $fiko_querynya['fiko_no_kamar'];?>"></td>
			</tr>
			<tr>
				<td>Tipe Kamar</td>
				<td>:</td> 
				<td><?php

            	$tipes = mysqli_query($fiko_koneksi, "select * from fiko_tipe_kamar");
            	?>
            	<select name="fiko_id_tipe">
            		<option><?php echo $fiko_querynya['fiko_id_tipe'];?></option>
            		<option disabled>-----</option>
	            	<?php
	            	foreach ($tipes as $key => $tipe) {
	            		echo "<option value={$tipe['fiko_id_tipe']}>{$tipe['fiko_tipe_kamar']}</option>";
	            	}
	            	?></td>	
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td> 
				<td><select name="fiko_status">
						<option><?php echo $fiko_querynya['fiko_status'];?></option>
						<option disabled>-----</option>
						<option>Tersedia</option>
						<option>Tidak Tersedia</option>
					</select>
				</td>	
			</tr>
			<tr>
				<td>Lantai</td>
				<td>:</td> 
				<td><input type="number" name="fiko_lantai" value="<?php echo $fiko_querynya['fiko_lantai'];?>"></td>	
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Simpan"></td>
				
			</tr>
			
			
		</table>
	</form>
	<a href="fiko_kamar.php"><button>Kembali</button></a>
	<?php
		}
	?>
</body>
</html>