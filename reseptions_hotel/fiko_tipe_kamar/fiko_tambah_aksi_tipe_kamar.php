 <?php
session_start();
include '../fiko_koneksi.php';
        	$fiko_tipe_kamar = $_POST['fiko_tipe_kamar'];
        	$fiko_deskripsi = $_POST['fiko_deskripsi'];
                $fiko_nama_file = $_FILES['fiko_foto']['name'];
                $fiko_source = $_FILES['fiko_foto']['tmp_name'];
                $fiko_folder = './upload/';
                $fiko_fasilitas = $_POST['fiko_fasilitas'];
                $fiko_harga = $_POST['fiko_harga'];
                $fiko_jumlah_bed = $_POST['fiko_jumlah_bed'];
                

        move_uploaded_file($fiko_source, $fiko_folder.$fiko_nama_file);
        $fiko_insert = mysqli_query($fiko_koneksi,"insert into fiko_tipe_kamar values(
                '',
                '$fiko_tipe_kamar',
                '$fiko_deskripsi',
                '$fiko_nama_file',
                '$fiko_fasilitas',
                '$fiko_harga',
                '$fiko_jumlah_bed')");

                if($fiko_insert){
                           echo "<script>alert('Data berhasil di masukkan');document.location='fiko_tipe_kamar.php'</script>";
                }
        ?>