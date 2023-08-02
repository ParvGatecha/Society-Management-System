<?php
 include "connection.php";

  $id= $_POST['complain_hidden'];
 $solution_compplain=$_POST['c_solution'];


   $query_update="update complain_tb set c_solution='$solution_compplain',c_status='1' where complain_id='$id'";
     $result_update=mysqli_query($conn,$query_update);
     if($result_update){
         
        //  echo "update successfully";
         header("location:display_complain_to_secretary.php");
     }
     else{
         echo "update not successfully";
     }
 ?>