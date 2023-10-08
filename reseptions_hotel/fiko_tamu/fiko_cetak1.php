
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="fiko_laporan.css">
</head>
<body>
<?php
session_start();
      include '../fiko_koneksi.php';
        $fiko_no = 1;
        $fiko_username_tamu= $_SESSION['fiko_username'];
$fiko_query = mysqli_query($fiko_koneksi,"SELECT * FROM fiko_reservasi order by fiko_id_reservasi desc limit 1
");
$fiko_d=mysqli_fetch_array($fiko_query);
?>
	<div class="container">
      <form style="padding-bottom: 480px;margin-top: 200px;">
	<h1>Laporan</h1>
         
      	<label>Kode Reservasi</label> 
            <input name="fiko_kode" type="text" value="<?php echo $fiko_d['fiko_kode_reservasi']?>" disabled>                        
    
 
         <label>Nama :</label>

           <input name="fiko_nama" type="text" value="<?php echo $fiko_d['fiko_nama_tamu']?>"disabled>   
             
 <label>Email :</label>
            <input name="fiko_email" type="text" value="<?php echo $fiko_d['fiko_email_tamu']?>"disabled>   
                
   
 
         <label>Check In :</label>
            <input name="fiko_check_in" type="text" value="<?php echo $fiko_d['fiko_check_in']?>" disabled>   
  
 
         <label>Check Out:</label>
            <input name="fiko_check_out" type="text" value="<?php echo $fiko_d['fiko_check_out']?>" disabled>   
    
 
         <label>Tipe Kamar :</label>
            <input name="fiko_tipe" type="text" value="<?php echo $fiko_d['fiko_id_tipe']?>" disabled>   
   
 
         <label>Jumlah Kamar :</label>
            <input name="fiko_jumlah_kamar" type="text" value="<?php echo $fiko_d['fiko_jumlah_kamar']?>" disabled>   
  
 
         <label>Jumlah Kamar :</label>
            <input name="fiko_jumlah_tamu" type="text" value="<?php echo $fiko_d['fiko_jumlah_kamar']?>" disabled>   
   
         <label>Pesan :</label>
            <input name="fiko_pesan" type="text" value="<?php echo $fiko_d['fiko_pesan']?>" disabled>   
                
        
   
        <label>Total : </label> 
 <input disabled name="harga" type="text" value="<?php echo "Rp. ".number_format($fiko_d['fiko_total'])." ,-"; ?> >
             

	 <p align="center">
                  
                  
                </p><a href="fiko_tamu.php"><button style="margin-top: 0px;">Home</button></a>
	  <script>
      window.print();
   </script>
</body>
</html>