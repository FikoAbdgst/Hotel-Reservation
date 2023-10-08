<?php
include'../fiko_koneksi.php';
$fiko_id_tipe = $_GET['fiko_id'];
mysqli_query($fiko_koneksi,"DELETE FROM fiko_tipe_kamar where fiko_id_tipe='$fiko_id_tipe'");

header('location:fiko_tipe_kamar.php');
?>