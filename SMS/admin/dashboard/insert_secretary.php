<?php
include "connection.php";

if (isset($_POST['insert_secretary'])) {
	

            $firstname=$_POST['admin_firstname'];
            $lastname=$_POST['admin_lastname'];
            $email=$_POST['admin_email'];
            $mobile=$_POST['admin_mobile'];
            $birthday=$_POST['admin_birthday_date'];
            $gender=$_POST['gender_type'];
            $occupation=$_POST['admin_occupation'];
            $username=$_POST['admin_username'];
            $password=$_POST['admin_password'];
            $join_date=$_POST['admin_join_date'];

     /********file upload start***************************/

     $sec_photo = $_FILES["admin_profile_photo"]["name"];
     $folderName = "sec_photo/";
     $validExt = array("jpg", "png", "jpeg", "bmp", "gif","txt");
    //  print_r($validExt);
     if ($sec_photo == "") {
         $msg = errorMessage( "Attach an image");
     } elseif ($_FILES["admin_profile_photo"]["size"] <= 0 ) {
         $msg = errorMessage( "Image is not proper.");
     } else {
        $tmp = explode('.', $sec_photo);
        $file_extension = end($tmp);
         $ext = strtolower($file_extension);
         if ( !in_array($ext, $validExt) )  {
             $msg = errorMessage( "Not a valid image file");
         } else {
             $filePath = $folderName. rand(10000, 990000). '_'. date("his").'.'.$ext;
             
             if ( move_uploaded_file( $_FILES["admin_profile_photo"]["tmp_name"], $filePath)) {
                $query="INSERT INTO secretary_entry(f_name,l_name,e_mails,mobiles_no,dob,gender,occupation,username,password,join_date,sec_photo)
                VALUES ('$firstname','$lastname','$email','$mobile','$birthday','$gender',' $occupation','$username','$password','$join_date','$filePath')";
                 
                 $sql = mysqli_query($conn,$query); 
                 if($sql){
                    // echo "Uploaded and saved to database.";
                    header("location:secretary_details_admin.php");
                 }
                else{
                    echo "Problem in saving to database";
                }
                 
             } else {
                 echo "Problem in uploading file";
             }
             
         }
     }

     /********file upload end****************************************/
           
    
    
    } 



?>