<?php
include'../fiko_koneksi.php';
$fiko_id_fasilitas = $_GET['fiko_id'];
mysqli_query($fiko_koneksi,"DELETE FROM fiko_fasilitas_hotel where fiko_id_fasilitas='$fiko_id_fasilitas'");

header('location:fiko_fasilitas_hotel.php');
?>