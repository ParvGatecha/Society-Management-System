<?php
include "connection.php";

if (isset($_POST['insert_members'])) {
	

            $firstname=$_POST['m_firstname'];
            $lastname=$_POST['m_lastname'];
            $email=$_POST['email'];
            $mobile=$_POST['mobile'];
            $birthday=$_POST['birthday_date'];
            $house=$_POST['house_no'];
            $societyname=$_POST['society_name'];
            $totalmember=$_POST['total_user_memeber'];
            $entrydate=$_POST['entry_member_date'];
            $password=$_POST['password'];
            $accountype=$_POST['account_type'];

     /********file upload start***************************/

     $img_file = $_FILES["profile_photo"]["name"];
      $img_file;
     $folderName = "images/";
     $validExt = array("jpg", "png", "jpeg", "bmp", "gif","txt");
    //  print_r($validExt);
     if ($img_file == "") {
         $msg = errorMessage( "Attach an image");
     } elseif ($_FILES["profile_photo"]["size"] <= 0 ) {
         $msg = errorMessage( "Image is not proper.");
     } else {
        $tmp = explode('.', $img_file);
        $file_extension = end($tmp);
         $ext = strtolower($file_extension);
         if ( !in_array($ext, $validExt) )  {
             $msg = errorMessage( "Not a valid image file");
         } else {
             $filePath = $folderName. rand(10000, 990000). '_'. date("his").'.'.$ext;
             
             if ( move_uploaded_file( $_FILES["profile_photo"]["tmp_name"], $filePath)) {
                $query="INSERT INTO user_entry(first_name,last_name,e_mail,mobile_no,b_date,house_id,society_name,total_member,password,user_photo,entry_date,account_type)
                VALUES ('$firstname','$lastname','$email','$mobile','$birthday','$house','$societyname','$totalmember','$password','$filePath','$entrydate','$accountype')";
                 
                 $sql = mysqli_query($conn,$query); 
                 if($sql){
                    // echo "Uploaded and saved to database.";
                    header("location:society_member.php");
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