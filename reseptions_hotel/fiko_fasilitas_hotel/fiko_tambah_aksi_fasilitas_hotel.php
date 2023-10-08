 <?php
session_start();
include '../fiko_koneksi.php';

        	$fiko_nama_fasilitas = $_POST['fiko_nama_fasilitas'];
        	$fiko_keterangan = $_POST['fiko_keterangan'];
                $fiko_nama_file = $_FILES['fiko_image']['name'];
                $fiko_source = $_FILES['fiko_image']['tmp_name'];
                $fiko_folder = './upload/';
                

        move_uploaded_file($fiko_source, $fiko_folder.$fiko_nama_file);
        $fiko_insert = mysqli_query($fiko_koneksi,"INSERT INTO fiko_fasilitas_hotel values(
                '',
                '$fiko_nama_fasilitas',
                '$fiko_keterangan',
                '$fiko_nama_file')");

                 if($fiko_insert){
                        echo "<script>alert('Data yang anda input berhasil ditambahkan ke database');document.location='fiko_fasilitas_hotel.php'</script>";
                }
        ?>