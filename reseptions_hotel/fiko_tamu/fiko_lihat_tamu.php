<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tipe Kamar</title>
	<link rel="stylesheet" type="text/css" href="fiko_lihat_tamu2.css">
</head>
<body>
	<nav>
		<div class="logo" >
            HOTEL
         </div>
          <div class="logo1">HEBAT</div>
          <ul class="">
            <li><a  href="fiko_tamu.php">Home</a></li>
            <li><a class="active" href="fiko_lihat_tamu.php">Kamar</a></li>
            <li class="dropdown">
            <a href="#"  class="dropbtn">*</a>
            <div class="dropdown-content">
            <a href="profil.php"> Profile</a>
            <a href="../fiko_logout_tamu.php" >Log Out</a>
         </ul>
         
	
	</nav>
	<?php
session_start();
	include '../fiko_koneksi.php';

	$fiko_data = mysqli_query($fiko_koneksi,"select * from fiko_tipe_kamar");
	 while($fiko_d = mysqli_fetch_assoc($fiko_data)){
                        
?>	
<div class="box" style="margin-top: 20px;">
	<br> 
	<img src="../fiko_tipe_kamar/upload/<?php echo $fiko_d['fiko_foto']?>" width="320px" height="200px">

	<h3><?php echo $fiko_d['fiko_tipe_kamar']?></h3>
	<h4>Rp.<?php echo number_format($fiko_d['fiko_harga'])?></h4>
	
	<a href="fiko_pesan1.php?fiko_id=<?php echo $fiko_d['fiko_id_tipe'];?>"><button>Tambah</button></a>	

</div>
			<?php
		}
	?>
</body>
</html>