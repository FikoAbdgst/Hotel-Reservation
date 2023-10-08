<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reservasi</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap5/css/bootstrap.css">
</head>
<body>
    
            <?php
    
    include '../fiko_koneksi.php';

$fiko_id_kamar= $_GET['fiko_id'];

    $fiko_data=mysqli_query($fiko_koneksi,"SELECT * from fiko_reservasi where fiko_id_reservasi ='$fiko_id_kamar'");
    $fiko_datanya=mysqli_fetch_array($fiko_data);
    ?>
    
        <table align="center" class="table table-bordered">
            <tr>
                <td>Kode Reservasi</td>
                <td>:</td>
                <td>
                    <input type="hidden" name="fiko_id_reservasi" value="<?php echo $fiko_p['fiko_id_reservasi'];?>">
                    <input type="text" name="fiko_kode_reservasi" value="<?php echo $fiko_datanya['fiko_kode_reservasi'];?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="fiko_nama" value="<?php echo $fiko_datanya['fiko_nama_tamu'];?>" readonly></td>
            </tr>
            <td>Email Tamu </td>
                <td>:</td>
                <td>
                    <input type="text" name="fiko_email" value="<?php echo $fiko_datanya['fiko_email_tamu'];?>" readonly></td>
            <tr>
                <td>Check in</td>
                <td>:</td>
                <td>
                    <input type="text" name="fiko_check_in" value="<?php echo $fiko_datanya['fiko_check_in'];?>" readonly></td>
            <tr>
                <td>Check out</td>
                <td>:</td>
                <td>
                    <input type="text" name="fiko_check_out" value="<?php echo $fiko_datanya['fiko_check_out'];?>" readonly></td>
            </tr>
            <tr>
                <td>Jumlah Kamar</td>
                <td>:</td>
                <td>
                    <input type="text" name="fiko_jumlah_kamar" value="<?php echo $fiko_datanya['fiko_jumlah_kamar'];?>" readonly></td>
            </tr>
            <tr>
                <td>Jumlah Tamu</td>
                <td>:</td>
                <td>
                    <input type="text" name="fiko_jumlah_tamu" value="<?php echo $fiko_datanya['fiko_jumlah_tamu'];?>" readonly></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td>:</td>
                <td>
                    <input type="text" name="fiko_pesan" value="<?php echo $fiko_datanya['fiko_pesan'];?>" readonly></td>
            </tr>
           <tr>
                <td>Tipe Kamar</td>
                <td>:</td>
                <td>
                    <input type="text" name="fiko_id_tipe" value="<?php echo $fiko_datanya['fiko_id_tipe'];?>">               
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <input type="text" name="fiko_status" value="<?php echo $fiko_datanya['fiko_status'];?>" readonly></td>
            </tr>
            <tr>
                <td>Total</td>
                <td>:</td>
                <td>
                    <input type="text" name="fiko_total" value="<?php echo $fiko_datanya['fiko_total'];?>" readonly></td>
            
            </tr> 
            
            
    </table>
   <a href="fiko_check_in.php?fiko_id=<?php echo $fiko_datanya['fiko_id_reservasi'];?>"><button>Check In</button></a>
    <p align="center"><a href="fiko_check_out.php?fiko_id=<?php echo $fiko_datanya['fiko_id_reservasi'];?>"><button>Check Out</button></a></p>
    <p align="center"><a href="../fiko_resepsionis.php"><button>Home</button></a></p>

</body>
</html>