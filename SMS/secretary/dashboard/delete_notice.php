<?php
include "connection.php";

$id=$_GET['id'];
 $querry = "delete from noticetb where notice_id=$id";
$sql=mysqli_query($conn,$querry);

if ($sql)
 {
	 
	 echo "record del successfully";
	header('location:notice_user.php');
 
 }
 else
 {
	 
	 echo "record not del successfully";

 }


?>