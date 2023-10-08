<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resepsionis</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap5/css/bootstrap.min.css">
</head>
<body>
    <?php 
    include 'fiko_koneksi.php';
     ?>
    <form method="post">
    <input type="text" name="nt" placeholder="cari ...">
    <input type="submit" name="submit" value="cari">
    </form>
<br>
<br>

 <table class="table table-bordered" style="width: 500px;">
        <tr>
            <th>Kode Reservasi</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
<?php
if(!ISSET($_POST['submit'])){
$fiko_data=mysqli_query($fiko_koneksi,"SELECT * from fiko_reservasi");
    while($fiko_datanya=mysqli_fetch_array($fiko_data)){
    ?>
        <tr>

            <td><?php echo $fiko_datanya['fiko_kode_reservasi'];?></td>
            <td><?php echo $fiko_datanya['fiko_nama_tamu'];?></td>
            <td><?php echo $fiko_datanya['fiko_email_tamu'];?></td>
            <td><?php echo $fiko_datanya['fiko_status'];?></td>
             <td><a href="fiko_reservasi/fiko_lihat_reservasi.php?fiko_id=<?php echo $fiko_datanya['fiko_id_reservasi'];?>">Lihat</a></td>
        </tr>
             
<?php 
        } 
    } 
?>

<?php if (ISSET($_POST['submit'])){
 $cari = $_POST['nt'];
 $fiko_data2=mysqli_query($fiko_koneksi,"SELECT * FROM fiko_reservasi WHERE fiko_nama_tamu LIKE '%$cari%'");
  while($fiko_datanya2=mysqli_fetch_array($fiko_data2)){
  ?>
<tr>

            <td><?php echo $fiko_datanya2['fiko_kode_reservasi'];?></td>
            <td><?php echo $fiko_datanya2['fiko_nama_tamu'];?></td>
            <td><?php echo $fiko_datanya2['fiko_email_tamu'];?></td>
            <td><?php echo $fiko_datanya2['fiko_status'];?></td>
            <td><a href="fiko_reservasi/fiko_lihat_reservasi.php?fiko_id=<?php echo $fiko_datanya2['fiko_id_reservasi'];?>">Lihat</a></td>
</tr>
      <?php 
        }
    } 
?>
        </tr>
    </table>
   
    
     <a href="fiko_logout.php">logout</a>
</body>
</html>
