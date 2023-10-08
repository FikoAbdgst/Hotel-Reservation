<?php
	 
	session_start();

	include '../fiko_koneksi.php';

	$fiko_id_reservasi = $_POST['fiko_id_reservasi'];
	$fiko_kode_reservasi = $_POST['fiko_kode_reservasi'];
	$fiko_nama_tamu = $_POST['fiko_nama_tamu'];
	$fiko_email_tamu = $_POST['fiko_email_tamu'];
	$fiko_check_in = $_POST['fiko_check_in'];
	$fiko_check_out = $_POST['fiko_check_out'];
	$fiko_jumlah_kamar = $_POST['fiko_jumlah_kamar'];
	$fiko_jumlah_tamu = $_POST['fiko_jumlah_tamu'];
	$fiko_pesan = $_POST['fiko_pesan'];
	$fiko_status = $_POST['fiko_status'];
	$fiko_tipe = $_POST['fiko_id_tipe'];
	$fiko_jumlah_bed = $_POST['fiko_bed'];

	$fiko_start = date_create($_POST['fiko_check_in']);
	$fiko_end = date_create($_POST['fiko_check_out']);
	$fiko_diff  = date_diff( $fiko_start, $fiko_end);
	
	$fiko_kamar = $_POST['fiko_jumlah_kamar'] + $fiko_diff->days;

	$fiko_total = $_POST['fiko_harga'] * $fiko_kamar;

	$fiko_haik = $_POST['fiko_bed'] - $fiko_jumlah_kamar;


	$fiko_datanya = mysqli_query($fiko_koneksi, "UPDATE fiko_tipe_kamar set fiko_jumlah_bed = '$fiko_haik'
		where fiko_id_tipe='$fiko_id_reservasi'");

	$fiko_data = mysqli_query($fiko_koneksi, "INSERT INTO fiko_reservasi values (
		'', 
		'$fiko_kode_reservasi',
		'$fiko_nama_tamu',
		'$fiko_email_tamu', 
		'$fiko_check_in',
		'$fiko_check_out',
		'$fiko_jumlah_kamar',
		'$fiko_jumlah_tamu',
		'$fiko_pesan',
		'$fiko_tipe',
		'$fiko_status',
		'$fiko_total') ");

		if($fiko_data){
        header("location:fiko_laporan.php");

	}


?>