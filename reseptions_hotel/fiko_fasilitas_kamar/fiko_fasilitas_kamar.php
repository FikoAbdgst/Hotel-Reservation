<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kamar</title>
	<link rel="stylesheet" type="text/css" href="fiko_fasilitas_kamar1.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap.css">
	
</head>
<body>
	<input type="checkbox" id="check">
	<label for="check">

	  <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Admin</header>
<ul>
	<li><a href="../fiko_administrator.php"><i></i>Home</a></li>
	<li><a href="../fiko_tipe_kamar/fiko_tipe_kamar.php"><i></i>Tipe Kamar</a></li>
	<li><a href="../fiko_kamar/fiko_kamar.php"><i></i>Kamar</a></li>
	<li><a href="#">Fasilitas Kamar</a></li>
	<li><a href="../fiko_fasilitas_hotel/fiko_fasilitas_hotel.php"><i></i>Fasilitas Hotel</a></li>
	<li><a href="../fiko_logout.php"><i></i>Logout</a></li>
</ul>
</div>
<section>
	<br>
	<h1 style="margin-left: 500px;">Fasilitas Kamar</h1><br><br>
	<table border="1">
		<tr>
			<th width="100px">Tipe Kamar</th>
			<th width="200px">Fasilitas Kamar</th>
			<th width="50px">Aksi</th>
		</tr>
<?php
	session_start(); 
	include '../fiko_koneksi.php';
	$fiko_data=mysqli_query($fiko_koneksi,"SELECT * from fiko_tipe_kamar");
	while($fiko_datanya=mysqli_fetch_array($fiko_data)){
	?>

		<tr>
			<td><?php echo $fiko_datanya['fiko_tipe_kamar'];?></td>
			<td><?php echo $fiko_datanya['fiko_fasilitas'];?></td>
			<td>
				<a href="fiko_tambah_fasilitas.php?fiko_id=<?php echo $fiko_datanya['fiko_id_tipe'];?>">Tambah</a>
			</td>
		</tr>
		<?php 
	}
	?>
	</table>
</section>
</body>
</html>