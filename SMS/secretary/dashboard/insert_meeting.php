<?php
include "connection.php";

if (isset($_POST['mom_meeting'])) {
	

            $title=$_POST['mom_title'];
            $mom_date=$_POST['mom_date'];
            $start_time=$_POST['mom_stime'];
            $end_time=$_POST['mom_etime'];
            $topic=$_POST['mom_topic'];
            $query="INSERT INTO mom_meeting( title, meeting_date, start_time, end_time, topic) VALUES ('$title','$mom_date','$start_time','$end_time','$topic')";
             $sql = mysqli_query($conn,$query);
if ($sql)
 {
     
    //  echo "record inserted successfully";
    header("location:minutes_of_meeting.php");
 }
 else
 {
     
     echo "record not inserted successfully";
 }
} 



?>