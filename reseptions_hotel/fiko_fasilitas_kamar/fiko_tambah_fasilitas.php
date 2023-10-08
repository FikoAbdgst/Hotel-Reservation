<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Fasilitas</title>
</head>
<body>
	<?php
	include'../fiko_koneksi.php';

	$fiko_id_tipe= $_GET['fiko_id'];

	$fiko_query=mysqli_query($fiko_koneksi,"SELECT * from fiko_tipe_kamar where fiko_id_tipe='$fiko_id_tipe'");
	while($fiko_querynya=mysqli_fetch_array($fiko_query)){
	?>
<h1>Tambah Fasilitas</h1>
<form method="post" action="fiko_cektambah_fasilitas.php">
<label>
	<input type="hidden" name="fiko_id_tipe"  value="<?php echo $fiko_querynya['fiko_id_tipe'];?>">
	<input type="hidden" name="fiko_tipe_kamar" value="<?php echo $fiko_querynya['fiko_tipe_kamar'];?>">
	<input type="text" name="fiko_fasilitas" value="<?php echo $fiko_querynya['fiko_fasilitas'];?>" autocomplete="off" required>
</label>
<input type="submit" name="simpan" value="Simpan">
<a href="fiko_fasilitas_kamar.php">kembali</a>
</form>
<?php
}
?>
</body>
</html>