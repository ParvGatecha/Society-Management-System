<?php
 include "connection.php";

  $id= $_POST['notice_hidden'];
 $notice_s=$_POST['n_subject'];
 $notice_d=$_POST['n_date'];
 $notice_de=$_POST['n_details'];
//  $notice_photo=$_POST['img_photo'];
 $notice_posted=$_POST['n_posted'];
 

   $query_update="update noticetb set subject='$notice_s',n_date='$notice_d',details='$notice_de',
                  posted_by='$notice_posted' where notice_id='$id'";
     $result_update=mysqli_query($conn,$query_update);
     if($result_update){
         
        //  echo "update successfully";
         header("location:notice_user.php");
     }
     else{
         echo "update not successfully";
     }
 ?>