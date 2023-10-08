<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
$tipes=mysqli_query($fiko_koneksi,"SELECT * from fiko_kamar where fiko_id_tipe='$fiko_id_tipe' and fiko_status = 'Tersedia' ");
                     ?>
                <input type="checkbox" name="fiko_id_kamar">
                    <option selected disabled>Pilih No Kamar</option>
                
                 <?php
                    foreach ($tipes as $key => $tipe) {
                        echo "<option value={$tipe['fiko_id_kamar']}>{$tipe['fiko_no_kamar']}</option>";
                    }
                    ?>

              
</body>
</html>