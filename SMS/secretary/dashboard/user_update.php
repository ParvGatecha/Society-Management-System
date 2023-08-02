<?php
 include "connection.php";

 $id= $_POST['form_hidden'];
 $firtname=$_POST['m_firstname'];
 $lastname=$_POST['m_lastname'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $birthday=$_POST['birthday_date'];
 $houseno=$_POST['house_no'];
 $societyname=$_POST['society_name'];
 $totalmember=$_POST['total_user_memeber'];
 $entrydate=$_POST['entry_member_date'];
 $photo=$_POST['profile_photo'];
 $account=$_POST['account_type'];

   $query_update="update user_entry set first_name='$firtname',last_name='$lastname',e_mail='$email',mobile_no='$mobile',b_date='$birthday', house_id='$houseno',
               society_name='$societyname',total_member='$totalmember',user_photo='$photo',entry_date='$entrydate',account_type='$account' where user_id='$id'";
     $result_update=mysqli_query($conn,$query_update);
     if($result_update){
         
         echo "update successfully";
        //  header("location:society_member.php");
     }
     else{
         echo "update not successfully";
     }
 ?>