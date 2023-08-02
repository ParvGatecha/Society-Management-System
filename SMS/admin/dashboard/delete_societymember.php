<?php
include "connection.php";

$id=$_GET['id'];
 $querry = "delete from user_entry where user_id=$id";
 $sql=mysqli_query($conn,$querry);

if ($sql)
 {
	 
	 echo "record del successfully";
	header('location:society_member.php');
 
 }
 else
 {
	 
	 echo "record not del successfully";

 }


?>