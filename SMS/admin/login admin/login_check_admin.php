<?php
session_start();
error_reporting(0);
include "connection.php";

if(isset($_POST['login_a'])){
$username=$_POST['username_admin'];
$password=$_POST['lock_admin'];
  
 $query="select * from main_admin where main_username='$username'and main_password='$password'";
$result=mysqli_query($conn,$query);
 $row=mysqli_num_rows($result);
 $row2=mysqli_fetch_array($result);
 if($row > 0){
   $_SESSION['admin']=$row['main_admin_id'];
   header("location:../dashboard/admin_dashboard.php");
   //    $row=mysqli_fetch_assoc($result);
   //   if($row['account_type'] == 1)
   //   {
   //      $uname=$row['first_name']." ".$row['last_name'];
   //      $_SESSION['user']=$row['user_id'];
   //      $_SESSION['username']=$uname;
   //      header("location:../user/dashboard/user_dashboard.php");

   //   }
   //   else{
   //      $_SESSION['secretary']=1;
   //      header("location:../secretary/dashboard/secretary_dashboard.php");
   //   }
 }
 else{
    header("location:Login_page_admin.php");
 }
}
?>