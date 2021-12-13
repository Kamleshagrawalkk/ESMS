<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!--- Bootstrap CSS --->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!--- Font Awesome CSS --->
<link rel="stylesheet" href="css/all.min.css">

<!--- Custom CSS --->
<link rel="stylesheet" href="css/custom.css">


<title>ESMS</title>
</head>
<body>
<!----- start navigation --->
<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
 <a href="index.php" class="navbar-brand">Eletrication Service System</a>
 
 <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
     <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="myMenu">
<ul class="navbar-nav pl-5">
    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
    <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
    <li class="nav-item"><a href="requesterlogin.php" class="nav-link">Login</a></li>
    <li class="nav-item"><a href="contactform.php" class="nav-link">Contact Us</a></li>
</ul>
</div>
</nav>  <!---- nav end ---->

<!---- start header jumbotron----->
<header>
<div class="myclass mainHeading">
<h1 class="text-uppercase text-danger font-weight-bold">Welcome To The ESMS</h1>
<p class="font-italic">Customer is happy</p>
<a href="requesterlogin.php" class="btn btn-success mr-5">Login</a>
<a href="#" class="btn btn-danger mr-5">Sign-Up Here</a>
</div>
</header>  <!---- end header jumbotron----->

<!---- start introduction section---->
<div class="container">
<div class="jumbotron">
<h3 class="text-center">ESMS Services</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

</p>
</div>

</div> <!---- end introduction section---->

<!---- start services section ---->
<div class="container text-center border-bottom">
<h2>Our Services</h2>
<div class="row mt-4">
<div class="col-sm-4 mb-4">    
<a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
<h4 class="mt-4">Eletrication Appliances</h4>
</div>
<div class="col-sm-4 mb-4">    
<a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
<h4 class="mt-4">Preventive Maintaines</h4>
</div>
<div class="col-sm-4 mb-4">    
<a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
<h4 class="mt-4">Repair</h4>
</div>
</div>
</div> <!---- end service section  ----->

<!---- start registration section---->
<?php include('UserRegistration.php') ?>
<!---- end registration section---->

<!--- start happy customers ---->
<div class="jumbotron  bg-danger">
<div class="container">
    <h2 class="text-center text-white">Happy Customer To My Service</h2>
    <div class="row mt-3">
   <div class="col-lg-3 col-sm-6"> <!---- start 1st column  ---->
<div class="card shadow-lg mb-2">
    <div class="card-body text-center">
   <img src="images/Eletrication.jpeg" class="img-fluid" style="border-radius:100px;" alt="ele">
<h4 class="card-title">Yogesh</h4>
<p class="card-text">We are happy to service here</p>
</div>
</div>
</div> <!--- end 1st column ---->
<div class="col-lg-3 col-sm-6">
<div class="card shadow-lg mb-2">
    <div class="card-body text-center">
   <img src="images/Eletrication.jpeg" class="img-fluid" style="border-radius:100px;" alt="ele">
<h4 class="card-title">Aniket </h4>
<p class="card-text">We are happy to service here</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="card shadow-lg mb-2">
    <div class="card-body text-center">
   <img src="images/Eletrication.jpeg" class="img-fluid" style="border-radius:100px;" alt="ele">
<h4 class="card-title">Yash Soni</h4>
<p class="card-text">We are happy to service here</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="card shadow-lg mb-2">
    <div class="card-body text-center">
   <img src="images/Eletrication.jpeg" class="img-fluid" style="border-radius:100px;" alt="ele">
<h4 class="card-title">Shubham Roy</h4>
<p class="card-text">We are happy to service here</p>
</div>
</div>
</div>
</div>
 </div>
</div> <!---- end hsppy customer ---->

<!---- start contact us---->
<div class="container">
    <h2 class="text-center mb-4"></h2>
<div class="row">
 
<div class="col-md-4 text-center"> <!--- start 2nd column --->
<strong>Kamlesh Agrawal</strong><br>
kasar galli<br>
maharastra<br>
pin code: 44444<br>
<a href="#" target="_blank">  </a><br>
<br> <br>

</div> <!--- end 2nd column --->
</div>
</div> <!---- end contact us---->

<!--- start footer ---->
<footer class="container-fluid bg-dark mt-5 text-white"> 
<div class="container">
    <div class="row py-3">
        <div class="col-md-6"> <!---- start 1st column --->
    <span class="pr-2">Follows Us On:</span>
<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>

        </div> <!---- end 1st column --->
        <div class="col-md-6 text-right">
<small>Designed By Kamlesh Agrawal</small>
<small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
<small class="ml-2"><a href="Service providers/ServiceRegistration.php">Service Providers</a></small>
</div>
    </div>


</footer>






<!---- Javascript ---->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>