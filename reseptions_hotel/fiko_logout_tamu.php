<?php
session_start();
session_destroy();
session_unset();

header('location:fiko_login_tamu.php');
?>