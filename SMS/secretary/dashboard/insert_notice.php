<?php
include "connection.php";
if (isset($_POST['insert_notice'])) {
	

    $notice_subject=$_POST['n_subject'];
    $notice_date=$_POST['n_date'];
    $notice_details=$_POST['n_details'];
    $notice_postes=$_POST['posted_by'];

/********file upload start***************************/

$notice_photo = $_FILES["img_photo"]["name"];
$folderName = "notice_image/";
$validExt = array("jpg", "png", "jpeg", "bmp", "gif","txt");
//  print_r($validExt);
if ($notice_photo == "") {
 $msg = errorMessage( "Attach an image");
} elseif ($_FILES["img_photo"]["size"] <= 0 ) {
 $msg = errorMessage( "Image is not proper.");
} else {
$tmp = explode('.', $notice_photo);
$file_extension = end($tmp);
 $ext = strtolower($file_extension);
 if ( !in_array($ext, $validExt) )  {
     $msg = errorMessage( "Not a valid image file");
 } else {
     $filePath = $folderName. rand(10000, 990000). '_'. date("his").'.'.$ext;
     
     if ( move_uploaded_file( $_FILES["img_photo"]["tmp_name"], $filePath)) {
        $query="INSERT INTO noticetb(subject,n_date,details,photos,posted_by)
        VALUES ('$notice_subject','$notice_date','$notice_details','$filePath','$notice_postes')";
         
         $sql = mysqli_query($conn,$query); 
         if($sql){
            // echo "Uploaded and saved to database.";
            header("location:notice_user.php");
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