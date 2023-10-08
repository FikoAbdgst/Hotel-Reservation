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
header('location: fiko_administrator.php');
}
?>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

       

<form  method="post" action="fiko_ceklogin.php">
     <h3>Login </h3>

    <label style="margin-top: 80px;">Username : </label>
            <input type="text" name="fiko_username_user" placeholder="Masukkan Username" autocomplete="off">

    <label>Password : </label>
           <input type="password" name="fiko_password_user" placeholder="Masukkan Password" required >
           
        <button style="margin-top: 50px;">Login</button>
</form>
        
</body>
</html>