<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Admin
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
         <?php include "side_menu_admin.php"?>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Society Managment System</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <?php include "nav_bar_admin.php"?>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <!----------------------------PHP DISPLAY USER DETAILS START------------------------------------->
 <?php
include "connection.php";
$id=$_GET['id'];
$displayquery="select * from user_entry where user_id='$id'";
$result = mysqli_query($conn,$displayquery);
	while ($row=mysqli_fetch_array($result)) {
		
	 $uid=$row['user_id'];
	 $firstname=$row['first_name']; 
     $lastname=$row['last_name'];
      $emails=$row['e_mail'];
     $mobiles_no=$row['mobile_no'];
     $bdates = $row['b_date'];
     $house_no=$row['house_id'];
    $society=$row['society_name'];
    $total_member=$row['total_member'];
    $entry_date=$row['entry_date'];
    $user_photo=$row['sec_photo'];
  }
?>


<!----------------------------PHP DISPLAY USER DETAILS end------------------------------------->
      <div class="content">
        <div class="row">
          <div class="col-md-4 d-none">
            <div class="card card-user">
              <div class="image">
                
              </div>
              <div class="card-body d-none">
                <div class="author">
                </div>
                
              </div>
            </div>
            <div class="card">
              <div class="card-header d-none">
                <h4 class="card-title"></h4>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Member</h5>
              </div>
              <div class="card-body">
                <form action="user_update.php" method="POST" enctype=multipart/form-data>
                 <input type="hidden" name="form_hidden" value="<?php echo "$uid"?>">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>House No</label>
                        <input type="text" name="house_no" class="form-control text-uppercase"  value="<?php echo $house_no;?>" placeholder="House No">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Mobile No</label>
                        <input type="text" name="mobile_no" class="form-control text-uppercase" placeholder="Username" value="<?php echo $mobiles_no;?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="e_mails" class="form-control" placeholder="Email" value="<?php echo $emails;?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control text-uppercase" placeholder="First Name" value="<?php echo $firstname; ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control text-uppercase" placeholder="Last Name" value="<?php echo $lastname; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Society Name</label>
                        <input type="text" name="society_name" class="form-control" placeholder="Total Member In House" value="<?php echo $society; ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Birth Date</label>
                        <input type="text" name="b_dates" class="form-control" placeholder="Birthday" value="<?php echo $bdates;?>">
                      </div>
                    </div>
                  </div>
                    <div class="col-md-12 pl-1">
                      <div class="form-group">
                        <label>Total Member</label>
                        <input type="text" name="t_member" class="form-control" placeholder="ZIP Code" value="<?php echo $total_member;?>" value="395001">
                      </div>
                    </div>
                    <div class="col-md-12 pl-1">
                      <div class="form-group">
                        <label>Entry Date</label>
                        <input type="text" name="entry_date" class="form-control" placeholder="Entry Date" value="<?php echo $entry_date;?>">
                      </div>
                    </div>
                  <!-- <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <textarea class="form-control textarea">
                         <img src="<?php echo "$user_photo";?>" alt="##">
                        </textarea>
                      </div>
                    </div> -->
                    <div class="row">
                    <div class="update ml-auto mr-auto text-center">
                      <button type="submit" class="btn btn-primary btn-round">Update Member</button>
                    </div>
                  </div>
                  </div>
                  <!-- <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                  </div> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
             
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear());
                </script>, made with <i class="fa fa-heart heart"></i> by Code Devil's
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>
</html>