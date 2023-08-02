<?php
include "connection.php";

$id=$_GET['id'];
 $querry = "delete from mom_meeting where meeting_id=$id";
$sql=mysqli_query($conn,$querry);

if ($sql)
 {
	 
	 echo "record del successfully";
	header('location:minutes_of_meeting.php');
 
 }
 else
 {
	 
	 echo "record not del successfully";

 }


?>