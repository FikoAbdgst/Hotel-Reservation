<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kamar</title>
	<link rel="stylesheet" type="text/css" href="fiko_tipe_kamar.css">
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
	<li><a href="#">Tipe Kamar</a></li>
	<li><a href="../fiko_kamar/fiko_kamar.php"><i></i>Kamar</a></li>
	<li><a href="../fiko_fasilitas_kamar/fiko_fasilitas_kamar.php"><i></i>Fasilitas Kamar</a></li>
	<li><a href="../fiko_fasilitas_hotel/fiko_fasilitas_hotel.php"><i></i>Fasilitas Hotel</a></li>
	<li><a href="../fiko_logout.php"><i></i>Logout</a></li>
</ul>
</div>
<section>
	<br>
	<h1 style="margin-left: 460px;">Tipe Kamar</h1><br><br>
	<a href="fiko_tambah_tipe_kamar.php"><button style=" width: 400px;height: 50px; margin-left: 330px;">Tambah kamar</button></a>
	<br><br>
	<table border="1">
		<thead>
		<tr>
			<th width="20px">No</th>
			<th width="100px">Tipe Kamar</th>
			<th width="250px">Deskripsi</th>
			<th width="200px">Foto</th>
			<th width="100px">Harga</th>
			<th width="100px">Jumlah Kamar</th>
			<th width="100px">Aksi</th>
		</tr>
		</thead>
<?php
	
	include '../fiko_koneksi.php';
	$fiko_data=mysqli_query($fiko_koneksi,"SELECT * from fiko_tipe_kamar");
	$no=1;
	while($fiko_datanya=mysqli_fetch_array($fiko_data)){
	?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $fiko_datanya['fiko_tipe_kamar'];?></td>
			<td><?php echo $fiko_datanya['fiko_deskripsi'];?></td>
			<td><img src="upload/<?php echo $fiko_datanya['fiko_foto']?>" width="200px" height="200px"></td>
			<td><?php echo $fiko_datanya['fiko_harga'];?></td>
			<td><?php echo $fiko_datanya['fiko_jumlah_bed'];?></td>
			<td>
				<a href="fiko_edit_tipe_kamar.php?fiko_id=<?php echo $fiko_datanya['fiko_id_tipe'];?>">Edit</a>
				<a href="fiko_hapus_kamar.php?fiko_id=<?php echo $fiko_datanya['fiko_id_tipe'];?>" onclick="return confirm('yakin?')">Hapus</a>
			</td>
		</tr>
		<?php 
	}
	?>
	</table>
	<br>
</section>
	
</body>
</html>