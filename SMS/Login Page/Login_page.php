<?php
error_reporting(0);
session_start();
if($_SESSION['user'] != "" || $_SESSION['user'] != 0){
    header("location:../user/dashboard/user_dashboard.php");
}else{
    if($_SESSION['secretary'] != 0 || $_SESSION['secretary'] != ""){
        header("location:../secretary/dashboard/secretary_dashboard.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="shortcut icon" href="../admin/assets/img/2.png" type="image/x-icon">
    <title>Login Page</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
    </script>
</head>
<body>

   <div class="conatiner">
       <div class="forms-conatiner">
           <div class="signin-signup">
               <form action="login_check.php" method="POST" class="sign-in-form">
                   <h2 class="title">Login</h2> 
                   <div class="input-field">
                       <i class="fas fa-user"></i>
                       <input type="text" name="username" placeholder="Member Id">
                   </div>
                   <div class="input-field" >
                    <i class="fas fa-lock"></i>
                    <input type="password" name="lock" placeholder="Password" >
                </div>
                <button name="login_s" class="btn solid">
                    Login
                </button> 
               </form>
           </div>
       </div>
       <div class="panel-container ">
         <div class="panel left-panel">
             <img src="./image/apartment.svg" alt="No Picture" class="image">
         </div> 
       </div>
   </div>
  
</body>
</html>