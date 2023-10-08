<?php

include'../fiko_koneksi.php';
        
$fiko_id_fasilitas = $_POST['fiko_id_fasilitas']; 
$fiko_nama_fasilitas = $_POST['fiko_nama_fasilitas'];
$fiko_keterangan = $_POST['fiko_keterangan'];
$fiko_nama_file = $_FILES['fiko_foto']['name'];
$fiko_source = $_FILES['fiko_foto']['tmp_name'];
$fiko_folder = './upload/';

         move_uploaded_file($fiko_source, $fiko_folder.$fiko_nama_file);
        mysqli_query($fiko_koneksi, "UPDATE fiko_fasilitas_hotel 
        set fiko_nama_fasilitas='$fiko_nama_fasilitas',
                fiko_keterangan='$fiko_keterangan',
                fiko_foto='$fiko_nama_file'
        where fiko_id_fasilitas='$fiko_id_fasilitas'");

header('location:fiko_fasilitas_hotel.php');
?>