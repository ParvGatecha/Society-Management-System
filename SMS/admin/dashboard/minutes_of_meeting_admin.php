
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
          
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          <?php echo "Admin"?>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <?php  include "side_menu_admin.php" ?>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggler">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">Society Managment System</a>
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
        <div class="content">
  <!-- <div>
<button type="button" class="btn btn-success mt-4" data-toggle="modal" data-target="#myModal">
Create Meeting
</button>
</div> -->
      <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Meeting Details</h4>
        <button type="button" class="close" data-dismiss="modal"></button>
      </div>
<form action="insert_meeting.php" method="post" name="member_adding" enctype="multipart/form-data">
      <!-- Modal body -->
      <div class="modal-body">
        <div class="from-group">
          <label>Title:</label>
          <input type="text" name="mom_title" class="form-control" placeholder="Title" required>
           </div>
           <div class="from-group">
          <label>Meeting Date:</label>
          <input type="date" name="mom_date"  class="form-control" placeholder="Date" required>
           </div>
            <div class="from-group">
          <label> Start Time:</label>
          <input type="time" name="mom_stime"  class="form-control" placeholder=" Start Time" required>
           </div>
           <div class="from-group">
          <label>End Time:</label>
          <input type="time" name="mom_etime"  class="form-control" placeholder="End Time" required>
             </div>
              <div class="from-group">
          <label>Topic:</label>
          <input type="text" name="mom_topic"  class="form-control" placeholder="Topic" required>
             </div></div>
      <!-- Modal footer -->
      <div class="modal-footer">
         <button type="submit" class="btn btn-danger"  name="mom_meeting" >Save</button>
        <button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
      </div>
</form>
    </div>
  </div>
</div>

      
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Display Meeting</h4>
                <p>24 Hours Time Format</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                        <th>
                        Id
                      </th>
                      <th>
                      Title
                      </th>
                    
                      <th>
                        Meeting Date
                      </th>
                       
                       <th>
                        Start Time
                      </th>
                      <th>
                        End Time
                      </th>
                      <th>
                       Topic
                      </th>
                      <!-- <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th> -->
                    </thead>

<?php
include "connection.php";
date_default_timezone_set("Asia/Calcutta");
$displayquery="select * from mom_meeting";
$result = mysqli_query($conn,$displayquery);
if(mysqli_num_rows($result)>0){
  $number=1;
  while ($row=mysqli_fetch_array($result)) {
    
echo  '<tr>';

echo '<td>'.$number.'</td>';
  echo '<td>'.$row['title'].'</td>';
   echo '<td>'.$row['meeting_date'].'</td>';
    echo '<td>'.$row['start_time'].'</td>';
     echo '<td>'.$row['end_time'].'</td>';
      echo '<td>'.$row['topic'].'</td>';
    //   echo '<td><a href="edit_mom_meeting.php?id='.$row['meeting_id'].'">
    //   <button type="button" class="btn btn-success editbtn">
    //   EDIT</button></a></td>';
     
    //  echo '<td><a href="delete_meeting.php?id='.$row['meeting_id'].'">
    //  <button type="button" class="btn btn-danger">
    //   delete</button></a></td>';
  
echo'</tr>';
$number++;
}
 }?>

      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        

       
     
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
  <script>
   $(document).ready(function () {
     $('.editbtn').on('click',function(){
      $('#').modal('show');
     });
  });
  </script>
</body>

</html>
