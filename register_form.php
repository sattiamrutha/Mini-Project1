<?php
include "db_connection.inc.php";

$con = dbConnect();

if(!$con){
		die("error in data base connection!");
}
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$facultyid = $_POST["facultyid"];
$type = $_POST["type"];
$password = $_POST["password"];
$branch = $_POST["branch"];
$mobileno = $_POST["mobileno"];
$query = "insert into login values('$facultyid', '$password', '$type', '$fullname', '$branch','$mobileno','$email')";
$rs = mysqli_query($con, $query);
if(!$rs){
	header("Location:./register.php");
}?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/tabs.css">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
    <font color="#007bff"><center><h3><img src="assets/img/vishnu logo.png" align="left" height="100" width="100"></img>SHRI VISHNU ENGINEERING COLLEGE FOR WOMEN(Autonomous)</h3></center></font>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href=""><span>Circulars</span></a></h1>

      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="">Home</a></li>
          <li><a href="">Faculty</a></li>
          <li><a href="">Student</a></li>
          <li><a href="">Exams</a></li>
          <li><a href="">Events</a></li>
          <li><a href="">Contact Us</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>

    </div>
  </header>
<h1>Data Inserted Successfully <a href='login.php'>Click Here</a> to Login
</h1><br><br><br><br>
<footer id="footer">
    
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>IT</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="">Information Technology Department</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>
  <script type="text/javascript" src="assets/js/tabs.js"></script>

</body>

</html>
