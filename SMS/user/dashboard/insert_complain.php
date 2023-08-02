<?php
session_start();
include "connection.php";

$user_id="select user_id from user_entry";
     $result1=mysqli_query($conn,$user_id);
     $username=$_SESSION['user'];
if (isset($_POST['complain_insert'])) {
    
    
    $c_title=$_POST['c_title'];
    $c_description=$_POST['c_description'];
    $c_date=$_POST['c_date'];
    

      echo  $query="INSERT INTO complain_tb(user_id,c_title,c_details,c_date)
        VALUES ('$username','$c_title','$c_description','$c_date')";
         $sql = mysqli_query($conn,$query); 
        if($sql){
            echo "insert successfully";
            header("location:user_send_complain.php");
        }
        else{
            echo mysqli_error($conn);
            echo "insert not successfully";
        }
     
 }


   





?>