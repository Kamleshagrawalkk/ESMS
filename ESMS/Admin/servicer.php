<?php
define('TITLE', 'Servicers');
define('PAGE', 'servicers');
 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
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
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <!--Table-->
  <p class=" bg-dark text-white p-2">List of Service providers</p>
  <?php
    $sql = "SELECT * FROM servicelogin_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table">
  <thead>
   <tr>
    <th scope="col">Servicers ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Action</th>
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
   echo '<tr>';
    echo '<td>'.$row["s_login_id"].'</td>';
    echo '<td>'. $row["s_name"].'</td>';
    echo '<td>'.$row["s_email"].'</td>';
    echo '<td>';
      echo '<form action="editreq2.php" method="POST">';
      echo '<input type="hidden" name="id" value='.$row["s_login_id"].'>
      <button type="submit" class="btn btn-info mr-3" name="edit" value="Edit">Edit</button>';
      echo '</form>';
    echo '<td>';
   echo '</tr>';
  }

 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
if(isset($_REQUEST['delete'])){
  $sql = "DELETE FROM servicelogin_tb WHERE s_login_id = {$_REQUEST['id']}";
  if($conn->query($sql) === TRUE){
    // echo "Record Deleted Successfully";
    // below code will refresh the page after deleting the record
    echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
    } else {
      echo "Unable to Delete Data";
    }
  }
?>
</div>
</div>

</div>







 