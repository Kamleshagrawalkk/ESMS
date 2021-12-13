<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <style>
    .custom-margin {
         margin-top: 8vh;
      }
   </style>
  <title>Login</title>
</head>

<body>
<div class="container pt-5">
<h2  class="text-center">Create an Account</h2>
<div class="row mt-4 mb-4">
<div class="col-md-6 offset-md-3">
<form action="" class="shadow-lg p-4" method="POST">
    <div class="form-group">
        <i class="fas fa-user"></i> <label for="name" class="font-weight-bold pl-2">Name</label><input type="text" class="form-control" placeholder="Name" name="rName">
</div>
<div class="form-group">
        <i class="fas fa-user"></i> <label for="email" class="font-weight-bold pl-2">Email</label><input type="email" class="form-control" placeholder="Email" name="rEmail">
        <small class="form-text">We'll never share your email with anyone..</small>
</div>
<div class="form-group">
        <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">New Password</label><input type="password" class="form-control" placeholder="Password" name="rPassword">
</div>
<button type="Submit" class="btn btn-danger mt-3  font-weight-bold" name="rSignup">Sign Up</button>

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