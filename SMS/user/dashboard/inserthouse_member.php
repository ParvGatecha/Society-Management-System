<?php
include "connection.php";

if (isset($_POST['house_member'])) {
	

        $member1=$_POST["member1"];
        $gender1=$_POST["gender1"];
        $b_date1=$_POST["b_date1"];
        $b_group1=$_POST["b_group1"];
        $member2=$_POST["member2"];
        $gender2=$_POST["gender2"];
        $b_date2=$_POST["b_date2"];
        $b_group2=$_POST["b_group2"];
        $member3=$_POST["member3"];
        $gender3=$_POST["gender3"];
        $b_date3=$_POST["b_date3"];
        $b_group3=$_POST["b_group3"];
        $member4=$_POST["member4"];
        $gender4=$_POST["gender4"];
        $b_date4=$_POST["b_date4"];
        $b_group4=$_POST["b_group4"];
        $member5=$_POST["member5"];
        $gender5=$_POST["gender5"];
        $b_date5=$_POST["b_date5"];
        $b_group5=$_POST["b_group5"];

         $query="INSERT INTO house_member(member1, gender1, b_date1,b_group1, member2, gender2, b_date2, b_group2,member3, gender3, b_date3,b_group3, member4, gender4, b_date4,b_group4, member5, gender5,b_date5,b_group5) VALUES ('$member1','$gender1','$b_date1','$b_group1','$member2','$gender2','$b_date2','$b_group2','$member3','$gender3','$b_date3','$b_group3','$member4','$gender4','$b_date4','$b_group4','$member5','$gender5','$b_date5','$b_group5')";
                 
                 $sql = mysqli_query($conn,$query);
 if ($sql)
 {
     
    //  echo "record inserted successfully";
    header("location:house_member.php");
 }
 else
 {
     
     echo "record not inserted successfully";
 }
} 



?>