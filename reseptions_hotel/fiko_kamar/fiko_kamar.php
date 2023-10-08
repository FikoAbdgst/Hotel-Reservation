<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="fiko_kamar1.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap4/css/bootstrap.min.css">
	<title>Kamar</title>
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
	<li><a href="#">Kamar</a></li>
	<li><a href="../fiko_fasilitas_kamar/fiko_fasilitas_kamar.php"><i></i>Fasilitas Kamar</a></li>
	<li><a href="../fiko_fasilitas_hotel/fiko_fasilitas_hotel.php"><i></i>Fasilitas Hotel</a></li>
	<li><a href="../fiko_logout.php"><i></i>Logout</a></li>
</ul>
</div>
<section>
	<br>
<h1 style="margin-left: 490px;">Kamar</h1><br><br>
<a href="fiko_tambah_kamar.php"><button style=" width: 400px;height: 50px; margin-left: 330px;">Tambah kamar</button></a><br><br>
	<table border="1" >
		<thead>
		<tr>
			<th width="100px">No Kamar</th>
			<th width="200px">Tipe Kamar</th>
			<th width="200px">Status</th>
			<th width="100px">Lantai</th>
			<th width="80px">Aksi</th>
		</tr>
		</thead>
<?php
	
	include '../fiko_koneksi.php';

			$fiko_batas   = 5;
			$fiko_halaman = @$_GET['halaman'];
			if(empty($fiko_halaman)){
				$fiko_posisi  = 0;
				$fiko_halaman = 1;
			}
			else{
				$fiko_posisi  = ($fiko_halaman-1) * $fiko_batas;
			}

			$fiko_no = $fiko_posisi+1;
			
			$fiko_query_mysql = mysqli_query($fiko_koneksi,"SELECT * FROM fiko_kamar order by fiko_id_kamar asc limit $fiko_posisi,$fiko_batas")or die(mysql_error());

			while($fiko_datanya = mysqli_fetch_array($fiko_query_mysql)){
				?>

		<tr>
			<td><?php echo $fiko_datanya['fiko_no_kamar'];?></td>
			<td><?php echo $fiko_datanya['fiko_id_tipe'];?></td>
			<td><?php echo $fiko_datanya['fiko_status'];?></td>
			<td><?php echo $fiko_datanya['fiko_lantai'];?></td>
			<td>
				<a href="fiko_edit_kamar.php?fiko_id=<?php echo $fiko_datanya['fiko_id_kamar'];?>">Edit</a>
				<a href="fiko_hapus_kamar.php?fiko_id=<?php echo $fiko_datanya['fiko_id_kamar'];?>" onclick="return confirm('yakin?')">Hapus</a>
			</td>
		</tr>
		<?php 
	}
	?>
	</table>
	<hr>
		<?php

		$fiko2     = mysqli_query($fiko_koneksi, "SELECT * FROM fiko_kamar");
		$fiko_jmldata    = mysqli_num_rows($fiko2);
		$fiko_jmlhalaman = ceil($fiko_jmldata/$fiko_batas);
		?>
		<div class="text-center" style="margin-left: 300px;">
			<ul class="pagination">
				<?php
				for($i=1;$i<=$fiko_jmlhalaman;$i++) {
					if ($i != $fiko_halaman) {
						echo "<li class='page-item'><a class='page-link' href='fiko_kamar.php?halaman=$i'>$i</a></li>";
					} else {
						echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
					}
				}
				?>
			</ul>
		</div>

</section>
	
</body>
</html>