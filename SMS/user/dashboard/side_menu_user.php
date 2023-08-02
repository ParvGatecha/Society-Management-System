<?php
error_reporting(0);
session_start();

if($_SESSION['user'] == 0 || $_SESSION['user'] == ""){
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
            <a href="user_dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="../../PaytmKit/index.php">
              <i class="fab fa-cc-amazon-pay"></i>
              <p>Online Payment</p>
            </a>
          </li>
          <li>
            <a href="display_bill_user.php">
              <i class="fas fa-money-bill-wave-alt"></i>
              <p>Bill Details</p>
            </a>
          </li>
          <li>
            <a href="mom_display_user.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Minutes Of Meeting</p>
            </a>
          </li>
          <li>
            <a href="display_notice_to_user.php">
              <i class="nc-icon nc-bell-55"></i>
              <p>Notices</p>
            </a>
          </li>
          <li>
            <a href="house_member.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Add House Member</p>
            </a>
          </li>
          <li>
            <a href="user_send_complain.php">
              <i class="nc-icon nc-caps-small"></i>
              <p>Complaint managment</p>
            </a>
          </li>
          <li class="active ">
            <a href="user.php">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
        </ul>
    </body>
</html>