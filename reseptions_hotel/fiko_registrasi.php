 <?php
        session_start();
        include'fiko_koneksi.php'; 
        
 $fiko_query = mysqli_query($fiko_koneksi, "SELECT max(fiko_no_identitas) as kodeTerbesar FROM fiko_tamu");
    $fiko_data = mysqli_fetch_array($fiko_query);
    $fiko_kodeBarang = $fiko_data['kodeTerbesar'];
 
    $fiko_urutan = (int) substr($fiko_kodeBarang, 3, 3);
 
    $fiko_urutan++;
 
    $fiko_huruf = "No-";
    $fiko_kode_reservasi = $fiko_huruf . sprintf("%03s", $fiko_urutan);
    
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign in</title>
    <link rel="stylesheet" type="text/css" href="css/fiko_registrasi1.css">
</head>
<body>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
	<form  method="post" action="fiko_cekdaftar.php">
       
    	<h3>Daftar</h3>
        
            
            <input type="hidden" name="fiko_no_identitas" value="<?php echo $fiko_kode_reservasi ?>" readonly>
        
       
           <label>Nama :</label> 
            	<input type="text" name="fiko_nama_tamu" placeholder="Masukkan Nama" autocomplete="off" required>
        
       
        <label>Email :</label>
        <input type="text" name="fiko_email_tamu" placeholder="Masukkan Email" autocomplete="off" required>
        
       
           <label>Username :</label>
           
           <input type="text" name="fiko_username" placeholder="Masukkan Username" autocomplete="off" required>
        
       
           
           <label>Password : </label>
           <input type="password" name="fiko_password" placeholder="Masukkan Password" required >
        
       
           <label>Telepon Tamu :</label>
           
           <input type="text" name="fiko_telepon_tamu" placeholder="Masukkan No Telp" autocomplete="off" required>
        
       
       
           <p ><input type="submit" name="simpan" value="Daftar" style=" margin-top: 10px;
                                                                     width: 100%;
                                                                     background-color: #ffffff;
                                                                     color: #080710;
                                                                     padding-top: 10px ;
                                                                     padding-bottom: 30px;
                                                                     font-size: 18px;
                                                                     font-weight: 600;
                                                                     border-radius: 5px;
                                                                     cursor: pointer;"></td></p>
         <p align="center"> Sudah memiliki akun? <a href="fiko_login_tamu.php" style="color: #1845ad;">Login disini</a></p>
        </form>
    
</body>
</html>