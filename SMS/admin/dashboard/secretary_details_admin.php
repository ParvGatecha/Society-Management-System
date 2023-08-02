
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
          
        </nav>
     

  <!----------------------------INSERT USER DETAILS START----------------------------->
<div>
<button type="button" class="btn btn-success mt-27" data-toggle="modal" data-target="#myModal">
 ADD Secretary
</button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Secretary detail</h4>
        <button type="button" class="close" data-dismiss="modal"></button>
      </div>
<form action="insert_secretary.php" method="post" name="member_adding" enctype="multipart/form-data">
      <!-- Modal body -->
      <div class="modal-body">
        <div class="from-group">
        	<label>First name:</label>
        	<input type="text" name="admin_firstname" class="form-control" placeholder="First Name" required>
        	 </div>
        	 <div class="from-group">
        	<label>Last name:</label>
        	<input type="text" name="admin_lastname"  class="form-control" placeholder="Last Name" required>
        	 </div>
            <div class="from-group">
          <label> Email:</label>
          <input type="email" name="admin_email"  class="form-control" placeholder=" Email" required>
           </div>
        	 <div class="from-group">
        	<label>Mobile:</label>
        	<input type="number" name="admin_mobile"  class="form-control" placeholder="Mobile No" required>
             </div>
             <div class="from-group">
        	<label>Birthday:</label>
            <input type="date" name="admin_birthday_date" class="form-control" placeholder="Birthday Date" size="34" required>
             </div>
             <div class="from-group">
            <label>Gender:</label> 
          <select   name="gender_type" class="form-control">
             <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
             </div>
             <div class="from-group">
        	<label>Occupation:</label>
        	<input type="text" name="admin_occupation"  class="form-control" placeholder="occupation" required>
             </div>
             <div class="from-group">
        	<label>Username:</label>
        	<input type="text" name="admin_username"  class="form-control" placeholder="username" required>
             </div>
             <div class="from-group">
        	<label>Password:</label>
        	<input type="password" name="admin_password"  class="form-control" placeholder="Password" required>
             </div>
             <div class="from-group">
        	<label>Join Date</label>
            <input type="date" name="admin_join_date" class="form-control" placeholder="DATE" size="34" required>
        	 </div>
             <div class="from-group">
        	<label>Photo:</label>
        	<input type="file" name="admin_profile_photo"  class="form-control">
             </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	 <button type="submit" class="btn btn-danger"  name="insert_secretary" >Save</button>
        <button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
      </div>
</form>
    </div>
  </div>
</div>
<!----------------------------INSERT USER DETAILS END----------------------------->


<div class="res-table">
<table class="table" >
	<thead class="thead-dark" >
<h4 class="text-success font-weight-bold py-4">DISPLAY SECTRETARY RECORDS</h4></td>
		
	<tr>
    <th>Sr.No</th>
	<th>First Name</th>
  	<th>Last Name</th>
    <th>Email</th>
    <th>Mobile no</th>
    <th>Birthday</th>
    <th>Gender</th>
    <th>Occupation</th>
    <th>Username</th>
    <th>Join Date</th>
	<th>Edit</th>
	<th>Delete</th>
	</tr>
 <?php
include "connection.php";
$displayquery="select * from secretary_entry";
$result = mysqli_query($conn,$displayquery);
if(mysqli_num_rows($result) > 0){
  $number=1;
	while ($row=mysqli_fetch_array($result)) {

		
echo	'<tr>';

echo '<td>'.$number.'</td>';
  echo '<td>'.$row['f_name'].'</td>';
   echo '<td>'.$row['l_name'].'</td>';
    echo '<td>'.$row['e_mails'].'</td>';
     echo '<td>'.$row['mobiles_no'].'</td>';
      echo '<td>'.$row['dob'].'</td>';
     echo '<td>'.$row['gender'].'</td>';
    echo '<td>'.$row['occupation'].'</td>';
   echo '<td>'.$row['username'].'</td>';
     echo '<td>'.$row['join_date'].'</td>';
      echo '<td><a href="edit_secretary_detail.php?id='.$row['sec_id'].'">
      <button type="button" class="btn btn-success editbtn">
      Edit</button></a></td>';
        
     echo '<td><a href="delete_secretary_detail.php?id='.$row['sec_id'].'">
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
