<?php
session_start();
session_destroy();

header('location:fiko_login.php');
?>