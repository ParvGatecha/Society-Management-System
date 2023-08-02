<?php

include "connection.php";
  
  try{
      $id=$_GET['id'];

      $query="delete from house_member where h_id=".$id;
      $result=mysqli_query($conn,$query);

     header("location:display_house_all_member.php");
  }
  catch(Exception $e){
      header("location:display_house_all_member.php");
  }

?>