<?php
include "connection.php";

 $id=$_GET['id'];
 $querry = "delete from secretary_entry where sec_id=$id";
 $sql=mysqli_query($conn,$querry);

if ($sql)
 {
	 
	 echo "record del successfully";
	header('location:secretary_details_admin.php');
 
 }
 else
 {
	 
	 echo "record not del successfully";

 }


?>