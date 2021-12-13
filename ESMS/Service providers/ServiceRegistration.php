<?php
 include('../dbConnection.php');  
 if(isset($_REQUEST['sSignup'])){
    if(($_REQUEST['sName'] == "") || ($_REQUEST['sEmail'] == "") || ($_REQUEST['sLocation'] == "") || ($_REQUEST['sPassword'] == "")){
        $regmsg = '<div class="alert alert-warning mt-2" role="alert">All fields are required</div>';
    } else {
        
        $sName = $_REQUEST['sName'];
    $sEmail = $_REQUEST['sEmail']; 
    $sPassword = $_REQUEST['sPassword'];
    $sLocation = $_REQUEST['sLocation'];
    $sPincode = $_REQUEST['sPincode'];
    $sql = "INSERT INTO servicelogin_tb(s_name,s_email,s_password,s_location,s_pincode) VALUES('$sName','$sEmail','$sPassword','$sLocation','$sPincode')";
    if($conn->query($sql) == TRUE){
        $regmsg = '<div class="alert alert-success mt-2" role="alert">Account successfully created</div>';
     } else {
        $regmsg = '<div class="alert alert-danger mt-2" role="alert">All fields are required</div>';
     }
    }

 }   

?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">
  <title>Registration</title>
</head>

<body>

<div class="container pt-5">
<h2  class="text-center">Create an Account</h2>
<div class="row mt-4 mb-4">
<div class="col-md-6 offset-md-3">
<form action="" class="shadow-lg p-4" method="POST">
    <div class="form-group">
        <i class="fas fa-user"></i> <label for="name" class="font-weight-bold pl-2">Name</label><input type="text" class="form-control" placeholder="Name" name="sName">
</div>
<div class="form-group">
        <i class="fas fa-user"></i> <label for="email" class="font-weight-bold pl-2">Email</label><input type="email" class="form-control" placeholder="Email" name="sEmail">
        <small class="form-text">We'll never share your email with anyone..</small>
</div>
<div class="form-group">
        <i class="fas fa-user"></i> <label for="location" class="font-weight-bold pl-2">Location</label><input type="location" class="form-control" placeholder="Location" name="sLocation">
        
</div>
<div class="form-group">
        <i class="fas fa-user"></i> <label for="pincode" class="font-weight-bold pl-2">Pincode</label><input type="pincode" class="form-control" placeholder="Pincode" name="sPincode">
        
</div>
<div class="form-group">
        <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">New Password</label><input type="password" class="form-control" placeholder="Password" name="sPassword">
</div>
<button type="Submit" class="btn btn-danger mt-3  font-weight-bold" name="sSignup">Sign Up</button>
<?php if(isset($regmsg)) {echo $regmsg;} ?>
</form>
</div>
</div>
</div>

<!-- Boostrap JavaScript -->
<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>

    </body>
    </html>