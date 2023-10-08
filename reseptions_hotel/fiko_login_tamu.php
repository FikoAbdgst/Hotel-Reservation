<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/fiko_login.css">
    <title>
        Login
    </title>
<?php
session_start();
if (!empty($_SESSION['status']) ) {
header('location: fiko_tamu/fiko_tamu.php');
}
?>
</head>
<body>
      <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

       

<form  method="post" action="fiko_ceklogin_tamu.php">
     <h3>Login </h3>

    <label>Username : </label>
            <input type="text" name="fiko_username" placeholder="Masukkan Username" autocomplete="off">

    <label>Password : </label>
           <input type="password" name="fiko_password" placeholder="Masukkan Password" required >
           
        <button>Login</button>
        <p align="center"> Belum memiliki akun? <a href="fiko_registrasi.php" style="color: #1845ad;">Daftar disini</a></p>
        <p align="center">Back To <a href="fiko_home/fiko_index.php" style="color: red;">Menu</a></p> 
</form>
        

<br>

</div>
</body>
</html>