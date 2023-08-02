<?php
 include "connection.php";

 $id= $_POST['form_hidden'];
 $firtname=$_POST['first_name'];
 $lastname=$_POST['last_name'];
 $email=$_POST['e_mails'];
 $mobile=$_POST['mobile_no'];
 $birthday=$_POST['b_dates'];
 $houseno=$_POST['house_no'];
 $societyname=$_POST['society_name'];
 $totalmember=$_POST['t_member'];
 $entrydate=$_POST['entry_date'];

 

  echo $query_update="update user_entry set first_name='$firtname',last_name='$lastname',e_mail='$email',mobile_no='$mobile',b_date='$birthday', house_id='$houseno',
               society_name='$societyname',total_member='$totalmember',entry_date='$entrydate' where user_id='$id'";
     $result_update=mysqli_query($conn,$query_update);
     if($result_update){
         
        //  echo "update successfully";
         header("location:society_member.php");
     }
     else{
         echo "update not successfully";
     }
 ?>