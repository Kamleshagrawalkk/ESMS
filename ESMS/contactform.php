<?php
include('dbConnection.php');

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

  <style>
    .custom-margin {
         margin-top: 8vh;
      }
   </style>
  <title>Contact Form</title>
</head>

<body>
<div class="col-md-8"> <!--- start 1st column ----->
<form action="" method="POST">
<input type="text" class="form-control"  name="name" placeholder="Name"><br>
<input type="text" class="form-control"  name="subject" placeholder="Subject"><br>
<input type="email" class="form-control"  name="email" placeholder="Email"><br>
<textarea  class="form-control"  name="message" placeholder="How can we help you" style="height:150px;"></textarea><br>
<input type="submit" class="btn btn-primary" value="Send" name="submit"><br><br>
</form>
</div> <!--- end 1st column ----->

   </body>
   </html>