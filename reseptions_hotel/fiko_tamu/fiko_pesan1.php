<?php
session_start();
include'../fiko_koneksi.php';

    $fiko_id_tipe= $_GET['fiko_id']; 

	$fiko_query = mysqli_query($fiko_koneksi, "SELECT max(fiko_kode_reservasi) as kodeTerbesar FROM fiko_reservasi");
    $fiko_data = mysqli_fetch_array($fiko_query);
    $fiko_kodeBarang = $fiko_data['kodeTerbesar'];
 
    $fiko_urutan = (int) substr($fiko_kodeBarang, 3, 3);
 
    $fiko_urutan++;
 
    $fiko_huruf = "RSV";
    $fiko_reservasi = $fiko_huruf . sprintf("%03s", $fiko_urutan);
    
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pesan</title>
	<link rel="stylesheet" type="text/css" href="fiko_pesan1.css">
</head>
<body>
   
	

<form method="post" action="fiko_aksi_pesan.php" style="padding-bottom: 200px;"><h3>Pesan</h3>
	 <table>

         <tr>
            <td>Kode Reservasi</td>
            <td>:</td>
            <td><input type="hidden" name="fiko_id_reservasi" value="<?php echo $fiko_id_tipe ?> ">
                <input type="text" name="fiko_kode_reservasi" value="<?php echo $fiko_reservasi ?>" readonly></td>
        </tr>
        
              
    
                <input type="hidden" name="fiko_id_tipe" value="<?php echo $fiko_id_tipe; ?>">
                <input type="hidden" name="fiko_status" >
                <input type="hidden" name="fiko_total" >
         <tr>
            <td>Email</td>
            <td>:</td>
            <td>
                <?php
                $fiko_username_tamu= $_SESSION['fiko_username'];
                $fiko_query = mysqli_query($fiko_koneksi,"SELECT * from fiko_tamu where fiko_username='$fiko_username_tamu'");
                while ($fiko_d = mysqli_fetch_array($fiko_query)) {
                   
                ?>
                <input type="text" name="fiko_nama_tamu" value="<?php echo $fiko_d['fiko_nama_tamu'];?>" readonly>
                    
        </tr>

        <tr>
            <td>Email</td>
            <td>:</td>
            <td>
                
                <input type="text" name="fiko_email_tamu" value="<?php echo $fiko_d['fiko_email_tamu'];?>" readonly>
                    <?php
                }
                ?>
                
        </tr>
        
        <tr>
            <td>Check in</td>
            <td>:</td>
            <td><input type="date" name="fiko_check_in" required autocomplete="off" ></td>
        </tr>
        <tr>
            <td>Check out </td>
            <td>:</td>
            <td><input type="date" name="fiko_check_out" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>Jumlah Kamar </td>
            <td>:</td>
            <td><input type="number" name="fiko_jumlah_kamar" autocomplete="off" required placeholder="Masukkan Jumlah Kamar"></td>
        </tr>
        <tr>
            <td>Jumlah Tamu </td>
            <td>:</td>
            <td><input type="number" name="fiko_jumlah_tamu" autocomplete="off" required placeholder="Masukkan Jumlah Tamu"></td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>:</td>
            <td><input type="text" name="fiko_pesan" autocomplete="off" required placeholder="Masukkan Pesan"></td>
        </tr>
        <tr>
            <td>Harga Kamar</td>
            <td>:</td>
        <?php
                $fiko_query = mysqli_query($fiko_koneksi,"SELECT * from fiko_tipe_kamar where fiko_id_tipe='$fiko_id_tipe'");
                while ($fiko_d = mysqli_fetch_array($fiko_query)) {
                   
                ?>
                <td><input type="text" name="fiko_harga" value="<?php echo $fiko_d['fiko_harga'];?>" readonly></td>
                <input type="hidden" name="fiko_bed" value="<?php echo $fiko_d['fiko_jumlah_bed'];?>" >
                    <?php
                } 
                ?>
       
        </tr>
            <td><input type="submit" name="simpan" value="Simpan" ></td>
        
    </table>
	
</form>
</body>
</html>