<?php
session_start();
unset($_SESSION['ADMIN_LOGIN']);
unset($_SESSION['ADMIN_USERNAME']);
unset($_SESSION['SHOP_LOGIN']);
unset($_SESSION['SHOP_USERNAME']);
header('location:index.php');
die();
?>