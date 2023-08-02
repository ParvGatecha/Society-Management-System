<?php
 include "connection.php";

  $id= $_POST['forms_hidden'];
  $firstname=$_POST['f_name'];
  $lastname=$_POST['l_name'];
  $mobile=$_POST['mobiles'];
  $email=$_POST['emails'];
  $username=$_POST['user'];
  $gender=$_POST['gender'];
  $bod=$_POST['b_date'];
  $occupation=$_POST['occupation'];
  $join_date=$_POST['join_date'];
 

   $query_update="update secretary_entry set f_name='$firstname',l_name='$lastname',e_mails='$email',mobiles_no='$mobile',
   dob='$bod',gender='$gender',occupation='$occupation',username='$username',join_date='$join_date' where sec_id='$id'";
     $result_update=mysqli_query($conn,$query_update);
     if($result_update){
         
        //  echo "update successfully";
         header("location:secretary_details_admin.php");
     }
     else{
         echo "update not successfully";
     }
 ?>