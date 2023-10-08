<?php
session_start();
include'fiko_koneksi.php';
			
		  $fiko_no_identitas = $_POST['fiko_no_identitas'];
 		  $fiko_nama_tamu = $_POST['fiko_nama_tamu'];
            $fiko_email_tamu = $_POST["fiko_email_tamu"];
            $fiko_username = $_POST["fiko_username"];
            $fiko_password = md5($_POST["fiko_password"]);
            $fiko_telepon_tamu = $_POST["fiko_telepon_tamu"];

            $fiko_query_sql =mysqli_query($fiko_koneksi,"INSERT INTO fiko_tamu 
                                               VALUES ('',
                                               		   '$fiko_no_identitas',
                                               		   '$fiko_nama_tamu',
                                               		   '$fiko_email_tamu',
                                               		   '$fiko_username',
                                               		   '$fiko_password',
                                                          '$fiko_telepon_tamu' )");
            if ($fiko_query_sql) {
                 header('location:fiko_login_tamu.php');
            }
?>