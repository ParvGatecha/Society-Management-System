
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
          Admin
        </a>
      </div>
      <div class="sidebar-wrapper">
      <?php  include "side_menu_admin.php"?>
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
     

  <!----------------------------INSERT USER DETAILS START----------------------------->
<div>
<button type="button" class="btn btn-success mt-27" data-toggle="modal" data-target="#myModal">
 ADD MEMBERS
</button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Memebers detail</h4>
        <button type="button" class="close" data-dismiss="modal"></button>
      </div>
<form action="insert_member.php" method="post" name="member_adding" enctype="multipart/form-data">
      <!-- Modal body -->
      <div class="modal-body">
        <div class="from-group">
        	<label>First name:</label>
        	<input type="text" name="m_firstname" class="form-control" placeholder="First Name" required>
        	 </div>
        	 <div class="from-group">
        	<label>Last name:</label>
        	<input type="text" name="m_lastname"  class="form-control" placeholder="Last Name" required>
        	 </div>
            <div class="from-group">
          <label> Email:</label>
          <input type="email" name="email"  class="form-control" placeholder=" Email" required>
           </div>
        	 <div class="from-group">
        	<label>Mobile:</label>
        	<input type="number" name="mobile"  class="form-control" placeholder="Mobile No" required>
             </div>
             <div class="from-group">
        	<label>Birthday:</label>
            <input type="date" name="birthday_date" class="form-control" placeholder="Birthday Date" size="34" required>
             </div>
             <div class="from-group">
        	<label>House No:</label>
        	<input type="text" name="house_no"  class="form-control" placeholder="House No" required>
             </div>
             <div class="from-group">
        	<label>Society Name:</label>
        	<input type="text" name="society_name"  class="form-control" placeholder="Society Name" required>
             </div>
             <div class="from-group">
            <label>Total Members:</label> 
          <select   name="total_user_memeber" class="form-control">
             <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
             </div>
             <div class="from-group">
        	<label>Entry Date</label>
            <input type="date" name="entry_member_date" class="form-control" placeholder="DATE" size="34" required>
        	 </div>
        	 <div class="from-group">
        	<label>Password:</label>
        	<input type="password" name="password"  class="form-control" placeholder="Password" required>
             </div>
             <div class="from-group">
        	<label>Photo:</label>
        	<input type="file" name="profile_photo"  class="form-control">
             </div>
             
             <div class="from-group">
            <label>Account Type:</label> 
          <select   name="account_type" class="form-control">
             <option value="1">Users</option>
              <option value="2">Admin</option>
            </select>
             </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	 <button type="submit" class="btn btn-danger"  name="insert_members" >Save</button>
        <button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
      </div>
</form>
    </div>
  </div>
</div>

<div class="res-table">
<table class="table" >
	<thead class="thead-dark" >
<h4 class="text-success font-weight-bold py-4" >DISPLAY MEMBER RECORD</h4></td>
		
	<tr>
    <th>Sr.No</th>
	  <th>First Name</th>
  	<th>Last Name</th>
    <th>Email</th>
    <th>Mobile no</th>
    <th>Birthday</th>
    <th>House No</th>
    <th>Society Name</th>
	  <th>Total Member</th>
    <th>Entry Date</th>
	  <th>Edit</th>
	  <th>Delete</th>
	</tr>
<?php
include "connection.php";
$displayquery="select * from user_entry";
$result = mysqli_query($conn,$displayquery);
if(mysqli_num_rows($result)>0){
  $number=1;
	while ($row=mysqli_fetch_array($result)) {

		
echo	'<tr>';

echo '<td>'.$number.'</td>';
  echo '<td>'.$row['first_name'].'</td>';
   echo '<td>'.$row['last_name'].'</td>';
    echo '<td>'.$row['e_mail'].'</td>';
     echo '<td>'.$row['mobile_no'].'</td>';
      echo '<td>'.$row['b_date'].'</td>';
     echo '<td>'.$row['house_id'].'</td>';
    echo '<td>'.$row['society_name'].'</td>';
   echo '<td>'.$row['total_member'].'</td>';
     echo '<td>'.$row['entry_date'].'</td>';
      echo '<td><a href="edit_user_detail.php?id='.$row['user_id'].'">
      <button type="button" class="btn btn-success editbtn">
      Edit</button></a></td>';
     
     echo '<td><a href="delete_societymember.php?id='.$row['user_id'].'">
     <button type="button" class="btn btn-danger">
      delete</button></a></td>';
	
echo'</tr>';
$number++;
}
 }?>

</thead>
</table>
</div>
<!-------------------DISPLAY USER DETAILS IN TABLE END--------------------------->

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script >
  $(document).ready(function () {
     $('.editbtn').on('click',function(){
      $('#').modal('show');
     });
  });
</script>

	</body>

	</html>
        <!-----------php new codw end---------------------------------------------->
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
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
