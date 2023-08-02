<?php
include "connection.php";

try{
    $id=$_POST['mom'];
    $title=$_POST['mom_title'];
    $m_date=$_POST['mom_date'];
    $m_stime=$_POST['mom_stime'];
    $m_etime=$_POST['mom_etime'];
    $m_topic=$_POST['mom_topic'];

    $query="update mom_meeting set title='$title',meeting_date='$m_date',start_time='$m_stime',
     end_time='$m_etime',topic='$m_topic' where meeting_id=".$id;
     $result=mysqli_query($conn,$query);
     header("location:minutes_of_meeting.php");
    
}
catch(Exception $e){
   
    header("location:minutes_of_meeting.php");
    
}

?>