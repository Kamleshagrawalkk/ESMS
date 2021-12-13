<?php    
define('TITLE', 'Update Service Provider');
define('PAGE', 'servicers');

include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 // update
 if(isset($_REQUEST['requpdate'])){
  // Checking for Empty Fields
  if(($_REQUEST['s_login_id'] == "") || ($_REQUEST['s_name'] == "") || ($_REQUEST['s_email'] == "")){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    // Assigning User Values to Variable
    $rid = $_REQUEST['s_login_id'];
    $rname = $_REQUEST['s_name'];
    $remail = $_REQUEST['s_email'];

  $sql = "UPDATE servicelogin_tb SET s_login_id = '$rid', s_name = '$rname', s_email = '$remail' WHERE s_login_id = '$rid'";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
    }
  }
  }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">

  <!-- custom CSS -->
  <link rel="stylesheet" href="../css/custom.css">


</head>

<body>

<div class="col-sm-6 mt-5  mx-3">
  <h3 class="text-center">Update Requester Details</h3>
  <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM servicelogin_tb WHERE s_login_id = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
  <form action="" method="POST">
    <div class="form-group">
      <label for="s_login_id">Servicers ID</label>
      <input type="text" class="form-control" id="s_login_id" name="s_login_id" value="<?php if(isset($row['s_login_id'])) {echo $row['s_login_id']; }?>">
    </div>
    <div class="form-group">
      <label for="s_name">Name</label>
      <input type="text" class="form-control" id="s_name" name="s_name" value="<?php if(isset($row['s_name'])) {echo $row['s_name']; }?>">
    </div>
    <div class="form-group">
      <label for="s_email">Email</label>
      <input type="text" class="form-control" id="s_email" name="s_email" value="<?php if(isset($row['s_email'])) {echo $row['s_email']; }?>">
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
      <a href="servicer.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>

</body>
</html>