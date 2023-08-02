<?php
session_start();
$_SESSION['admin']=0;
header("location:../login admin/login_page_admin.php");
?>