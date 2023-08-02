<?php
 include "connection.php";

  $id= $_POST['form_hidden'];
 $firtname=$_POST['f_name'];
 $lastname=$_POST['l_name'];
 $email=$_POST['e_mail'];
 $mobile=$_POST['mobile_no'];
 $birthday=$_POST['birth_no'];
 $houseno=$_POST['house_no'];
 $societyname=$_POST['society_no'];
 $totalmember=$_POST['total_member'];
 $entrydate=$_POST['entry_no'];
//  $photo=$_POST['profile_photo'];
 $account=$_POST['account_type'];

   $query_update="update user_entry set first_name='$firtname',last_name='$lastname',e_mail='$email',mobile_no='$mobile',b_date='$birthday', house_id='$houseno',
               society_name='$societyname',total_member='$totalmember',entry_date='$entrydate',account_type='$account' where user_id='$id'";
     $result_update=mysqli_query($conn,$query_update);
     if($result_update){
         
        //  echo "update successfully";
         header("location:society_member.php");
     }
     else{
         echo "update not successfully";
     }
 ?>