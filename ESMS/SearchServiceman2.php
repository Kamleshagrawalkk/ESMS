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
  <title>Search Here</title>
</head>

<body>
<div class="mb-3 text-center mt-5" style="font-size: 30px;">
   
    <span>ESMS</span>
  </div>
  <p class="text-center" style="font-size: 20px;"> <span>Search Serviceman Here
    </span>
  </p>
  <div class="container-fluid mb-5">
    <div class="row justify-content-center custom-margin">
      <div class="col-sm-6 col-md-4">
        <form action="view_serviceman.php" class="shadow-lg p-4" method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter the pincode Here" name="search">
          </div>
          
          <button type="submit" class="btn btn-outline-danger mt-3 btn-block shadow-sm font-weight-bold">Search</button>
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