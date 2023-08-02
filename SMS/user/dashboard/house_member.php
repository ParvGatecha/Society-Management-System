<?php
ob_clean();
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
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
        <?php session_start();
            echo $_SESSION['username'];
          ?>
        </a>
      </div>
      <div class="sidebar-wrapper">
      <?php  include "side_menu_user.php"?>
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
            <?php include "nav_bar_user.php";?>
          </div>
        </div>
      </nav>

      <div class="content">
  <div>
  <a href="display_house_all_member.php" class="btn btn-primary mt-4">Display Member</a>
</div>
      <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Complain Details</h4>
        <button type="button" class="close" data-dismiss="modal"></button>
      </div>
<form action="insert_complain.php" method="post" name="member_adding" enctype="multipart/form-data">
      <!-- Modal body -->
      <div class="modal-body">
           
      <div class="from-group">
            <label>Complain Title</label> 
            <input type="text" name="c_title"  class="form-control" placeholder="Complain Title" required>
             </div>
             <div class="from-group">
            <label>Complain Description</label> 
             <textarea  name="c_description"  class="form-control" placeholder="Complain Details" required></textarea>
             </div>
           <div class="from-group">
          <label>Date:</label>
          <input type="text" name="c_date" value="<?php echo date("Y-m-d");?>" class="form-control" required>
           </div>
              <div class="from-group">
          <label>Complain Solution:</label>
          <textarea  name="c_solution"  class="form-control" placeholder="Complain  Remarks" disabled required></textarea>
             </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
         <button type="submit" class="btn btn-danger"  name="complain_insert" >Save</button>
        <button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
      </div>
</form>
    </div>
  </div>
</div>

      
      

 <?php
include "connection.php";

$displayquery="select * from user_entry where user_id=".$_SESSION['user'];
$result = mysqli_query($conn,$displayquery);
$row=mysqli_fetch_assoc($result);

$query="select count(h_id) from house_member where user_id=".$_SESSION['user'];
$result1 = mysqli_query($conn,$query);
$row1=mysqli_fetch_array($result1);

?>
  <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Insert House Member</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action="#" method="POST">
                  <table class="table">
                    <thead class=" text-primary">
                        <th>Sr no</th>
                      <th>
                      Name 
                      </th>
                    
                      <th>
                      Gender
                      </th>
                       
                       <th>
                       Birthday
                      </th>
                      <th>
                         Blood Group
                      </th>
                    </thead>
                   <tbody>
                       <?php
                       $count=1;
                        $total=$row['total_member']-$row1[0];
                        for($i=0;$i<$total;$i++){
                         echo "<tr>";
                          echo "<td>".$count."</td>";
                          echo "<td><input type='text' name='h_name".$i."' required></td>";
                          echo "<td><select name='h_gender".$i."' required>
                          <option value=''>--select--</option>
                          <option value='M'>Male</option>
                          <option value='F'>Female</option>
                          </select></td>";
                          echo "<td><input type='date' name='h_date".$i."' required></td>";
                          echo "<td><input type='text' name='h_blood".$i."' required></td>";
                         echo "</tr>";
                         $count++;
              
                        }?>
                        <tr class="text-center">
                        <?php
                         if($total>0)
                         {
                           echo "<td><input type='submit' name='h_submit' class='btn btn-primary'></td>";
                         }
                         else{
                          echo "<td>Limit of Member Insert is Exceed</td>";
                         }
                        ?>
                        
                       </tr>
                  </tbody>
                  </table>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
        if(isset($_POST['h_submit'])){
             $h_name=array(); 
             $h_gender=array();
             $h_dob=array();
             $h_blood=array();
            for($i=0;$i<$total;$i++){
              array_push($h_name,$_POST['h_name'.$i]);
              array_push($h_gender,$_POST['h_gender'.$i]);
              array_push($h_dob,$_POST['h_date'.$i]);
              array_push($h_blood,$_POST['h_blood'.$i]);
            }
           for($j=0;$j<$total;$j++){
             
            $insert_member="insert into house_member(h_name,h_gender,h_dob,h_blood,user_id)values('".$h_name[$j]."','".$h_gender[$j]."','".$h_dob[$j]."','".$h_blood[$j]."',".$_SESSION['user'].")";
            $result=mysqli_query($conn,$insert_member);
          
          }
          
          
        }
      
      
      ?>
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
