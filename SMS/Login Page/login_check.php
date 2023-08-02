<?php
session_start();
error_reporting(0);
include "connection.php";

if(isset($_POST['login_s'])){
$username=$_POST['username'];
$password=$_POST['lock'];
  
 $query="select * from user_entry where e_mail='$username'and password='$password'";
  
 $query2="select * from secretary_entry where username='$username'and password='$password'";
$result=mysqli_query($conn,$query);
$result2=mysqli_query($conn,$query2);
 $row=mysqli_num_rows($result);
 $row2=mysqli_num_rows($result2);
 if($row > 0 || $row2 > 0){
      $row=mysqli_fetch_assoc($result);
      $row2=mysqli_fetch_assoc($result2);
     if($row['account_type'] == 1)
     {
        $uname=$row['first_name']." ".$row['last_name'];
        $_SESSION['user']=$row['user_id'];
        $_SESSION['username']=$uname;
        header("location:../user/dashboard/user_dashboard.php");

     }
     else{
        $_SESSION['secretary']=1;
        header("location:../secretary/dashboard/secretary_dashboard.php");
     }
 }
}
?>