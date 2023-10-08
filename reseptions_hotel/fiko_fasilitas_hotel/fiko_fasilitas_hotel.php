<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fasilitas Hotel</title>
	<link rel="stylesheet" type="text/css" href="fiko_fasilitas_hotel.css">
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
	<li><a href="../fiko_fasilitas_kamar/fiko_fasilitas_kamar.php"><i></i>Fasilitas Kamar</a></li>
	<li><a href="#">Fasilitas Hotel</a></li>
	<li><a href="../fiko_logout.php"><i></i>Logout</a></li>
</ul>
</div>
<section>
	<br>
<h1 style="margin-left: 460px;">Fasilitas Hotel</h1><br><br>
	<a href="fiko_tambah_fasilitas_hotel.php"><button style=" width: 400px;height: 50px; margin-left: 330px;">Tambah Fasilitas</button></a><br><br>
<table border="1">
	<tr>
		<th width="200px">Nama Fasilitas</th>
		<th width="300px">Keterangan</th>
		<th width="100px">Foto</th>
		<th width="100px">aksi</th>
	</tr>
	<?php
	include'../fiko_koneksi.php';
	$fiko_data = mysqli_query($fiko_koneksi,"SELECT * from fiko_fasilitas_hotel");
	while($fiko_datanya=mysqli_fetch_array($fiko_data)){
	?>

	<tr>
		<td><?php echo $fiko_datanya['fiko_nama_fasilitas'];?></td>
		<td><?php echo $fiko_datanya['fiko_keterangan'];?></td>
		<td><img src="upload/<?php echo $fiko_datanya['fiko_foto']?>" width="200px" height="200px"></td>
		<td>
			<a href="fiko_edit_fasilitas_hotel.php?fiko_id=<?php echo $fiko_datanya['fiko_id_fasilitas'];?>">edit</a>
			<a href="fiko_hapus_fasilitas_hotel.php?fiko_id=<?php echo $fiko_datanya['fiko_id_fasilitas'];?>">hapus</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>
</section>
</body>
</html>