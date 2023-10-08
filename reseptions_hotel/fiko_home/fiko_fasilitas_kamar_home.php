<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kamar</title>
	<link rel="stylesheet" type="text/css" href="fiko_fasilitas_kamar1.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap.css">
	
</head>
<body>
	<h1 align="center">Fasilitas Kamar</h1><br><br>
	
	
	<?php
	include'../fiko_koneksi.php';

	$fiko_id= $_GET['fiko_id'];

	$fiko_query=mysqli_query($fiko_koneksi,"SELECT * from fiko_tipe_kamar where fiko_id_tipe='$fiko_id'");
	while($fiko_querynya=mysqli_fetch_array($fiko_query)){
	?>

	<h1 style="margin-left: 50px;"><?php echo $fiko_querynya['fiko_tipe_kamar'];?></h1>
	<p style="font-size: 30px;margin-left: 70px"><img src="../fiko_tipe_kamar/upload/<?php echo $fiko_querynya['fiko_foto'];?>" width="320px" height="200px"> <?php echo $fiko_querynya['fiko_deskripsi'];?></p>
	<h3 style="margin-left: 70px;">Rp.<?php echo number_format($fiko_querynya['fiko_harga'])?></h3>
	<h3><input style="margin-left: 70px;" type="" name="" value="<?php echo $fiko_querynya['fiko_fasilitas']?>" readonly> </h3>
	<p align="center"><a href="fiko_tipe_home.php"><button>Kembali</button></a></p>
			
<?php
		}
	?>
</body>
</html>