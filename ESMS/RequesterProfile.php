<?php
include('dbConnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];
   } else {
    echo "<script> location.href='RequesterLogin.php'; </script>";
   }
   $sql = "SELECT r_name, r_email FROM requesterlogin_tb WHERE r_email='$rEmail'";
   $result = $conn->query($sql);
   if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $rName = $row["r_name"];
 }
 if(isset($_REQUEST['nameupdate'])){
    if(($_REQUEST['rName'] == "")){
     // msg displayed if required field missing
     $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
    } else {
     $rName = $_REQUEST["rName"];
     $sql = "UPDATE requesterlogin_tb SET r_name = '$rName' WHERE r_email = '$rEmail'";
     if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
     } else {
     // below msg display on form submit failed
     $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
        }
      }
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  
  <title>Profile</title>
</head>

<body>
<!---- Top navbar --->
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">ESMS</a></nav>


<div class="container-fluid" style="margin-top:20px;">   <!---- end container ---->
<div class="row">
    <nav class="col-sm-2 bg-light sidebar py-5"> <!--- side bar --->
     <div class="sidebar-sticky">
         <ul class="nav flex-column"><li class="nav-item"><a class="nav-link" href="RequesterProfile.php"><i></li>Profile</a></li>
         <li class="nav-item"><a class="nav-link" href="SearchServiceman2.php"><i></li>Search Serviceman</a></li>
         <li class="nav-item"><a class="nav-link" href="#"><i></li>View Serviceman</a></li>
         <li class="nav-item"><a class="nav-link" href="#"><i></li>Book Serviceman</a></li>
         <li class="nav-item"><a class="nav-link" href="#"><i></li>Log Out</a></li>
        </ul>
     </div>
</nav>  <!---- end side bar ---->
<div class="col-sm-6 mt-5">  <!----  start profile area --->
<form action="" method="POST" class="mx-5">
    <div class="form-group">
   <label for="inputEmail">Email</label><input type="email" class="form-control" name="rEmail" id="rEmail" readonly>
    </div>
    <div class="form-group">
    <label for="rName">Name</label><input type="text" class="form-control" name="rName" id="rName">
    </div>
    <br>
    <button class="Submit" class="btn btn-danger" name="nameupdate">Updates Here</button>
</form>
</div> <!---- end profile area --->
</div>
</div>  <!---- end container ---->
 <!---- javascript added ----->
 
 <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>
</html>