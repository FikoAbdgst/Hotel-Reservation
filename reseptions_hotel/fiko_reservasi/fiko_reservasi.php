<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reservasi</title>
</head>
<body>
    <?php 
    include '../fiko_koneksi.php';
     
$fiko_id_kamar= $_GET['fiko_id_reservasi'];
$fiko_kode_reservasi= $_GET['fiko_kode_reservasi'];
$fiko_id_tipe=$_GET['fiko_id_tipe'];


    $fiko_kamarA = mysqli_query($fiko_koneksi,"SELECT * FROM fiko_kamar WHERE fiko_no_kamar LIKE '%A%' && fiko_id_tipe = '$fiko_id_tipe and $fiko_id_kamar'and fiko_status='Tersedia'  ");
    $fiko_kamarB = mysqli_query($fiko_koneksi,"SELECT * FROM fiko_kamar WHERE fiko_no_kamar LIKE '%B%' && fiko_id_tipe = '$fiko_id_tipe and $fiko_id_kamar' and fiko_status='Tersedia'  ");
    $fiko_kamarC = mysqli_query($fiko_koneksi,"SELECT * FROM fiko_kamar WHERE fiko_no_kamar LIKE '%C%' && fiko_id_tipe = '$fiko_id_tipe and $fiko_id_kamar' and fiko_status='Tersedia'  ");
    $fiko_kamarD = mysqli_query($fiko_koneksi,"SELECT * FROM fiko_kamar WHERE fiko_no_kamar LIKE '%D%' && fiko_id_tipe = '$fiko_id_tipe and $fiko_id_kamar' and fiko_status='Tersedia'  ");
    $fiko_kamarE = mysqli_query($fiko_koneksi,"SELECT * FROM fiko_kamar WHERE fiko_no_kamar LIKE '%E%' && fiko_id_tipe = '$fiko_id_tipe and $fiko_id_kamar' and fiko_status='Tersedia'  ");
    ?>
    <h1>Check In</h1>
    <form method="post" action="fiko_update_check_in.php" >
        <table align="center">
            <tr>
                <td>No Kamar</td>
                <td>:</td> 
                    <div class="box"></div>
    <input type="text" name="fiko_id_reservasi" value="<?=$fiko_id_kamar?>">
    <input type="text" name="fiko_kode_reservasi" value="<?=$fiko_kode_reservasi?>">
   
     
                        <div class="row">

                            <?php while ($fiko_A = mysqli_fetch_assoc($fiko_kamarA)) {?>
                                <label><?=$fiko_A['fiko_no_kamar']?></label>
                                <td><input type="checkbox" name="fiko_kursi[]" <?= $fiko_A['fiko_status'] ?> value="<?=$fiko_A['fiko_no_kamar']?>"class="fiko_seat"></td> 
                            <?php } ?>
                        </div>
                        <div class="row">
                             <?php while ($fiko_B = mysqli_fetch_assoc($fiko_kamarB)) {?>
                                <label><?=$fiko_B['fiko_no_kamar']?></label>
                                <td><input type="checkbox" name="fiko_kursi[]" <?= $fiko_B['fiko_status'] ?> value="<?=$fiko_B['fiko_no_kamar']?>"class="fiko_seat"></td> 
                             <?php } ?>

                        </div>
                        <div class="row">
                            <?php while ($fiko_C = mysqli_fetch_assoc($fiko_kamarC)) {?>
                                <label><?=$fiko_C['fiko_no_kamar']?></label>
                                <td><input type="checkbox" name="fiko_kursi[]" <?= $fiko_C['fiko_status'] ?> value="<?=$fiko_C['fiko_no_kamar']?>"class="fiko_seat"></td> 
                          <?php } ?>
                        </div>
                        <div class="row">
                            <?php while ($fiko_D = mysqli_fetch_assoc($fiko_kamarD)) {?>
                                <label><?=$fiko_D['fiko_no_kamar']?></label>
                                <td><input type="checkbox" name="fiko_kursi[]" <?= $fiko_D['fiko_status'] ?> value="<?=$fiko_D['fiko_no_kamar']?>"class="fiko_seat"></td> 
                            <?php } ?>
                        </div>
                        <div class="row">
                            <?php while ($fiko_E = mysqli_fetch_assoc($fiko_kamarE)) {?>
                                <label><?=$fiko_E['fiko_no_kamar']?></label>
                                <td><input type="checkbox" name="fiko_kursi[]" <?= $fiko_E['fiko_status'] ?> value="<?=$fiko_E['fiko_no_kamar']?>"class="fiko_seat"></td> 
                             <?php } ?>
                        </div>
            </tr>
            
            <tr>
                <td><input type="submit" name="simpan" value="Simpan"></td> 
            </tr>
            </form>
                <p align="center"><a href="fiko_check_in.php"><button>Kembali</button></a></p>
                
           
</body>
</html>