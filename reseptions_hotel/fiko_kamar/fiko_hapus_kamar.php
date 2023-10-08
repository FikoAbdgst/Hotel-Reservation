<?php
include'../fiko_koneksi.php';
$fiko_id_kamar = $_GET['fiko_id'];
mysqli_query($fiko_koneksi,"DELETE FROM fiko_kamar where fiko_id_kamar='$fiko_id_kamar'");

header('location:fiko_kamar.php');
?>