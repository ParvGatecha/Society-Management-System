<?php
error_reporting(0);
session_start();

if($_SESSION['secretary'] == 0 || $_SESSION['secretary'] == ""){
     header("location:../../Login Page/Login_page.php");
}
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
</head>
<body>
<ul class="nav">
          <li>
            <a href="secretary_dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="society_member.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Society Member</p>
            </a>
          </li>
          <li>
            <a href="payment_details_secretary.php">
              <i class="fab fa-cc-amazon-pay"></i>
              <p>Payment Details</p>
            </a>
          </li>
          <li>
            <a href="minutes_of_meeting.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Minutes Of Meeting</p>
            </a>
          </li>
          <li>
            <a href="notice_user.php">
              <i class="nc-icon nc-bell-55"></i>
              <p>Notices</p>
            </a>
          </li>
          <li>
            <a href="display_complain_to_secretary.php">
              <i class="nc-icon nc-caps-small"></i>
              <p>Complaint managment</p>
            </a>
          </li>
          <li class="active ">
            <a href="user_profile_display.php">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
        </ul>
</body>
</html>