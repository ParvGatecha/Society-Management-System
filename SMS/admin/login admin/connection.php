<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SMS";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	// echo "connection successfuly";
	
}
else
{
	echo 'not connected ';
	
}


?>